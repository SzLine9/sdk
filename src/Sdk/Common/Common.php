<?php


namespace Line9\Sdk\Sdk\Common;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class Common extends Sdk
{
    protected function flag(): string
    {
        return 'shop';
    }

    /**
     * @description 文件上传
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function upload(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/common/upload', $params, $headers, $options);
    }

    /**
     * @description 生成小程序二维码
     * @param array $params
     * @return array
     * @throws SdkException
     */
    public function generateShareCode(array $params): array
    {
        return $this->request('post', 'shop-api/service/common/generate-share-code', $params, []);
    }
}