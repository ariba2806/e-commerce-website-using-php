<?php
ob_start();
//include header file
include('header.php');
?>

<?php

//include cart item if not empty
count($product->getData('cart')) ? include('Template/_cart-template.php') : include('Template/notFound/_cart_notFound.php');


//product description file
count($product->getData('wishlist')) ? include('Template/_wishlist_template.php') : include('Template/notFound/_wishlist_notFound.php');

//include top sale file
include('Template/_new-phones.php');
?>


<?php
//include header file
include('footer.php');
?>