<?php

namespace Line9\Sdk\Sdk\Yfd;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class ActivityConfig extends Sdk
{
    protected function flag(): string
    {
        return 'shop';
    }

    /**
     * @description 新增合集页
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function create(array $param): array
    {
        return $this->request('post', 'shop-api/service/yfd/create', $param, []);
    }

    /**
     * @description 编辑合集页
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function update(array $param): array
    {
        return $this->request('post', 'shop-api/service/yfd/update', $param, []);
    }

    /**
     * @description 合集页详情
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function detail(array $param): array
    {
        return $this->request('post', 'shop-api/service/yfd/detail', $param, []);
    }

    /**
     * @description 合集页详情
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function delete(array $param): array
    {
        return $this->request('post', 'shop-api/service/yfd/delete', $param, []);
    }

    /**
     * @description 合集页详情
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function list(array $param): array
    {
        return $this->request('post', 'shop-api/service/yfd/list', $param, []);
    }

    /**
     * @description 合集页置顶/取消置顶
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function changeTop(array $param): array
    {
        return $this->request('post', 'shop-api/service/yfd/change-top', $param, []);
    }

    /**
     * @description 上架/下架
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function changeStatus(array $param): array
    {
        return $this->request('post', 'shop-api/service/yfd/category/change-status', $param, []);
    }
}
