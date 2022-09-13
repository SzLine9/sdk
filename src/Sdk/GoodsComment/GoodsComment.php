<?php

namespace Line9\Sdk\Sdk\GoodsComment;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class GoodsComment extends Sdk
{
    protected function flag(): string
    {
        return 'shop';
    }

    /**
     * @description 创建订单商品评论
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function createGoodsComment(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/api/comment/create-goods-comment', $params, $headers, $options);
    }

    /**
     * @description 获取小程序的订单商品评论列表
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function goodsCommentListOfMiniApp(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/api/comment/goods-comment-list', $params, $headers, $options);
    }

    /**
     * @description 订单商品评论详情
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function goodsCommentDetail(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/comment/goods-comment-detail', $params, $headers, $options);
    }

    /**
     * @description 获取商家后台的订单商品评论列表
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function goodsCommentListOfAdmin(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/comment/goods-comment-list', $params, $headers, $options);
    }

    /**
     * @description 订单商品评论上架
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function goodsCommentOnTheShelf(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/comment/goods-comment-on-the-shelf', $params, $headers, $options);
    }

    /**
     * @description 订单商品评论下架
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function goodsCommentTakeDown(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/comment/goods-comment-take-down', $params, $headers, $options);
    }

    /**
     * @description 订单商品评论置顶
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function goodsCommentTop(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/comment/goods-comment-top', $params, $headers, $options);
    }

    /**
     * @description 订单商品评论取消置顶
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function goodsCommentNotTop(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/comment/goods-comment-not-top', $params, $headers, $options);
    }
}