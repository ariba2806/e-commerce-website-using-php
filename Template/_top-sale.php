<!--tiop sale-->

<?php

shuffle($product_shuffle);

//request method post
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['top_sale_submit'])){
        $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
    }
    //call add to cart
   
}
?>
<section id="top-sale">
<div name="hello" class="container py-5">
<h2 class="text-center" style="font-weight:bold;text-shadow: 0 0 3px #FF0000;">Top Sale<i class="fas fa-heart" style="font-size:30px;color:black;"></i></h2>
<hr>

<!--carousel-->
<div class="owl-carousel owl-theme">
<?php foreach($product_shuffle as $item){ ?>

<div class="item py-2">
<div class="product">
<a href="<?php printf('%s?item_id=%s','product.php',$item['item_id']) ?>"><img src="<?php echo $item['item_image'] ?? "./asset/choco1.jpg"; ?>" class="img-fluid mb-4" style="height:200px;box-shadow: 10px 10px 8px grey;"></a>
<div class="text-center">
<h6><?php echo $item['item_name'] ?? "Unknown"; ?></h6>
<div class="rating text-warning font-size-12">
<span><i class="fas fa-star"></i></span>
<span><i class="fas fa-star"></i></span>
<span><i class="fas fa-star"></i></span>
<span><i class="fas fa-star"></i></span>
<span><i class="far fa-star"></i></span>
</div>
<div class="price py-2">
<span>$<?php echo $item['item_price'] ?? '0'; ?></span>
</div>
<form method="post">
<input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
<input type="hidden" name="user_id" value="<?php echo 1; ?>">
<?php
if(in_array($item['item_id'],$Cart->getCartId($product->getData('cart')) ?? [] )){
    echo '<button type="submit" disabled class="btn btn-success font-size-12 ">In the Cart</button>';
}
else{
echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12 ">Add to cart</button>';
}
?>

</form>
</div>
</div>
</div>
<?php } ?>
</div>
<br>
</div>
</section>

