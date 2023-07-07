<?php

namespace Line9\Sdk\Sdk\Proxy;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class Proxy extends Sdk
{
    protected function flag(): string
    {
        return 'shop';
    }
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
     * @description 代理详情
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

    /**
     * 获取用户收益详情
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function getProfile(array $params): array
    {
        return $this->request('POST', 'shop-api/service/proxy/profile', $params, []);
    }

    /**
     * @description 代理详情-直属直推下级列表
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function getDirectProxyList(array $params): array
    {
        return $this->request('POST', 'shop-api/service/proxy/get-direct-proxy-list', $params, []);
    }

    /**
     * @description 代理详情-间推下级代理列表
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function getIndirectProxyList(array $params): array
    {
        return $this->request('POST', 'shop-api/service/proxy/get-indirect-proxy-list', $params, []);
    }

    /**
     * @description 代理详情-粉丝列表
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function getFansList(array $params): array
    {
        return $this->request('POST', 'shop-api/service/proxy/get-fans-list', $params, []);
    }
}