<?php


namespace Line9\Sdk\Sdk\Goods;


use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class Freight extends Sdk
{
    protected function flag(): string
    {
        return 'shop';
    }

    /**
     * @description 运费模板列表
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function list(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/freight/list', $params, $headers, $options);
    }

    /**
     * @description 运费模板详情
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function detail(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/freight/detail', $params, $headers, $options);
    }

    /**
     * @description 运费模板创建
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function create(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/freight/create', $params, $headers, $options);
    }

    /**
     * @description 运费模板更新
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function update(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/freight/update', $params, $headers, $options);
    }

    /**
     * @description 运费模板删除
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function delete(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/freight/delete', $params, $headers, $options);
    }
}