<?php

namespace  Sdk\Base;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class Sdk
{
    private static $instance;
    private static $host;
    private static $ip;
    private static $logger;
    private static $requestId;

    private function __construct()
    {
    }

    public static function bootstrap(string $host, string $ip, string $requestId, callable $logger)
    {
        self::$host = $host;
        self::$ip = $ip;
        self::$logger = $logger;
        self::$requestId = $requestId;
    }

    public static function getInstance(): self
    {
        if (!self::$instance) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    protected function getUrl(string $path): string {
        return self::$ip . $path;
    }

    /**
     * 请求方法
     * @param string $method
     * @param string $path
     * @param array $params
     * @param array $headers
     * @return array
     */
    public function request(string $method, string $path, array $params, array $headers): array
    {
        $client = new Client();
        $headers['Host'] = self::$host;
        $headers['Request-Id'] = self::$requestId;
        $headers['Content-Type'] = 'application/json;charset=utf-8';
        $requestUrl = $this->getUrl($path);
        try {
            $response = $client->request($method, $requestUrl, [
                'headers' => $headers,
                'body' => json_encode($params)
            ]);
            $responseCode = $response->getStatusCode();
            $responseRawContent = $response->getBody()->getContents();
            if ($responseCode != 200) {
                (self::$logger)('sdk:request:code!=200(' . $responseCode . ')=>' . $requestUrl);
                return [];
            }
            $responseData = json_decode($responseRawContent, true);
            if (!$responseData) {
                (self::$logger)('sdk:request:data is not a JSON' . $responseRawContent);
                return [];
            }
            return $responseData;
        } catch (GuzzleException $e) {
            (self::$logger)('sdk:request:exception:' . $e->getMessage());
            return [];
        }
    }
}