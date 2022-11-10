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
     * @description 设置全局配置
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function setConfig(array $params): array
    {
        return $this->request('post', '/shop-api/service/system/set-global-config', $params, []);
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
}