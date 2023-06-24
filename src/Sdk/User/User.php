<?php

namespace Line9\Sdk\Sdk\User;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class User extends Sdk
{

    protected function flag(): string
    {
        return 'shop';
    }

    /**
     * @description 获取用户列表
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function getUserList(array $param): array
    {
        return $this->request('post', 'shop-api/service/user/list', $param, []);
    }

    /**
     * @description 获取用户列表
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function getMiniToken(array $param): array
    {
        return $this->request('post', 'shop-api/service/user/get-mini-token', $param, []);
    }

    /**
     * 非代理用户列表
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function listNotProxy(array $param): array
    {
        return $this->request('post', 'shop-api/service/user/list-not-proxy', $param, []);
    }
}