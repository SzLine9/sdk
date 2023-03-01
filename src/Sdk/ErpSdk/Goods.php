<?php

namespace Line9\Sdk\Sdk\ErpSdk;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

/**
 * @description 商品
 */
class Goods extends Sdk
{
    protected function flag(): string
    {
        return 'erp';
    }

    /**
     * @description 同步飞书表商品
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function sync(array $params = [], array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/goods/sync', $params, $headers, $options);
    }

    /**
     * @description 同步最优价
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function syncBestPrice(array $params = [], array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/goods/sync_price', $params, $headers, $options);
    }

    /**
     * @description 列表
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function getPage(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/goods/list', $params, $headers, $options);
    }

    /**
     * @description 详情
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function detail(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/goods/detail', $params, $headers, $options);
    }

    /**
     * @description 公用 - 搜索商品
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function searchGoods(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/goods/search_goods', $params, $headers, $options);
    }

    /**
     * @description 公用 - 根据spu_id查对应sku
     * @description 就是上边那东西搜出来spu，再用这拿sku
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function getGoodsSkus(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/goods/goods_skus', $params, $headers, $options);
    }

    /**
     * @description 公用 - 获取sku的已择价
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function getSkuChoosePrice(array $params, array $headers = [], array $options = []): array
    {
        return $this->request(
            'post',
            '/erp-api/service/goods/get_sku_choose_price', $params, $headers, $options);
    }


}