<?php

namespace Line9\Sdk\Sdk\ErpSdk;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

/**
 * @description 采购单
 */
class PurchaseForm extends Sdk
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
        return $this->request('post', '/erp-api/service/purchase_form/list', $params, $headers, $options);
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
        return $this->request('post', '/erp-api/service/purchase_form/add', $params, $headers, $options);
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
        return $this->request('post', '/erp-api/service/purchase_form/edit', $params, $headers, $options);
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
        return $this->request('post', '/erp-api/service/purchase_form/detail', $params, $headers, $options);
    }

    /**
     * @description 审核
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function check(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/purchase_form/check', $params, $headers, $options);
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
        return $this->request('post', '/erp-api/service/purchase_form/scrap', $params, $headers, $options);
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
        return $this->request('post', '/erp-api/service/purchase_form/send', $params, $headers, $options);
    }

    /**
     * @description 明细
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function mx(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/purchase_form/mx', $params, $headers, $options);
    }
}
