<?php

namespace Line9\Sdk\Sdk\ErpSdk;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

/**
 * @description 供应商
 */
class Supplier extends Sdk
{
    protected function flag(): string
    {
        return 'erp';
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
        return $this->request('post', '/erp-api/service/supplier/list', $params, $headers, $options);
    }

    /**
     * @description 创建
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function create(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/supplier/create', $params, $headers, $options);
    }

    /**
     * @description 编辑
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function update(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/supplier/edit', $params, $headers, $options);
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
        return $this->request('post', '/erp-api/service/supplier/detail', $params, $headers, $options);
    }

    /**
     * @description 禁启用
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function enable(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/supplier/enable', $params, $headers, $options);
    }

    /**
     * @description 公用 - 搜索供应商联系人
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function searchSupplier(array $params, array $headers = [], array $options = []): array
    {
        return $this->request(
            'post',
            '/erp-api/service/supplier/search_supplier',
            $params,
            $headers,
            $options);
    }
}