<?php

namespace Line9\Sdk\Sdk\ErpSdk;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class BiddingForm extends Sdk
{
    protected function flag(): string
    {
        return 'erp';
    }

    /**
     * @description 列表
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function getPage(array $params = [], array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/bidding_form/list', $params, $headers, $options);
    }

    /**
     * @description 增
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function create(array $params = [], array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/bidding_form/create', $params, $headers, $options);
    }

    /**
     * @description 改
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function update(array $params = [], array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/bidding_form/edit', $params, $headers, $options);
    }

    /**
     * @description 详情
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function detail(array $params = [], array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/bidding_form/detail', $params, $headers, $options);
    }

    /**
     * @description 删除
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function delete(array $params = [], array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/bidding_form/delete', $params, $headers, $options);
    }

    /**
     * @description 发单
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function issued(array $params = [], array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/bidding_form/issued', $params, $headers, $options);
    }

    /**
     * @description 报价列表
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function quoteList(array $params = [], array $headers = [], array $options = []): array
    {
        return $this->request(
            'post',
            '/erp-api/service/bidding_form/quote_list', $params, $headers, $options);
    }

    /**
     * @description 提交择价
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function choosePrice(array $params = [], array $headers = [], array $options = []): array
    {
        return $this->request(
            'post',
            '/erp-api/service/bidding_form/choose_price', $params, $headers, $options);
    }

}