<?php

namespace Line9\Sdk\Sdk\ErpSdk;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

/**
 * @description 付款单
 */
class PaymentForm extends Sdk
{
    protected function flag(): string
    {
        return 'erp';
    }

    /**
     * @description 付款记录
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function list(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/payment_form/list', $params, $headers, $options);
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
        return $this->request('post', '/erp-api/service/payment_form/detail', $params, $headers, $options);
    }


    /**
     * @description 现在付款单
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function add(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/payment_form/add', $params, $headers, $options);
    }

    /**
     * @description 提交付款单
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function submit(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/payment_form/submit', $params, $headers, $options);
    }

    /**
     * @description 更新付款单
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function update(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/payment_form/update', $params, $headers, $options);
    }
}
