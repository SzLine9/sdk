<?php


namespace Line9\Sdk\Sdk\Pf;


use Line9\Sdk\Sdk\Sdk;

class VirtualWarehouse extends Sdk
{
    public function flag(): string
    {
        return 'shop';
    }

    /**
     * 库存详情列表
     * @param array $params
     * @return array
     * @throws \Line9\Sdk\Exception\SdkException
     */
    public function log(array $params):array
    {
        return $this->request('post', 'shop-api/service/pf/virtual-warehouse/log', $params, []);
    }

    /**
     * 库存详情导出
     * @param array $params
     * @return array
     * @throws \Line9\Sdk\Exception\SdkException
     */
    public function logExport(array $params):array
    {
        return $this->request('post', 'shop-api/service/pf/virtual-warehouse/log-export', $params, []);
    }

    /**
     * 库存列表
     * @param array $params
     * @return array
     * @throws \Line9\Sdk\Exception\SdkException
     */
    public function lists(array $params):array
    {
        return $this->request('post', 'shop-api/service/pf/virtual-warehouse/list', $params, []);
    }

    /**
     * 库存列表导出
     * @param array $params
     * @return array
     * @throws \Line9\Sdk\Exception\SdkException
     */
    public function listExport(array $params):array
    {
        return $this->request('post', 'shop-api/service/pf/virtual-warehouse/list-export', $params, []);
    }

    /**
     * 库存变更
     * @param array $params
     * @return array
     * @throws \Line9\Sdk\Exception\SdkException
     */
    public function changeStock(array $params): array
    {
        return $this->request('post', 'shop-api/service/pf/virtual-warehouse/change', $params, []);
    }
}