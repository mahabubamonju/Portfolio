<?php 

namespace App\Controllers;

class HomeController
{
    public $page = 'pages/home.php';

    public function loadHomePage() {
        return $this->page;
    }
}