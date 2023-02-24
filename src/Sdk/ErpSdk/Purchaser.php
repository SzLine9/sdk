<?php

namespace Line9\Sdk\Sdk\ErpSdk;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

/**
 * @description 采购员
 */
class Purchaser extends Sdk
{

    protected function flag(): string
    {
        return 'erp';
    }

    /**
     * @description 同步
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function sync(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/purchaser/sync', $params, $headers, $options);
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
        return $this->request('post', '/erp-api/service/purchaser/list', $params, $headers, $options);
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
        return $this->request('post', '/erp-api/service/purchaser/edit', $params, $headers, $options);
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
        return $this->request('post', '/erp-api/service/purchaser/detail', $params, $headers, $options);
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
        return $this->request('post', '/erp-api/service/purchaser/enable', $params, $headers, $options);
    }

    /**
     * @description 部门
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function department(array $params = [], array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/purchaser/department', $params, $headers, $options);
    }
}