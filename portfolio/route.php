<?php  

require_once "vendor/autoload.php";


use App\Controllers\HomeController;
use App\Controllers\ContactController;
use App\Controllers\BlogController;
use App\Controllers\PortfolioController;
use App\Controllers\ServicesController;
use App\Controllers\AboutController;
use App\Controllers\ReviewController;
use App\Controllers\FileController;

// $homeController = new HomeController();



if("login" == $_GET['page'] || "registration" == $_GET['page']){
    
}else{
    include_once "pages/includes/header.php";
}


if('home' == $_GET['page']){
    include_once (new HomeController)->loadHomePage();
}elseif('about' == $_GET['page']){
    include_once (new AboutController)->loadAboutPage();
}elseif('contact' == $_GET['page']){
    include_once (new ContactController)->loadContactPage();
}elseif('services' == $_GET['page']){
    include_once (new ServicesController)->loadServicesPage();
}elseif('blog' == $_GET['page']){
    include_once (new BlogController)->loadBlogPage();
}elseif('portfolio' == $_GET['page']){
    include_once (new PortfolioController)->loadPortfolioController();
}elseif('review' == $_GET['page']){
    include_once (new ReviewController)->loadReviewController();
}elseif('files' == $_GET['page']){
    $fileController = new  FileController();
    include_once $fileController->loadFilePage();
}


if("login" != $_GET['page'] && "registration" != $_GET['page']){
    include_once "pages/includes/footer.php";
}
