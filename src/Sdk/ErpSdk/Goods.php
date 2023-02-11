<?php

namespace Line9\Sdk\Sdk\ErpSdk;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

/**
 * @description 商品
 */
class Goods extends Sdk
{
    protected function flag(): string
    {
        return 'erp';
    }

    /**
     * @description 同步飞书表商品
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function sync(array $params = [], array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/goods/sync', $params, $headers, $options);
    }

    /**
     * @description 列表
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function getPage(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/goods/list', $params, $headers, $options);
    }

    /**
     * @description 详情
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function detail(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/goods/detail', $params, $headers, $options);
    }
}