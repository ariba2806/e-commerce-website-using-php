

<!--shopping cart-->
<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['delete-wish-submit'])){
        $deletedrecord=$Cart->deleteCart($_POST['item_id'],'wishlist');
    }

    //add to cart from wishlist
    if(isset($_POST['cart-submit'])){
        $Cart->saveForLater($_POST['item_id'],'cart','wishlist');
    }

}
?>


<section id="cart" class="py-3 mb-1">
<div class="container-fluid w-75">
<h2 style="font-weight:bold;text-shadow: 0 0 3px #FF0000;">WishList<i class="fas fa-heart" style="font-size:30px;color:black;"></i></h2>
<div class="row">
<div class="col-sm-9">
<?php

foreach ($product->getData('wishlist') as $item):
    $cart=$product->getProduct($item['item_id']);
  $subTotal[]=  array_map(function($item){
?>
<div class="row border-top py-3 mt-3">
<div class="col-sm-2">
<img src="<?php echo $item['item_image'] ?? "./asset/cup1.jpg" ?>" class="img-fluid" style="width:150px;height:100px;box-shadow: 10px 10px 8px grey;">
</div>
<div class="col-sm-8">
<h5><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
<div class="d-flex">
<div class="rating text-warning font-size-12">
<span><i class="fas fa-star"></i></span>
<span><i class="fas fa-star"></i></span>
<span><i class="fas fa-star"></i></span>
<span><i class="fas fa-star"></i></span>
<span><i class="far fa-star"></i></span>
</div>
<a href="#" class="px-2 font-size-14">20 ratings</a>
</div>

<div class="qty d-flex pt-2">
<form method="post">
<input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">

<button type="submit" name="delete-wish-submit" class="btn text-danger pl-0 pr-3 border-right">Delete <i class="fas fa-trash" style="font-size:15px;color:red;"></i></button>
</form>

<form method="post">
<input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">

<button type="submit" name="cart-submit" class="btn text-primary">Add to Cart <i class="fas fa-shopping-cart" style="font-size:15px;color:blue;"></i></button>
</form>

</div>

</div>

<div class="col-sm-2 text-right">
<div class="font-size-20 text-danger">
$<span id="sum-<?php echo $item['item_id'];?>" class="product_price"><?php echo $item['item_price'] ?? 0; ?></span>

</div>
</div>
</div>

<?php 
return $item['item_price'];
},$cart);
endforeach;

?>
</div>

</div>
<br>
</div>
</section>