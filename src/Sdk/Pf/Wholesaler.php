<?php

namespace Line9\Sdk\Sdk\Pf;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class Wholesaler extends Sdk
{
    public function flag(): string
    {
        return 'shop';
    }

    /**
     * @description 批发商列表
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function list(array $params): array
    {
        return $this->request('post', 'shop-api/service/pf/wholesaler/list', $params, []);
    }

    /**
     * @description 批发商详情
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function detail(array $params): array
    {
        return $this->request('post', 'shop-api/service/pf/wholesaler/detail', $params, []);
    }

    /**
     * @description 批发商升级
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function up(array $params): array
    {
        return $this->request('post', 'shop-api/service/pf/wholesaler/up', $params, []);
    }

    /**
     * @description 批发商降级
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function down(array $params): array
    {
        return $this->request('post', 'shop-api/service/pf/wholesaler/down', $params, []);
    }

    /**
     * @description 批发商转移
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function move(array $params): array
    {
        return $this->request('post', 'shop-api/service/pf/wholesaler/move', $params, []);
    }

    /**
     * @description 批发商退出
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function exit(array $params): array
    {
        return $this->request('post', 'shop-api/service/pf/wholesaler/exit', $params, []);
    }

    /**
     * @description 批发商脱离
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function leave(array $params): array
    {
        return $this->request('post', 'shop-api/service/pf/wholesaler/leave', $params, []);
    }
}