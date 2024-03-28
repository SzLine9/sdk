<?php

namespace Line9\Sdk\Sdk\Order;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class Order extends Sdk
{

    protected function flag(): string
    {
        return 'shop';
    }

    /**
     * @description 订单列表
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function list(array $param): array
    {
        return $this->request('post', 'shop-api/service/order/list', $param, []);
    }

    /**
     * @description 订单详情
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function detail(array $param): array
    {
        return $this->request('post', 'shop-api/service/order/detail', $param, []);
    }

    /**
     * @description 订单导出
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function export(array $param): array
    {
        return $this->request('post', 'shop-api/service/order/export', $param, []);
    }

    public function exportNew(array $param): array
    {
        return $this->request('post', 'shop-api/service/order/export-new', $param, []);
    }

    /**
     * @description 订单发货导出
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function exportSend(array $param): array
    {
        return $this->request('post', 'shop-api/service/order/export-send', $param, []);
    }

    /**
     * @description 订单发货
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function sendExpress(array $param): array
    {
        return $this->request('post', 'shop-api/service/order/send-express', $param, []);
    }

    /**
     * @description 订单发货：基于订单编号
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function sendExpressByOrderSn(array $param): array
    {
        return $this->request('post', 'shop-api/service/order/send-express-by-order-sn', $param, []);
    }

    /**
     * @description 更改物流单号——此仅修改物流单号，订单发货需调用expressSend
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function updateExpress(array $param): array
    {
        return $this->request('post', 'shop-api/service/order/update-express', $param, []);
    }

    /**
     * @description 更改物流单号：基于订单编号——此仅修改物流单号，订单发货需调用expressSend
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function updateExpressByOrderSn(array $param): array
    {
        return $this->request('post', 'shop-api/service/order/update-express-by-order-sn', $param, []);
    }

    /**
     * @description 订单收货地址
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function orderAddressUpdate(array $param): array
    {
        return $this->request('post', 'shop-api/service/order/order-address/update', $param, []);
    }

    /**
     * @description 订单取件通知
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function orderPickupNotice(array $param): array
    {
        return $this->request('post', 'shop-api/service/order/order-notice/pickup-notice', $param, []);
    }

    /**
     * @description 订单超卖提醒
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function orderOversoldNotice(array $param): array
    {
        return $this->request('post', 'shop-api/service/order/order-notice/oversold-notice', $param, []);
    }

    /**
     * @description 商品订单销量
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function orderGoodsSales(array $param): array
    {
        return $this->request('post', 'shop-api/service/order/order-goods-sales', $param, []);
    }

    /**
     * @description 订单备注更新
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function orderRemarkUpdate(array $param): array
    {
        return $this->request('post', 'shop-api/service/order/update-remark', $param, []);
    }

    /**
     * @description 订单商家备注更新
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function orderSellerRemarkUpdate(array $param): array
    {
        return $this->request('post', 'shop-api/service/order/update-seller-remark', $param, []);
    }

    /**
     * @description 订单发货模板、物流公司对照表下载
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function downloadTemplate(array $param): array
    {
        return $this->request('post', 'shop-api/service/order/download-template', $param, []);
    }

    /**
     * @description 订单虚拟发货
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function sendExpressBySystem(array $param): array
    {
        return $this->request('post', 'shop-api/service/order/send-express-by-system', $param, []);
    }

    /**
     * @description 订单虚拟发货更新
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function updateExpressBySystem(array $param): array
    {
        return $this->request('post', 'shop-api/service/order/update-express-by-system', $param, []);
    }

    /**
     * @description 查询订单优惠详情
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function discountList(array $param): array
    {
        return $this->request('post', 'shop-api/service/order/discount/list', $param, []);
    }
}