<?php

namespace Line9\Sdk\Sdk\ErpSdk;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

/**
 * @description 费用单
 */
class ExpenseForm extends Sdk
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
        return $this->request('post', '/erp-api/service/expense_form/list', $params, $headers, $options);
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
        return $this->request('post', '/erp-api/service/expense_form/detail', $params, $headers, $options);
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
        return $this->request('post', '/erp-api/service/expense_form/particular', $params, $headers, $options);
    }
}
