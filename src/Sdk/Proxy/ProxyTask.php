<?php

namespace Line9\Sdk\Sdk\Proxy;

use Line9\Sdk\Sdk\Sdk;

class ProxyTask extends Sdk
{
    /**
     * 创建普通任务
     * @param array $array
     * @return array
     */
    public function createNormalTask(array $array): array
    {
        return $this->request('post', 'shop-api/service/proxy-task/create-normal-task', $array, []);
    }

    /**
     * 创建简单任务
     * @param array $array
     * @return array
     */
    public function createSimpleTask(array $array): array
    {
        return $this->request('post', 'shop-api/service/proxy-task/create-simple-task', $array, []);
    }
}