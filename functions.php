<?php

//mysql connection
require('database/DBController.php');

//product class
require('database/Product.php');

//require cart class
require('database/NewCakes.php');

//require cart class
require('database/Cart.php');
require('database/Love.php');


//dbcontroller object
$db=new DBController();

//product obj

$product =new Product($db);
$product_shuffle= $product->getData();


//object of new cake table
$newcake =new NewCakes($db);
$newcake_shuffle= $newcake->getData();


//object of cart table

$Cart=new Cart($db);

$Love=new Love($db);



