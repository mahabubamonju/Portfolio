<?php 

namespace App\Controllers;

class AboutController 
{
    public $about = 'pages/about.php';

    public function loadAboutPage(){
       return $this->about;
    }
}