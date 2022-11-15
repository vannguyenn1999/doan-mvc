<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $this->title_page ?></title>
    <link rel="shortcut icon" href="http://localhost/doan-mvc/user/assets/images/logo.webp" />
    <link rel="canonical" href="http://localhost" />
    <link rel="alternate" href="http://localhost" hreflang="vi-vn" />
   

    <meta name="robots" content="index,follow,noodp">
    <meta name="author" content="http://localhost">
    <meta name="copyright" content="http://localhost" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Shop 123" />
    <meta property="og:url" content="http://localhost" />
    <meta property="og:site_name" content="http://localhost" />
    <!-- SEO META DESCRIPTION -->
    <meta name="title" content="">
    <meta name="keywords" content="">
    <meta name="description" content="" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700,900&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="<?php echo DIR_HTTP ?>/user/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo DIR_HTTP ?>/user/assets/css/all.min.css" />
    <!--<link rel="stylesheet" href="assets/css/font-awesome.min.css"/>-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Tooltip plugin (zebra) css file -->
    <link rel="stylesheet" href="<?php echo DIR_HTTP ?>/user/assets/css/zebra_tooltips.min.css" />
    <!-- Owl Carousel plugin css file. only used pages -->
    <link rel="stylesheet" href="<?php echo DIR_HTTP ?>/user/assets/css/owl.carousel.min.css" />

    <!-- Ideabox responsive css file -->
    <link rel="stylesheet" href="<?php echo DIR_HTTP ?>/user/assets/css/responsive-style.css" />
    <!-- Ideabox main theme css file. you have to add all pages -->
    <link rel="stylesheet" href="<?php echo DIR_HTTP ?>/user/assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo DIR_HTTP ?>/user/assets/css/slide.css" />

</head>

<body class="">

    <?php
    
    if (isset($_SESSION['success'])) {
        $message = $_SESSION['success'];
        echo "<script type='text/javascript'>alert('$message');</script>";
        unset($_SESSION['success']);
    }
    if (isset($_SESSION['error'])) {
        $message = $_SESSION['error'];
        echo "<script type='text/javascript'>alert('$message');</script>";
        unset($_SESSION['error']);
    }
    require_once 'layouts/header.php';
    
    echo $this->main_content;
    require_once 'layouts/footer.php';
    ?>


</body>

</html>