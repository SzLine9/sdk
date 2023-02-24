<?php

namespace Line9\Sdk\Sdk\ErpSdk;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

/**
 * @description 建档单
 */
class FilingForm extends Sdk
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
    function list(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/filing_form/list', $params, $headers, $options);
    }

    /**
     * @description 创建
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function add(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/filing_form/add', $params, $headers, $options);
    }

    /**
     * @description 编辑
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function edit(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/filing_form/edit', $params, $headers, $options);
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
        return $this->request('post', '/erp-api/service/filing_form/detail', $params, $headers, $options);
    }

    /**
     * @description 撤单
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function repeal(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/filing_form/repeal', $params, $headers, $options);
    }

    /**
     * @description 发单
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function send(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/filing_form/send', $params, $headers, $options);
    }
}
