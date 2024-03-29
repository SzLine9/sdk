<?php

namespace Line9\Sdk\Sdk\Pf;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class InvitedGift extends Sdk
{
    public function flag(): string
    {
        return 'shop';
    }

    /**
     * @description 邀请礼包列表
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function list(array $params): array
    {
        return $this->request('post', 'shop-api/service/pf/invited-gift/list', $params, []);
    }

    /**
     * @description 邀请礼包新增
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function add(array $params): array
    {
        return $this->request('post', 'shop-api/service/pf/invited-gift/add', $params, []);
    }

    /**
     * @description 邀请礼包修改
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function update(array $params): array
    {
        return $this->request('post', 'shop-api/service/pf/invited-gift/update', $params, []);
    }

    /**
     * @description 邀请礼包删除
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function delete(array $params): array
    {
        return $this->request('post', 'shop-api/service/pf/invited-gift/delete', $params, []);
    }

    /**
     * @description 邀请礼包详情
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function detail(array $params): array
    {
        return $this->request('post', 'shop-api/service/pf/invited-gift/detail', $params, []);
    }

    /**
     * @description 选择sku列表
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function selectSku(array $params): array
    {
        return $this->request('post', 'shop-api/service/pf/invited-gift/select-sku', $params, []);
    }
}