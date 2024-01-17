<?php

namespace Line9\Sdk\Sdk\Refund;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class Refund extends Sdk
{

    protected function flag(): string
    {
        return 'shop';
    }

    /**
     * @description 售后同意
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function agree(array $params): array
    {
        return $this->request('POST', 'shop-api/service/refund/agree', $params, []);
    }

    /**
     * @description 售后拒绝
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function reject(array $params): array
    {
        return $this->request('POST', 'shop-api/service/refund/reject', $params, []);
    }

    /**
     * @description 售后单列表
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function list(array $params): array
    {
        return $this->request('POST', 'shop-api/service/refund/list', $params, []);
    }

    /**
     * @description 售后单详情
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function detail(array $params): array
    {
        return $this->request('POST', 'shop-api/service/refund/detail', $params, []);
    }

    /**
     * @description 售后退款留言
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function remark(array $params): array
    {
        return $this->request('POST', 'shop-api/service/refund/remark', $params, []);
    }

    /**
     * @description 售后订单导出
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function export(array $params): array
    {
        return $this->request('POST', 'shop-api/service/refund/export', $params, []);
    }

    /**
     * @description 修改退款物流信息
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function updateExpressDeliveryInfo(array $params): array
    {
        return $this->request('POST', 'shop-api/service/refund/update-express-delivery-info', $params, []);
    }

    /**
     * @description 售后商家同意售后（退货退款/退货换货）
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function agreeRefundOfRefundsAndReturnAndExchange(array $params): array
    {
        return $this->request('POST', 'shop-api/service/refund/agree-refund-of-refunds-and-return-and-exchange', $params, []);
    }

    /**
     * @description 售后商家确认收货（退货退款）
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function confirmReceiptGoodsOfRefunds(array $params): array
    {
        return $this->request('POST', 'shop-api/service/refund/confirm-receipt-goods-of-refunds', $params, []);
    }

    /**
     * @description 售后商家确认退款（退货退款）
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function confirmAndRefund(array $params): array
    {
        return $this->request('POST', 'shop-api/service/refund/confirm-and-refund', $params, []);
    }

    /**
     * @description 售后商家确认收货（退货换货）
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function confirmReceiptGoodsOfReturnAndExchange(array $params): array
    {
        return $this->request('POST', 'shop-api/service/refund/confirm-receipt-goods-of-return-and-exchange', $params, []);
    }

    /**
     * @description 使用第三方仓储(如：聚水潭)下单
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function createThirdOrder(array $params): array
    {
        return $this->request('POST', 'shop-api/service/refund/create-third-order', $params, []);
    }

    /**
     * @description 售后商家寄回换货商品（退货换货）
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function sendGoodsOfReturnAndExchange(array $params): array
    {
        return $this->request('POST', 'shop-api/service/refund/send-goods-of-return-and-exchange', $params, []);
    }

    /**
     * @description 售后商家寄回换货商品修改（退货换货），不跑状态机
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function sendGoodsOfReturnAndExchangeUpdate(array $params): array
    {
        return $this->request('POST', 'shop-api/service/refund/send-goods-of-return-and-exchange-update', $params, []);
    }

    /**
     * @description 售后异常订单列表
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function refundExceptionOrderList(array $params): array
    {
        return $this->request('POST', 'shop-api/service/refund/refund-exception-order-list', $params, []);
    }

    /**
     * @description 售后异常订单详情
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function refundExceptionOrderDetail(array $params): array
    {
        return $this->request('POST', 'shop-api/service/refund/refund-exception-order-detail', $params, []);
    }

    /**
     * @description 售后申请
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function types(array $params): array
    {
        return $this->request('POST', 'shop-api/service/refund/types', $params, []);
    }

    /**
     * @description 售后申请确认单
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function confirm(array $params): array
    {
        return $this->request('POST', 'shop-api/service/refund/confirm', $params, []);
    }

    /**
     * @description 售后申请
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function create(array $params): array
    {
        return $this->request('POST', 'shop-api/service/refund/create', $params, []);
    }

    /**
     * @description 爱库存售后记录列表
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function ikcList(array $params): array
    {
        return $this->request('POST', 'shop-api/service/refund/ikc_list', $params, []);
    }
}