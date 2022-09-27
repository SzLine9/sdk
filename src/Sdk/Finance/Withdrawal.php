<?php

namespace Line9\Sdk\Sdk\Finance;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class Withdrawal extends Sdk
{

    protected function flag(): string
    {
        return 'shop';
    }

    /**
     * @description 提现审核列表
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function list(array $param): array
    {
        return $this->request('post', 'shop-api/service/finance/withdrawal/list', $param, []);
    }

    /**
     * @description 提现审核通过
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function agree(array $param): array
    {
        return $this->request('post', 'shop-api/service/finance/withdrawal/agree', $param, []);
    }

    /**
     * @description 提现审核拒绝
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function reject(array $param): array
    {
        return $this->request('post', 'shop-api/service/finance/withdrawal/reject', $param, []);
    }
}