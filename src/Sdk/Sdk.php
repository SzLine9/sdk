<?php

namespace  Line9\Sdk\Sdk;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Line9\Sdk\Exception\SdkException;

class Sdk
{
    private static $signKey;
    private static $host;
    private static $ip;
    private static $logger;
    private static $requestId;

    public static function register(string $signKey, string $host, string $ip, string $requestId, callable $logger)
    {
        self::$signKey = $signKey;
        self::$host = $host;
        self::$ip = $ip;
        self::$logger = $logger;
        self::$requestId = $requestId;
    }

    protected function getUrl(string $path): string {
        return self::$ip . '/' . ltrim($path, '/');
    }

    /**
     * 请求方法
     * @param string $method
     * @param string $path
     * @param array $params
     * @param array $headers
     * @return array
     * @throws SdkException
     */
    protected function request(string $method, string $path, array $params, array $headers): array
    {
        $client = new Client();
        $time = microtime(true);
        if (self::$host) {
            $headers['Host'] = self::$host;
        }
        $headers['Request-Id'] = self::$requestId;
        $headers['Content-Type'] = 'application/json;charset=utf-8';
        $headers['Request-Time'] = $time;
        $headers['sign'] = hash_hmac('sha1', $time, self::$signKey);
        $requestUrl = $this->getUrl($path);
        try {
            $response = $client->request($method, $requestUrl, [
                'headers' => $headers,
                'body' => json_encode($params)
            ]);
            $responseCode = $response->getStatusCode();
            $responseRawContent = $response->getBody()->getContents();
            $responseData = json_decode($responseRawContent, true);
            if ($responseCode != 200) {
                $message = '商城系统返回非200Code码(' . $responseCode . ')';
                (self::$logger)('sdk:request:code!=200(' . $responseCode . ')=>' . $requestUrl);
                if (isset($responseData['msg'])) {
                    $message = $responseData['msg'];
                }
                throw (new SdkException($message))->setRequestParams($params)->setRequestHeaders($headers)->setResponse($responseRawContent);
            }
            if (!$responseData) {
                $message = '商城系统返回数据无法识别';
                (self::$logger)('sdk:request:data is not a JSON' . $responseRawContent);
                throw (new SdkException($message))->setRequestParams($params)->setRequestHeaders($headers)->setResponse($responseRawContent);
            }
            (self::$logger)('request-shop-api:params:' . json_encode($params) . ';response:' . json_encode($responseData));
            return $responseData['data'];
        } catch (GuzzleException $e) {
            (self::$logger)('sdk:request:exception:' . $e->getMessage());
            $exception = new SdkException($e->getMessage());
            $exception->setRequestParams($params);
            $exception->setRequestHeaders($headers);
            throw $exception;
        }
    }
}