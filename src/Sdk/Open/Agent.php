<?php

namespace Line9\Sdk\Sdk\Open;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class Agent extends Sdk
{
    protected function flag(): string
    {
        return 'open';
    }

    /**
     * @description 代理创建
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function create(array $param): array
    {
        return $this->request('post', 'open/api/agent/create', $param, []);
    }

    /**
     * @description 代理续费
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function renew(array $param): array
    {
        return $this->request('post', 'open/api/agent/renew', $param, []);
    }

    /**
     * @description 代理详情
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function detail(array $param): array
    {
        return $this->request('post', 'open/api/agent/detail', $param, []);
    }

    /**
     * @description 修改手机号
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function updateUserName(array $param): array
    {
        return $this->request('post', 'open/api/agent/resetusername', $param, []);
    }
}