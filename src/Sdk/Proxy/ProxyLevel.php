<?php


namespace Line9\Sdk\Sdk\Proxy;


use Line9\Sdk\Sdk\Sdk;
use Line9\Sdk\Exception\SdkException;

class ProxyLevel extends Sdk
{
    protected function flag(): string
    {
        return 'shop';
    }

    /**
     * @description 列表
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function list(array $params): array
    {
        return $this->request('POST', 'shop-api/service/proxy/proxy-level/list', $params, []);
    }

    /**
     * @description 创建
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function create(array $params): array
    {
        return $this->request('POST', 'shop-api/service/proxy/proxy-level/create', $params, []);
    }

    /**
     * @description 更新
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function update(array $params): array
    {
        return $this->request('POST', 'shop-api/service/proxy/proxy-level/update', $params, []);
    }

    /**
     * @description 删除
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function delete(array $params): array
    {
        return $this->request('POST', 'shop-api/service/proxy/proxy-level/delete', $params, []);
    }

    /**
     * @description 启用/关闭
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function onOff(array $params): array
    {
        return $this->request('POST', 'shop-api/service/proxy/proxy-level/on-off', $params, []);
    }
}