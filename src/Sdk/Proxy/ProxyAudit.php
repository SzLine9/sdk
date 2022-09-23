<?php

namespace Line9\Sdk\Sdk\Proxy;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class ProxyAudit extends Sdk
{
    protected function flag(): string
    {
        return 'shop-api';
    }

    /**
     * @description 审核列表
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function list(array $params): array
    {
        return $this->request('post', 'shop-api/service/proxy/proxy-audit/list', $params, [], []);
    }

    /**
     * @description 审核详情
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function detail(array $params): array
    {
        return $this->request('post', 'shop-api/service/proxy/proxy-audit/detail', $params, [], []);
    }

    /**
     * @description 初审通过
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function preAgree(array $params): array
    {
        return $this->request('post', 'shop-api/service/proxy/proxy-audit/pre-agree', $params, [], []);
    }

    /**
     * @description 初审拒绝
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function preReject(array $params): array
    {
        return $this->request('post', 'shop-api/service/proxy/proxy-audit/pre-reject', $params, [], []);
    }

    /**
     * @description 终审通过
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function agree(array $params): array
    {
        return $this->request('post', 'shop-api/service/proxy/proxy-audit/agree', $params, [], []);
    }

    /**
     * @description 终审拒绝
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function reject(array $params): array
    {
        return $this->request('post', 'shop-api/service/proxy/proxy-audit/reject', $params, [], []);
    }
}