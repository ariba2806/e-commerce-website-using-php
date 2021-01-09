<html>
<head>
<title></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

<link rel="stylesheet" href="style.css">

<?php

require('functions.php');

?>

</head>
<body>
<!--header-->
<header id="header">
<div class="strip d-flex justify-content-between px-4 py-1 bg-light">
<p class="font-size-12 text-black-50 m-0">Ariba Ahmed's E-commerce Website</p>
<div class="font-size-14">

<a href="#" class="px-3 border-right border-left text-dark">Login</a>
<a href="#" class="px-3 border-right text-dark">Wishlist</a>
</div>
</div>


<!--primary nav-->
<nav class="navbar navbar-expand-lg navbar-light py-3" style="background-color:pink;">
  <a class="navbar-brand" href="index.php"><h1 style="font-family:Snell Roundhand,cursive;">Shopee<i class="fas fa-heart" style="font-size:40px;color:black;"></i></h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav m-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#hello"><h5>On Sale </h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><h5>Category </h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><h5>Products <i class="fas fa-chevron-down"></i></h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><h5>Blog </h5></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#"><h5>Comming Soon</h5></a>
      </li>
    </ul>
    <form action="#" class="font-size-14">
<a href="love.php" class="py-2 rounded-pill color-yellow ">
<span class="font-size-16 px-2 text-white align-bottom"><i class="fas fa-heart"></i></span>
<span class="px-3 py-2 rounded-pill text-dark bg-light align-bottom"><?php echo count($newcake->getData('love')); ?></span>
</a>
    </form>
    <form action="#" class="font-size-14 ml-3">
<a href="cart.php" class="py-2 rounded-pill color-yellow ">
<span class="font-size-16 px-2 text-white align-bottom"><i class="fas fa-shopping-cart"></i></span>
<span class="px-3 py-2 rounded-pill text-dark bg-light align-bottom"><?php echo count($product->getData('cart')); ?></span>
</a>
    </form>
  </div>
</nav>
</header>
<!--header-->

<!--main-->
<main id="main-site">