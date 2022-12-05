<?php


namespace Line9\Sdk\Sdk\Feedback;


use Line9\Sdk\Sdk\Sdk;
use Line9\Sdk\Exception\SdkException;

class Feedback extends Sdk
{
    protected function flag(): string
    {
        return 'shop';
    }

    /**
     * @description 反馈列表
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function list(array $param): array
    {
        return $this->request('post', 'shop-api/service/feedback/list', $param, []);
    }

    /**
     * @description 反馈详情
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function detail(array $param): array
    {
        return $this->request('post', 'shop-api/service/feedback/detail', $param, []);
    }

    /**
     * @description 反馈处理提交
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function accept(array $param): array
    {
        return $this->request('post', 'shop-api/service/feedback/accept', $param, []);
    }
}