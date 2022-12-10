<?php

namespace Line9\Sdk\Sdk\Advert;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class Advert extends Sdk
{
    protected function flag(): string
    {
        return 'shop';
    }

    /**
     * @description 广告管理数据列表
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function list(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/advert/list', $params, $headers, $options);
    }

    /**
     * @description 修改广告数据
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function update(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/advert/update', $params, $headers, $options);
    }

    /**
     * @description 创建广告数据
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function create(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/advert/create', $params, $headers, $options);
    }

    /**
     * @description 广告数据详情
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function detail(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/advert/detail', $params, $headers, $options);
    }

    /**
     * @description 移除广告数据
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function delete(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/advert/delete', $params, $headers, $options);
    }
}