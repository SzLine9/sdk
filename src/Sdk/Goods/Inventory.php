<?php


namespace Line9\Sdk\Sdk\Goods;


use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class Inventory extends Sdk
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
    public function batchSync(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/goods/inventory/batch-sync', $params, $headers, $options);
    }
}