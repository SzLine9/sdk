<?php

namespace Line9\Sdk\Sdk\Goods;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class Goods extends Sdk
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
    public function createGoods(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/goods/create', $params, $headers, $options);
    }

    /**
     * @description 修该商品
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function updateGoods(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/goods/update', $params, $headers, $options);
    }

    /**
     * @description 修该商品
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function updateGoodsSku(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/goods/update-part', $params, $headers, $options);
    }

    /**
     * @description 详情
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function detail(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/goods/detail', $params, $headers, $options);
    }

    /**
     * @description 商品的列表
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function list(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/goods/list', $params, $headers, $options);
    }

    /**
     * @description 商品批量上下架
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function batchLoadingAndUnloading(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/goods/batch-loading-and-unloading', $params, $headers, $options);
    }

    /**
     * @description 商品批量显示/隐藏
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function batchShowAndHide(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/goods/batch-show-and-hide', $params, $headers, $options);
    }

    /**
     * 获取聚水潭sku信息
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function getJstSku(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/goods/get-jst-sku', $params, $headers, $options);
    }

    /**
     * 商品置顶
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function top(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/goods/top', $params, $headers, $options);
    }

    /**
     * 取消商品置顶
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function cancelTop(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/goods/cancel-top', $params, $headers, $options);
    }

    /**
     * @desc 复制商品
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function copy(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/goods/copy-goods', $params, $headers, $options);
    }

    /**
     * @desc 导出商品列表
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function export(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/goods/export', $params, $headers, $options);
    }

    /**
     * @desc 更改浮动销量
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function changeFloatSales(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/goods/change-float-sale', $params, $headers, $options);
    }

    public function scanCategory(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/goods/scan-category', $params, $headers, $options);
    }

    public function getOperateLog(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/goods/get-operate-log', $params, $headers, $options);
    }

    public function spuIdsByProductIds(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/goods/ikc/spuIds-by-productIds', $params, $headers, $options);
    }

    public function detailBySkuId(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/goods/ikc/detail-by-skuId', $params, $headers, $options);
    }

    /**
     * @description 获取商品sku详情
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function getSkuDetail(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/goods/get-goods-sku', $params, $headers, $options);
    }
}