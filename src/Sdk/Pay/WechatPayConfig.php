<?php


namespace Line9\Sdk\Sdk\Pay;

use Line9\Sdk\Sdk\Sdk;
use Line9\Sdk\Exception\SdkException;

class WechatPayConfig extends Sdk
{
    protected function flag(): string
    {
        return 'shop';
    }

    /**
     * @description 微信支付列表
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function list(array $param): array
    {
        return $this->request('post', 'shop-api/service/pay/wechat/list', $param, []);
    }

    /**
     * @description 微信支付详情
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function detail(array $param): array
    {
        return $this->request('post', 'shop-api/service/pay/wechat/detail', $param, []);
    }

    /**
     * @description 微信支付创建
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function create(array $param): array
    {
        return $this->request('post', 'shop-api/service/pay/wechat/create', $param, []);
    }

    /**
     * @description 微信支付更新
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function update(array $param): array
    {
        return $this->request('post', 'shop-api/service/pay/wechat/update', $param, []);
    }

    /**
     * @description 微信支付修改状态
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function updateStatus(array $param): array
    {
        return $this->request('post', 'shop-api/service/pay/wechat/update-status', $param, []);
    }

}