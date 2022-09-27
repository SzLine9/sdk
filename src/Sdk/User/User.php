<?php

namespace Line9\Sdk\Sdk\User;

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
     * @throws \Line9\Sdk\Exception\SdkException
     */
    public function getUserList(array $param): array
    {
        return $this->request('post', 'shop-api/service/user/list', $param, []);
    }
}