<?php
namespace Line9\Sdk\Sdk\Message;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;
class MaterialChannel extends Sdk
{
    protected function flag(): string
    {
        return 'shop';
    }

    /**
     * @description 聚水潭库存变动通知
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function stockJstCallback(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/api/callback/stock-jst-callback', $params, $headers, $options);
    }
}