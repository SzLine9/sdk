<?php

namespace Line9\Sdk\Sdk\Yfd;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class MaterialLibrary extends Sdk
{
    protected function flag(): string
    {
        return 'shop';
    }


    /**
     * @description 合集页详情
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function detail(array $param): array
    {
        return $this->request('post', 'shop-api/service/material_library/detail', $param, []);
    }


    /**
     * @description 合集页详情
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function list(array $param): array
    {
        return $this->request('post', 'shop-api/service/material_library/list', $param, []);
    }
}
