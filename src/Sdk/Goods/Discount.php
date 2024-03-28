<?php


namespace Line9\Sdk\Sdk\Goods;


use Line9\Sdk\Sdk\Sdk;
use Line9\Sdk\Exception\SdkException;

class Discount extends Sdk
{
    protected function flag(): string
    {
        return 'shop';
    }

    /**
     * @description 优惠活动列表
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function list(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/goods/discount/list', $params, $headers, $options);
    }

    public function save(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/goods/discount/save', $params, $headers, $options);
    }
}