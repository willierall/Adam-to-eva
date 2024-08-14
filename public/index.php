<?php

require_once '../config/config.php';

use App\Controllers\HomeController;

$controller = new HomeController();
$controller->index();

