<?php


namespace Line9\Sdk\Sdk\Area;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class Area extends Sdk
{
    protected function flag(): string
    {
        return 'shop';
    }

    /**
     * @description 查询省、市行政地区
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function getProvinceCity(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/area/get-province-city', $params, $headers, $options);
    }

    /**
     * @description 查询市归属的区
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function getArea(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/area/get-area', $params, $headers, $options);
    }

    /**
     * @description 查询省、市、地区
     * @param array $params
     * @param array $headers
     * @param array $options
     * @return array
     * @throws SdkException
     */
    public function getProvinceCityArea(array $params, array $headers = [], array $options = []): array
    {
        return $this->request('post', 'shop-api/service/area/get-province-city-area', $params, $headers, $options);
    }
}