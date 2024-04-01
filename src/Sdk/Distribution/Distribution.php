<?php

namespace Line9\Sdk\Sdk\Distribution;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class Distribution extends Sdk
{

    protected function flag(): string
    {
        return 'shop';
    }

    /**
     * @desc 返利设置
     * @param array $params
     * @param array $headers
     * @return array
     * @throws SdkException
     */
    public function setting(array $params, array $headers): array
    {
        return $this->request('post', 'shop-api/service/distribution/setting', $params, $headers);
    }

    public function getSetting(array $params, array $headers): array
    {
        return $this->request('post', 'shop-api/service/distribution/get-setting', $params, $headers);
    }



    /**
     * @desc 订单列表
     * @param array $params
     * @param array $headers
     * @return array
     * @throws SdkException
     */
    public function orderList(array $params, array $headers): array
    {
        return $this->request('post', 'shop-api/service/distribution/order-list', $params, $headers);
    }

    /**
     * @desc 更改订单备注
     * @param array $params
     * @param array $headers
     * @return array
     * @throws SdkException
     */
    public function orderRemark(array $params, array $headers): array
    {
        return $this->request('post', 'shop-api/service/distribution/order-remark', $params, $headers);
    }

    /**
     * @desc 返利机器人管理
     * @param array $params
     * @param array $headers
     * @return array
     * @throws SdkException
     */
    public function robotManage(array $params, array $headers): array
    {
        return $this->request('post', 'shop-api/service/distribution/robot-manage', $params, $headers);
    }

    /**
     * @desc 更改机器人状态
     * @param array $params
     * @param array $headers
     * @return array
     * @throws SdkException
     */
    public function changeStatus(array $params, array $headers): array
    {
        return $this->request('post', 'shop-api/service/distribution/change-status', $params, $headers);
    }

    /**
     * @desc 获取代理分组
     * @param array $params
     * @param array $headers
     * @return array
     * @throws SdkException
     */
    public function getProxyGroup(array $params, array $headers): array
    {
        return $this->request('post', 'shop-api/service/distribution/get-proxy-group', $params, $headers);
    }
}