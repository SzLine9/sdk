<?php

namespace Line9\Sdk\Sdk\ErpSdk;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

/**
 * @description 退货单
 */
class ReturnGoodsForm extends Sdk
{
    protected function flag(): string
    {
        return 'erp';
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
        return $this->request('post', '/erp-api/service/return_goods_form/create', $params, $headers, $options);
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
        return $this->request('post', '/erp-api/service/return_goods_form/edit', $params, $headers, $options);
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
        return $this->request('post', '/erp-api/service/return_goods_form/list', $params, $headers, $options);
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
        return $this->request('post', '/erp-api/service/return_goods_form/detail', $params, $headers, $options);
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
        return $this->request('post', '/erp-api/service/return_goods_form/particular', $params, $headers, $options);
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
        return $this->request('post', '/erp-api/service/return_goods_form/scrap', $params, $headers, $options);
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
        return $this->request('post', '/erp-api/service/return_goods_form/send', $params, $headers, $options);
    }
}
