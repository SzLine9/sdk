<?php

namespace Line9\Sdk\Sdk\Proxy;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class Proxy extends Sdk
{
    /**
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function getProxyList(array $params): array
    {
        return $this->request('POST', 'shop-api/service/proxy/get-proxy-list', $params, []);
    }

    /**
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function detail(array $params): array
    {
        return $this->request('POST', 'shop-api/service/proxy/get-proxy-detail', $params, []);
    }

    /**
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function save(array $params): array
    {
        return $this->request('POST', 'shop-api/service/proxy/save', $params, []);
    }
}