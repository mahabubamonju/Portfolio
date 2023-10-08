<?php 

namespace App\Controllers;

class ServicesController 
{
    public $services = 'pages/services.php';

    public function loadServicesPage()
    {
        return $this->services;
    }
}