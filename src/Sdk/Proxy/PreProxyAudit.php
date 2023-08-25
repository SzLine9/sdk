<?php

namespace Line9\Sdk\Sdk\Proxy;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class PreProxyAudit extends Sdk
{
    protected function flag(): string
    {
        return 'shop';
    }

    /**
     * @desc 代理审核列表
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function list(array $params): array
    {
        return $this->request('POST', 'shop-api/service/proxy/pre-proxy-audit-list', $params, []);
    }

    /**
     * @desc 代理审核同意
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function agree(array $params): array
    {
        return $this->request('POST', 'shop-api/service/proxy/pre-proxy-audit-agree', $params, []);
    }

    /**
     * @desc 代理审核拒绝
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function reject(array $params): array
    {
        return $this->request('POST', 'shop-api/service/proxy/pre-proxy-audit-reject', $params, []);
    }
}