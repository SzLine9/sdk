<?php


namespace Line9\Sdk\Sdk\System;


use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class System extends Sdk
{
    protected function flag(): string
    {
        return 'shop';
    }

    /**
     * @description 配置保存
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function setConfig(array $param): array
    {
        return $this->request('post', 'shop-api/service/system/set-global-config', $param, []);
    }

    /**
     * @description 获取全局配置
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function getConfig(array $params): array
    {
        return $this->request('post', '/shop-api/service/system/get-global-config', $params, []);
    }

    /**
     * @description 配置支付保存
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function setPayConfig(array $param): array
    {
        return $this->request('post', 'shop-api/service/system/set-pay-global-config', $param, []);
    }

    /**
     * @description 获取支付配置
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function getPayConfig(array $params): array
    {
        return $this->request('post', '/shop-api/service/system/get-pay-global-config', $params, []);
    }

    /**
     * @description 配置支付保存
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function setRefundConfig(array $param): array
    {
        return $this->request('post', 'shop-api/service/system/set-refund-global-config', $param, []);
    }

    /**
     * @description 获取支付配置
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function getRefundConfig(array $params): array
    {
        return $this->request('post', '/shop-api/service/system/get-refund-global-config', $params, []);
    }

    /**
     * @description 提现配置保存
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function setWithdrawalConfig(array $param): array
    {
        return $this->request('post', 'shop-api/service/system/set-withdrawal-global-config', $param, []);
    }

    /**
     * @description 获取提现配置
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function getWithdrawalConfig(array $params): array
    {
        return $this->request('post', '/shop-api/service/system/get-withdrawal-global-config', $params, []);
    }
}