<?php

namespace Line9\Sdk\Sdk\Open;

use Line9\Sdk\Exception\SdkException;
use Line9\Sdk\Sdk\Sdk;

class Atk extends Sdk
{

    protected function flag(): string
    {
        // TODO: Implement flag() method.
        return 'open';
    }

    /**
     * @description 创建机器人
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function createRobot(array $param): array
    {
        return $this->request('post', '/open/api/atk/new-robot', $param, []);
    }

    /**
     * @desc 机器人详情
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function robotDetail(array $param): array
    {
        return $this->request('post', '/open/api/atk/robot-detail', $param, []);
    }

    /**
     * @desc 机器人续费
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function robotRenew(array $param): array
    {
        return $this->request('post', '/open/api/atk/robot-renew', $param, []);
    }

    /**
     * @desc 设置机器人回调地址
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function setRobotNoticeUrl(array $param): array
    {
        return $this->request('post', '/open/api/atk/set-robot-notice-url', $param, []);
    }

    /**
     * @desc 发送文本消息
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function sendRobotTextMsg(array $param): array
    {
        return $this->request('post', '/open/api/atk/send-robot-text-msg', $param, []);
    }

    /**
     * @desc 发送url卡片消息
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function sendRobotUrlMsg(array $param): array
    {
        return $this->request('post', '/open/api/atk/send-robot-url-msg', $param, []);
    }

    /**
     * @desc 创建代理
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function createProxy(array $param): array
    {
        return $this->request('post', '/open/api/atk/new-proxy', $param, []);
    }

    /**
     * @desc 修改代理
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function updateProxy(array $param): array
    {
        return $this->request('post', '/open/api/atk/update-proxy', $param, []);
    }

    /**
     * @desc 代理详情
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function proxyDetail(array $param): array
    {
        return $this->request('post', '/open/api/atk/proxy-detail', $param, []);
    }

    /**
     * @desc 检查机器人是否在线
     * @param array $param
     * @return array
     * @throws SdkException
     */
    public function checkOnline(array $param): array
    {
        return $this->request('post', '/open/api/atk/check-robot-online', $param, []);
    }
}