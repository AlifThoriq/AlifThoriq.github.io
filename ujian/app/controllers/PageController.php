<?php

namespace App\Controllers;

class PageController {
    
    // Halaman About
    public function about() {
        require_once __DIR__ . '/../../resources/views/about.php';
    }
}
