<?php

namespace Line9\Sdk\Sdk\ErpSdk;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

/**
 * @description 送货单
 */
class DeliveryForm extends Sdk
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
        return $this->request('post', '/erp-api/service/delivery_form/list', $params, $headers, $options);
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
        return $this->request('post', '/erp-api/service/delivery_form/detail', $params, $headers, $options);
    }

    /**
     * @description 明细
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function particular(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/delivery_form/delivery_details', $params, $headers, $options);
    }


    /**
     * @description 明细（精简版）
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function simpleParticular(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/delivery_form/base_delivery_details', $params, $headers, $options);
    }


    /**
     * @description 发起退货
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function returnGoods(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/delivery_form/return_goods', $params, $headers, $options);
    }

    /**
     * @description 作废
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function scrap(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/delivery_form/scrap', $params, $headers, $options);
    }

    /**
     * @description 确认到货
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function confirmArrivalGoods(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/delivery_form/confirm_arrival_goods', $params, $headers, $options);
    }
}
