<?php 

namespace App\Controllers;

class BlogController 
{
    public $blog = 'pages/blog.php';

    public function loadBlogPage()
    {
        return $this->blog;
    }
}