<?php

namespace Line9\Sdk\Sdk\ErpSdk;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class SampleForm extends Sdk
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
    function getPage(array $params = [], array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/sample_form/list', $params, $headers, $options);
    }

    /**
     * @description 增
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function create(array $params = [], array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/sample_form/create', $params, $headers, $options);
    }

    /**
     * @description 改
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function update(array $params = [], array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/sample_form/edit', $params, $headers, $options);
    }

    /**
     * @description 详情
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function detail(array $params = [], array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/sample_form/detail', $params, $headers, $options);
    }

    /**
     * @description 供应商寄样明细
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function getSupplierSendingDetails(array $params = [], array $headers = [], array $options = []): array
    {
        return $this->request(
            'post',
            '/erp-api/service/sample_form/sample_supplier', $params, $headers, $options);
    }

    /**
     * @description 确认收样
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function receipt(array $params = [], array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/sample_form/receipt', $params, $headers, $options);
    }

    /**
     * @description 提交过品
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function passSubmit(array $params = [], array $headers = [], array $options = []): array
    {
        return $this->request(
            'post',
            '/erp-api/service/sample_form/pass_submit', $params, $headers, $options);
    }

    /**
     * @description 发单
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function issued(array $params = [], array $headers = [], array $options = []): array
    {
        return $this->request(
            'post',
            '/erp-api/service/sample_form/issued', $params, $headers, $options);
    }

    /**
     * @description 撤单
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function revoke(array $params = [], array $headers = [], array $options = []): array
    {
        return $this->request(
            'post',
            '/erp-api/service/sample_form/revoke', $params, $headers, $options);
    }

    /**
     * @description 删除
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function delete(array $params = [], array $headers = [], array $options = []): array
    {
        return $this->request(
            'post',
            '/erp-api/service/sample_form/delete', $params, $headers, $options);
    }

}