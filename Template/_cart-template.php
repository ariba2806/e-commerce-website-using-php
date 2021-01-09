<!--shopping cart-->
<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['delete-cart-submit'])){
        $deletedrecord=$Cart->deleteCart($_POST['item_id']);
    }
    //save for later
    if(isset($_POST['wishlist-submit'])){
        $Cart->saveForLater($_POST['item_id']);
    }

    

}

?>


<section id="cart" class="py-3 mb-1">
<div class="container-fluid w-75">
<br>
<Br>
<h2 style="font-weight:bold;text-shadow: 0 0 3px #FF0000;">Cart<i class="fas fa-heart" style="font-size:30px;color:black;"></i></h2>
<div class="row">
<div class="col-sm-9">
<?php

foreach ($product->getData('cart') as $item):
    $cart=$product->getProduct($item['item_id']);
  $subTotal[]=  array_map(function($item){
?>
<div class="row border-top py-3 mt-3">
<div class="col-sm-2">
<img src="<?php echo $item['item_image'] ?? "./asset/cup1.jpg" ?>" class="img-fluid" style="width:150px;height:100px;box-shadow: 10px 10px 8px grey;">
</div>
<div class="col-sm-8">
<h5><?php echo $item['item_name'] ?? "Unknown"; ?> (<small>by <?php echo $item['item_brand'] ?? "Brand"; ?></small>)</h5>

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
<div class="d-flex w-25">

<button type="button"  data-id="<?php echo $item['item_id'] ?? '0'; ?>" name="up" class="qty-up border bg-light w-25 h-50 mt-2"><i class="fas fa-angle-up"></i></button>
<input  id="input-<?php echo $item['item_id'];?>" data-id="<?php echo $item['item_id'] ?? '0'; ?>"  type="text" class="qty_input border px-2 w-50 h-50 bg-light mt-2" value="1" placeholder="1">
<button type="button" data-id="<?php echo $item['item_id'] ?? '0'; ?>" name="down" class="qty-down border bg-light w-25 h-50 mt-2 "><i class="fas fa-angle-down"></i></button>

</div>
<form method="post">
<input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
<button type="submit" name="delete-cart-submit" class="btn text-danger px-2 border-right">Delete <i class="fas fa-trash" style="font-size:15px;color:red;"></i></button>
</form>

<form method="post">
<input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
<button type="submit" name="wishlist-submit" class="btn text-success">Save For Later <i class="fas fa-check" style="font-size:15px;color:green;"></i></button>
</form>

</div>

</div>

<div class="col-sm-2 text-right">
<div class="font-size-20 text-danger">
$<span data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="product_price"><?php echo $item['item_price'] ?? 0; ?></span>

</div>
</div>
</div>

<?php 
return $item['item_price'];
},$cart);
endforeach;

?>
</div>
<div class="col-sm-3">

<div class="sub-total border text-center mt-3">
<h5 class="font-size-12 text-success py-3"><i class="fas fa-check"></i>Your order is eligible for free delivery</h5>
<div class="border-top py-4">
<h5 class="font-baloo font-size-20">Subtotal ( <?php echo isset($subTotal) ? count($subTotal) : 0; ?> item):&nbsp; <span class="text-danger">$<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span> </span> </h5>
<button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
</div>
</div>

</div>
</div>
<br>
</div>
</section>
<!-- 
onclick="ariba('input-<?php echo $item['item_id'] ?? '0';?>','sum-<?php echo $item['item_id'] ?? '0';?>','cuckoo','akshat')"
 -->