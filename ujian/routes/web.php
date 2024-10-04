<?php

use App\Controllers\AuthController;
use App\Controllers\PageController;

// Register route
$authController = new AuthController();
$pageController = new PageController();

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'register':
            $authController->register();
            break;
        case 'login':
            $authController->login();
            break;
        case 'about':
            $pageController->about();
            break;
    }
}
