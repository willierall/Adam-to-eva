<?php

namespace App\Controllers;

use App\Models\Database;
use App\Models\OpenSearch;
use App\Models\Cache;

class HomeController {
    public function index() {
        $db = new Database();
        $os = new OpenSearch();
        $cache = new Cache();

        // Example MySQL query
        $users = $db->query("SELECT * FROM users");

        // Example OpenSearch query
        $searchResults = $os->search('example-index', 'example-query');

        // Example Redis set and get
        $cache->set('test_key', 'Hello, Redis!');
        $redisMessage = $cache->get('test_key');

        require '../app/views/home.php';
    }
}
