<?php

namespace App\Models;

use Redis;

class Cache {
    private $redis;

    public function __construct() {
        $this->redis = new Redis();
        $this->redis->connect(REDIS_HOST, REDIS_PORT);
    }

    public function set($key, $value, $expiration = 3600) {
        $this->redis->setex($key, $expiration, $value);
    }

    public function get($key) {
        return $this->redis->get($key);
    }
}
