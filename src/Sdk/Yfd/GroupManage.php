<?php

namespace Line9\Sdk\Sdk\Yfd;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class GroupManage extends Sdk
{
    protected function flag(): string
    {
        return 'shop';
    }


    /**
     * @description 社群列表
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function list(array $param): array
    {
        return $this->request('post', 'shop-api/service/group_manage/list', $param, []);
    }


    /**
     * @description 社群统计
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function groupCount(array $param): array
    {
        return $this->request('post', 'shop-api/service/group_manage/count', $param, []);
    }
}
