<?php

define('DB_HOST', 'your-mysql-endpoint');
define('DB_NAME', 'exampledb');
define('DB_USER', 'admin');
define('DB_PASS', 'change_me');

define('OPENSEARCH_ENDPOINT', 'your-opensearch-endpoint');
define('OPENSEARCH_PORT', 443);

define('REDIS_HOST', 'your-redis-endpoint');
define('REDIS_PORT', 6379);

spl_autoload_register(function ($class) {
    $parts = explode('\\', $class);
    $path = __DIR__ . '/../' . implode('/', $parts) . '.php';
    if (file_exists($path)) {
        require $path;
    }
});
