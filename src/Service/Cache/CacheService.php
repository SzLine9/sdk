<?php


namespace Line9\Sdk\Service\Cache;

use Exception;
use Throwable;

abstract class CacheService
{

    private static $redis;

    private static $instance = [];

    private $prefix = 'line9-shop:';

    private function __construct() {}

    public static function register(callable $redisGenerator)
    {
        self::$redis = $redisGenerator();
    }

    /**
     * 获取缓存实例
     * @return static
     */
    public static function getInstance(): self
    {
        foreach (self::$instance as $instance) {
            if (is_a($instance, static::class)) {
                return $instance;
            }
        }
        $instance = new static();
        self::$instance[] = $instance;
        return $instance;
    }

    /**
     *
     * 设置缓存
     * @param string $unique 数据唯一索引
     * @param array $data 数据必须是数组  我们业务场景字符串没有实际意义
     * @throws Exception
     */
    public function set(string $unique, array $data): void
    {
        $encodeData = json_encode($data, JSON_UNESCAPED_UNICODE);
        $time = $this->getCacheTime();
        if ($time === 0) {
            self::$redis->set($this->getKey($unique), $encodeData);
            return;
        }
        self::$redis->setex($this->getKey($unique), $time, $encodeData);
    }

    /**
     * 获取缓存
     * @param string $unique
     * @return array
     */
    public function get(string $unique): array
    {
        $encodeData = self::$redis->get($this->getKey($unique));
        if ($encodeData) {
            try {
                return json_decode($encodeData, true);
            } catch (Throwable $exception) {
                return [];
            }
        }
        return [];
    }

    /**
     * @description 重新生成缓存
     * @param string $unique
     * @return void
     */
    public function generate(string $unique): void
    {
        $this->autoGenerate($unique);
    }

    /**
     * @description 强制获取,如果没有缓存数据将重新生成
     * @param string $unique
     * @return array
     */
    public function getMust(string $unique): array
    {
        $cache = $this->get($unique);
        if ($cache) {
            return $cache;
        }
        return $this->autoGenerate($unique);
    }

    /**
     * @return int
     * @throws Exception
     */
    private function getCacheTime(): int
    {
        return random_int($this->minTime(), $this->maxTime());
    }

    /**
     * 获取Key
     * @param string $unique
     * @return string
     */
    public function getKey(string $unique): string
    {
        return $this->prefix . $this->key($unique);
    }

    /**
     * 清除缓存
     * @param string|array $unique
     */
    public function clear($unique): void
    {
        $keys = [];
        if (!is_array($unique)) {
            $keys = [$this->getKey($unique)];
        } else {
            foreach ($unique as $item) {
                $keys[] = $this->getKey($item);
            }
        }
        self::$redis->del($keys);
    }


    /**
     * @description 缓存说明
     * @return string
     */
    abstract protected function doc(): string;

    /**
     * @description 缓存key
     * @param string $unique
     * @return string
     */
    abstract protected function key(string $unique): string;

    /**
     * @description 缓存最小时间
     * @return int
     */
    abstract protected function minTime(): int;

    /**
     * @description 缓存最大时间
     * @return int
     */
    abstract protected function maxTime(): int;

    /**
     * @description 自动生成缓存
     * @param string $unique
     * @return array
     */
    abstract protected function autoGenerate(string $unique): array;
}
