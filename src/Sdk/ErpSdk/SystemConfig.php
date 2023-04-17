<?php

namespace Line9\Sdk\Sdk\ErpSdk;

class SystemConfig extends Sdk
{
    protected function flag(): string
    {
        return 'erp';
    }

    /**
     * @description get 配置
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function getConfig(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/system/get_config', $params, $headers, $options);
    }

    /**
     * @description set 配置
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    function setConfig(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', '/erp-api/service/system/set_config', $params, $headers, $options);
    }

}