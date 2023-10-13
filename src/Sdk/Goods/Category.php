<?php


namespace Line9\Sdk\Sdk\Goods;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class Category extends Sdk
{
    protected function flag(): string
    {
        return 'shop';
    }

    /**
     * @description 获取树形分类
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function tree(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/goods/category/tree', $params, $headers, $options);
    }

    public function list(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/goods_category/list', $params, $headers, $options);
    }

    public function add(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/goods_category/add', $params, $headers, $options);
    }

    public function edit(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/goods_category/edit', $params, $headers, $options);
    }

    public function detail(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/goods_category/detail', $params, $headers, $options);
    }

    public function changeStatus(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/goods_category/change-status', $params, $headers, $options);
    }
}