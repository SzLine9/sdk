<?php

namespace Line9\Sdk\Sdk\Proxy;

use Line9\Sdk\Sdk\Sdk;

class Proxy extends Sdk
{
    public function getProxyList(array $params): array
    {
        return $this->request('POST', 'shop-api/service/proxy/get-proxy-list', $params, []);
    }

    public function detail(array $params): array
    {
        return $this->request('POST', 'shop-api/service/proxy/get-proxy-detail', $params, []);
    }

    public function save(array $params): array
    {
        return $this->request('POST', 'shop-api/service/proxy/save', $params, []);
    }
}