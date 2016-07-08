<?php

namespace Wtadahiro\Cache;

use Psr\Cache\CacheItemInterface;

class CacheItem implements CacheItemInterface
{

    /**
     * @return string
     */
    public function getKey()
    {

    }

    /**
     * @return mixed
     */
    public function get()
    {

    }

    /**
     * @return bool
     */
    public function isHit()
    {

    }

    /**
     * @param mixed $value
     * @return static
     */
    public function set($value)
    {

    }

    /**
     * @param \DateTimeInterface $expiration
     * @return static
     */
    public function expiresAt($expiration)
    {

    }

    /**
     * @param \DateInterval|int $time
     * @return static
     */
    public function expiresAfter($time)
    {

    }

}
