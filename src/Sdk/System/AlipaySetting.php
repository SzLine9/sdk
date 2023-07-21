<?php


namespace Line9\Sdk\Sdk\System;


use Line9\Sdk\Sdk\Sdk;

class AlipaySetting extends Sdk
{
    protected function flag(): string
    {
        return 'shop';
    }

    /**
     * 支付宝配置列表
     * @param array $param
     * @return array
     * @throws \Line9\Sdk\Exception\SdkException
     */
    public function list(array $param):array
    {
        return $this->request('post', 'shop-api/service/system/alipay/list', $param, []);
    }

    /**
     * 支付宝配置详情
     * @param array $param
     * @return array
     * @throws \Line9\Sdk\Exception\SdkException
     */
    public function detail(array $param):array
    {
        return $this->request('post', 'shop-api/service/system/alipay/detail', $param, []);
    }

    /**
     * 支付宝配置启用|禁用
     * @param array $param
     * @return array
     * @throws \Line9\Sdk\Exception\SdkException
     */
    public function change(array $param):array
    {
        return $this->request('post', 'shop-api/service/system/alipay/change', $param, []);
    }
}