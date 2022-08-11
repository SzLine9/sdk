<?php

namespace Line9\Sdk\Sdk\Proxy;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class ProxyTask extends Sdk
{
    /**
     * 创建普通任务
     * @param array $array
     * @return array
     * @throws SdkException
     */
    public function createNormalTask(array $array): array
    {
        return $this->request('post', 'shop-api/service/proxy/proxy-task/create-normal-task', $array, []);
    }

    /**
     * 创建简单任务
     * @param array $array
     * @return array
     * @throws SdkException
     */
    public function createSimpleTask(array $array): array
    {
        return $this->request('post', 'shop-api/service/proxy/proxy-task/create-simple-task', $array, []);
    }

    /**
     * 完成任务
     * @param array $array
     * @return array
     * @throws SdkException
     */
    public function finishTask(array $array): array
    {
        return $this->request('post', 'shop-api/service/proxy/proxy-task/finish-task', $array, []);
    }
}