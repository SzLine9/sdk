<?php

namespace Line9\Sdk\Sdk\Search;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class Search extends Sdk
{
    protected function flag(): string
    {
        return 'shop';
    }

    /**
     * @description 搜索管理数据列表
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function list(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/search/list', $params, $headers, $options);
    }

    /**
     * @description 修改搜索数据
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function update(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/search/update', $params, $headers, $options);
    }

    /**
     * @description 创建搜索数据
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function create(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/search/create', $params, $headers, $options);
    }

    /**
     * @description 搜索数据详情
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function detail(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/search/detail', $params, $headers, $options);
    }

    /**
     * @description 移除搜索数据
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function delete(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/search/delete', $params, $headers, $options);
    }

    /**
     * @description 批量修改搜索数据状态
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function batchUpdateStatus(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/search/batch-update-status', $params, $headers, $options);
    }

    /**
     * @description 批量移除搜索数据
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function batchDelete(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/search/batch-delete', $params, $headers, $options);
    }
}