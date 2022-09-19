<?php

namespace Line9\Sdk\Sdk\Order;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class AccountStatement extends Sdk
{

    protected function flag(): string
    {
        return 'shop';
    }

    /**
     * @description 对账单列表
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function accountStatementList(array $params): array
    {
        return $this->request('post', 'shop-api/service/order/account-statement/list', $params, []);
    }

    /**
     * @description 对账单详情
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function accountStatementDetail(array $params): array
    {
        return $this->request('post', 'shop-api/service/order/account-statement/detail', $params, []);
    }
}