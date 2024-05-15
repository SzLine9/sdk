<?php

namespace Line9\Sdk\Sdk\Finance;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class DistributionWithdrawal extends Sdk
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
        return $this->request('post', 'shop-api/service/finance/distribution-withdrawal/list', $param, []);
    }

    /**
     * @description 详情
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function detail(array $param): array
    {
        return $this->request('post', 'shop-api/service/finance/distribution-withdrawal/detail', $param, []);
    }

    /**
     * @description 提现审核通过
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function agree(array $param): array
    {
        return $this->request('post', 'shop-api/service/finance/distribution-withdrawal/agree', $param, []);
    }

    /**
     * @description 提现审核拒绝
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function reject(array $param): array
    {
        return $this->request('post', 'shop-api/service/finance/distribution-withdrawal/reject', $param, []);
    }

    /**
     * @description 提现统计
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function statistics(array $param): array
    {
        return $this->request('post', 'shop-api/service/finance/distribution-withdrawal/withdrawal-statistics', $param, []);
    }

}