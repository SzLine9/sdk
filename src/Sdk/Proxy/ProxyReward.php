<?php

namespace Line9\Sdk\Sdk\Proxy;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class ProxyReward extends Sdk
{
    protected function flag(): string
    {
        return 'shop';
    }

    /**
     * @description 获取代理奖励列表
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function getProxyRewardList(array $params): array
    {
        return $this->request('post', 'shop-api/service/proxy/proxy-reward/proxy-task-reward-list', $params, []);
    }

    /**
     * 获取奖励详情
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function getProxyRewardInfo(array $params): array
    {
        return $this->request('post', 'shop-api/service/proxy/proxy-reward/proxy-task-reward-info', $params, []);
    }
}