<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo strtoupper($_GET['page']); ?></title>
    <!-- Bootstrap Css Link -->
    <!-- <link rel="stylesheet" href="../assets/css/bootstrap.css"> -->
    <link href="assets/img/hero6.png" rel="icon">
    <!-- Custom css link -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/keyframe.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- boxicon css link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>
<body>
    <div class="overlay"></div>
    <header>
        <a href="#" class="logo">XYZ</a>
        <ul class="navlist">
            <li><a href="?page=home" class="active">Home</a></li>
            <li><a href="?page=about">About</a></li>
            <li><a href="?page=services">Services</a></li>
            <li><a href="?page=portfolio">Portfolio</a></li>
            <li><a href="?page=blog">Blog</a></li>
            <li><a href="?page=contact">Contact</a></li>
            <!-- <li><a href="?page=files">Files</a></li> -->
        </ul>
        <div class="right-header">
            <a href="#" class="btn">Let's chat <i class='bx bx-message-dots' ></i></a>
            <div class="menu-icon">
                <div class="bar"></div>
            </div>
        </div>
    </header>