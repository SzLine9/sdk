<?php

namespace Line9\Sdk\Sdk\Goods;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class Goods extends Sdk
{
    protected function flag(): string
    {
        return 'shop';
    }

    /**
     * @description 创建商品
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function createGoods(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/goods/create', $params, $headers, $options);
    }

    /**
     * @description 修该商品
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function updateGoods(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/goods/update', $params, $headers, $options);
    }

    /**
     * @description 详情
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function detail(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/goods/detail', $params, $headers, $options);
    }

    /**
     * @description 商品的列表
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function list(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/goods/list', $params, $headers, $options);
    }

    /**
     * @description 商品批量上下架
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function batchLoadingAndUnloading(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/goods/batch-loading-and-unloading', $params, $headers, $options);
    }
}