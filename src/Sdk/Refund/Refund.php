<?php

namespace Line9\Sdk\Sdk\Refund;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class Refund extends Sdk
{

    protected function flag(): string
    {
        return 'shop';
    }

    /**
     * @description 售后同意
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function agree(array $params): array
    {
        return $this->request('POST', 'shop-api/service/refund/agree', $params, []);
    }

    /**
     * @description 售后拒绝
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function reject(array $params): array
    {
        return $this->request('POST', 'shop-api/service/refund/reject', $params, []);
    }
}