<?php

namespace Line9\Sdk\Sdk\ExpressDelivery;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class ExpressDelivery extends Sdk
{
    protected function flag(): string
    {
        return 'shop';
    }

    /**
     * @description 更新订单物流信息
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function updateOrderExpressDelivery(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/express-delivery/update-order-express-delivery', $params, $headers, $options);
    }

    /**
     * @description 查看物流信息
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function detail(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/express-delivery/detail', $params, $headers, $options);
    }

    /**
     * @description 查询物流公司列表
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function companyList(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/express-delivery/company/company-list', $params, $headers, $options);
    }

    /**
     * @description 查询物流公司列表
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function receiveMessageOfExpressDelivery100(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/api/callback/receive-message-of-express-delivery-100', $params, $headers, $options);
    }
}