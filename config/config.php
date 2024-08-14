<?php

define('DB_HOST', 'terraform-20240814101940372500000001.ckpdjdgeysia.eu-central-1.rds.amazonaws.com:3306');
define('DB_NAME', 'AdamToEva');
define('DB_USER', 'admin');
define('DB_PASS', 'yourpassword');

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
