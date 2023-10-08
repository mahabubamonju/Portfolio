<?php 

namespace App\Controllers;

class ReviewController 
{
    public $review = 'pages/portfolio.php';

    public function loadReviewController()
    {
        return $this->review;
    }
}