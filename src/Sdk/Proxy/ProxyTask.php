<?php

namespace Line9\Sdk\Sdk\Proxy;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class ProxyTask extends Sdk
{
    /**
     * @description 创建普通任务
     * @param array $array
     * @return array
     * @throws SdkException
     */
    public function createNormalTask(array $array): array
    {
        return $this->request('post', 'shop-api/service/proxy/proxy-task/create-normal-task', $array, []);
    }

    /**
     * @description 创建简单任务
     * @param array $array
     * @return array
     * @throws SdkException
     */
    public function createSimpleTask(array $array): array
    {
        return $this->request('post', 'shop-api/service/proxy/proxy-task/create-simple-task', $array, []);
    }

    /**
     * @description 完成任务
     * @param array $array
     * @return array
     * @throws SdkException
     */
    public function finishTask(array $array): array
    {
        return $this->request('post', 'shop-api/service/proxy/proxy-task/finish-task', $array, []);
    }

    /**
     * @description 获取任务列表
     * @param array $array
     * @return array
     * @throws SdkException
     */
    public function getTaskList(array $array): array
    {
        return $this->request('post', 'shop-api/service/proxy/proxy-task/get-task-list', $array, []);
    }

    /**
     * @description 开启任务
     * @param array $array
     * @return array
     * @throws SdkException
     */
    public function open(array $array): array
    {
        return $this->request('post', 'shop-api/service/proxy/proxy-task/open', $array, []);
    }

    /**
     * @description 删除任务
     * @param array $array
     * @return array
     * @throws SdkException
     */
    public function delete(array $array): array
    {
        return $this->request('post', 'shop-api/service/proxy/proxy-task/delete', $array, []);
    }
}