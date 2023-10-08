<?php 

namespace App\Controllers;

class PortfolioController 
{
    public $portfolio = 'pages/portfolio.php';

    public function loadPortfolioController()
    {
        return $this->portfolio;
    }
}