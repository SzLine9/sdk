<?php

namespace Line9\Sdk\Sdk\ErpSdk\Demo;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class Version extends Sdk
{
    public function flag(): string
    {
        return 'erp';
    }

    /**
     * @description 获取版本
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function getVersion(array $params): array
    {
        return $this->request('post', 'erp-api/api/version', $params, []);
    }
}