<?php
 $brand=array_map(function($pro){return $pro['item_brand']; },$product_shuffle);
 $unique=array_unique($brand);
 sort($unique);
shuffle($product_shuffle);

//request method post
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['special_price_submit'])){
        $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
    }
    //call add to cart
   
}

$in_cart=$Cart->getCartId($product->getData('cart'));

?>

<section id="special-price">
<div class="container">
<h2 class="text-center" style="font-weight:bold;text-shadow: 0 0 3px #FF0000;">Special Price<i class="fas fa-heart" style="font-size:30px;color:black;"></i></h2>
<br>
<div id="filters" class="button-group text-right font-size-16">
<button class="btn is-checked" data-filter="*" style="font-size:20px;">All Categories</button>
<?php 
array_map(function($brand){
printf('<button class="btn" style="font-size:20px;" data-filter=".%s">%s</button>',$brand,$brand);
},$unique);
?>

</div>

<div class="grid">

<?php array_map(function($item) use($in_cart){ ?>

<div class="grid-item <?php echo $item['item_brand'] ?? "Brand"; ?> ">
<div class="item py-2 " style="width:200px;height:220px;">
<div class="product">
<a href="<?php printf('%s?item_id=%s','product.php',$item['item_id']) ?>"><img src="<?php echo $item['item_image'] ?? "./asset/cup1.jpg" ?>" class="img-fluid xyz mb-4 mt-4" style="box-shadow: 10px 10px 8px grey;"></a>
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
<span>$<?php echo $item['item_price'] ?? 0 ?></span>
</div>
<form method="post">
<input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
<input type="hidden" name="user_id" value="<?php echo 1; ?>">
<?php
if(in_array($item['item_id'],$incart ?? [] )){
    echo '<button type="submit" disabled class="btn btn-success font-size-12 ">In the Cart</button>';
}
else{
echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12 ">Add to cart</button>';
}
?>
<br>
<br>
<br>
</form>
</div>
</div>

</div>
</div>
<?php },$product_shuffle) ?>
<!--grid ends below-->
</div>
<br>
<br>
<br>

</div>
</section>