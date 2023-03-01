<?php

namespace Line9\Sdk\Exception;

use Exception;
use Throwable;

class SdkException extends Exception implements Throwable
{
    /**
     * @var string
     */
    protected $requestUrl;

    /**
     * @var array
     */
    protected $requestParams;

    /**
     * @var array
     */
    protected $requestHeaders;

    /**
     * @var string
     */
    protected $response;

    /**
     * @return array
     */
    public function getRequestParams(): array
    {
        return $this->requestParams;
    }

    /**
     * @param array $requestParams
     * @return SdkException
     */
    public function setRequestParams(array $requestParams): SdkException
    {
        $this->requestParams = $requestParams;
        return $this;
    }

    /**
     * @return array
     */
    public function getRequestHeaders(): array
    {
        return $this->requestHeaders;
    }

    /**
     * @param array $requestHeaders
     * @return SdkException
     */
    public function setRequestHeaders(array $requestHeaders): SdkException
    {
        $this->requestHeaders = $requestHeaders;
        return $this;
    }

    /**
     * @return string
     */
    public function getResponse(): string
    {
        return $this->response;
    }

    /**
     * @param string $response
     * @return SdkException
     */
    public function setResponse(string $response): SdkException
    {
        $this->response = $response;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequestUrl(): string
    {
        return $this->requestUrl;
    }

    /**
     * @param string $requestUrl
     * @return SdkException
     */
    public function setRequestUrl(string $requestUrl): SdkException
    {
        $this->requestUrl = $requestUrl;
        return $this;
    }



}