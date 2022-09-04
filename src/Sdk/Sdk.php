<?php

namespace  Line9\Sdk\Sdk;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Line9\Sdk\Exception\SdkException;

abstract class Sdk
{
    private static $clients;
    private static $signKey;
    private static $logger;
    private static $requestId;

    /**
     * @description 客户端标识 识别SDK服务的提供者
     * @return string
     */
    abstract protected function flag(): string;

    public static function register(string $signKey, array $clients, string $requestId, callable $logger)
    {
        self::$signKey = $signKey;
        self::$clients = $clients;
        self::$logger = $logger;
        self::$requestId = $requestId;
    }

    protected function getUrl(string $ip, string $path): string {
        return $ip . '/' . ltrim($path, '/');
    }

    /**
     * 请求方法
     * @param string $method
     * @param string $path
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    protected function request(string $method, string $path, array $params, array $headers, array $options = []): array
    {
        $client = new Client();
        $time = microtime(true);
        // 获取目标地址配置
        $config = self::$clients[$this->flag()];
        if (!$config) {
            throw (new SdkException('[' . $this->flag() . ']client配置不正确'))
                ->setRequestParams($params)
                ->setRequestHeaders($headers)
                ->setResponse('');
        }
        // 配置host
        if ($config['host']) {
            $headers['Host'] = $config['host'];
        }
        // 配置headers
        $headers['Request-Id'] = self::$requestId;
        $headers['Content-Type'] = 'application/json;charset=utf-8';
        $headers['Request-Time'] = $time;
        $headers['sign'] = hash_hmac('sha1', $time, self::$signKey);
        // 配置options
        $options['verify'] = false;
        $options['http_errors'] = false;
        $options['headers'] = $headers;
        $options['body'] = json_encode($params);
        // 生成请求地址
        $requestUrl = $this->getUrl($config['address'], $path);
        try {
            $response = $client->request($method, $requestUrl, $options);
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
            if (isset($responseData['code']) && $responseData['code'] != 0) {
                throw (new SdkException($responseData['msg']))->setRequestParams($params)->setRequestHeaders($headers)->setResponse($responseRawContent);
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