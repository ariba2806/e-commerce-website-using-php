<!--product-->

<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['product_submit'])){
        $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
         } 
  }

$item_id=$_GET['item_id'] ?? 1;
foreach ($product->getData() as $item):
    if($item['item_id']== $item_id):
    


?>
<section id="product"class="py-3">
<div class="container">
<br>
<br>
<div class="row">
<div class="col-sm-6">
<img src="<?php echo $item['item_image']?? "./asset/cup1.jpg"?>" class="img-fluid" style="width:505px;height:385px;box-shadow: 15px 15px 7px grey;border-radius: 20%;">
<div class="form-row pt-4 font-size-16">
<div class="col">
<button type="submit" class="btn btn-success form-control">Proceed to Buy</button>
</div>
<div class="col">
<form method="post">
<input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
<input type="hidden" name="user_id" value="<?php echo 1; ?>">
<?php
if(in_array($item['item_id'],$Cart->getCartId($product->getData('cart')) ?? [] )){
    echo '<button type="submit" disabled class="btn btn-success font-size-16 form-control">In the Cart</button>';
}
else{
echo '<button type="submit" name="product_submit" class="btn btn-warning form-control font-size-16 ">Add to cart</button>';
}
?>
</form>
</div>
</div>
</div>
<div class="col-sm-6">
<h2 style="font-weight:bold;text-shadow: 0 0 3px #FF0000;"><?php echo $item['item_name'] ?? "Unknown"; ?><i class="fas fa-heart" style="font-size:30px;color:black;"></i> (<small>by <?php echo $item['item_brand'] ?? "Brand"; ?></small>)</h2>

<div class="d-flex">
<div class="rating text-warning font-size-12 pt-1">
<span><i class="fas fa-star"></i></span>
<span><i class="fas fa-star"></i></span>
<span><i class="fas fa-star"></i></span>
<span><i class="fas fa-star"></i></span>
<span><i class="far fa-star"></i></span>
</div>
<a href="#" class="px-2 font-size-14">20 ratings | 5 reviews</a>
</div>
<hr>
<!--product price-->
<table class="my-3">
<tr class="font-size-16">
<td>M.R.P.</td>
<td><strike>$162.00</strike></td>
</tr>
<tr class="font-size-16">
<td>Deal Price : </td>
<td class="text-danger">$<span><?php echo $item['item_price'] ?? 0; ?></span><small> (Inclusive of all taxes)</small></td>
</tr>
<tr class="font-size-16">
<td>You Save : </td>
<td>$<span class="font-size-16 text-primary">10.00</span></td>
</tr>
</table>

<!--policy-->
<div id="policy">
<div class="d-flex">
<div class="return text-center mr-5">
<div class="font-size-14 my-2" style="color:LightSkyBlue;">
<span class="fas fa-retweet border p-3 rounded-pill"></span>
</div>
<a href="#" class="font-size-12">1 day <br>Replacement</a>
</div>

<div class="return text-center mr-5">
<div class="font-size-14 my-2" style="color:LightSkyBlue;">
<span class="fas fa-truck border p-3 rounded-pill"></span>
</div>
<a href="#" class="font-size-12">Daily Tuition<br>Delivered</a>
</div>

<div class="return text-center mr-5">
<div class="font-size-14 my-2" style="color:LightSkyBlue;">
<span class="fas fa-check-double border p-3 rounded-pill"></span>
</div>
<a href="#" class="font-size-12">Tasted and <br>Loved</a>
</div>

</div>
</div>

<hr>
<!--order details-->
<div id="order-details" class="d-flex flex-column text-dark">

<small><i class="fas fa-map-marker-alt"></i> &nbsp; Delivery by tommorrow to Customer-125005</small>
</div>

<div class="row">
<div class="col-6">
<div class="color my-3">
<div class="d-flex justify-content-between">
<h5>Topping: </h5>

<i class="fa fa-circle" style="color:pink;font-size:40px;" aria-hidden="true"></i>
<i class="fa fa-circle" style="color:LightSkyBlue;font-size:40px;" aria-hidden="true"></i>
<i class="fa fa-circle" style="color:purple;font-size:40px;" aria-hidden="true"></i>

</div>
</div>
</div>
<div class="col-6">
<!--product qty-->
<div class="qty d-flex mt-3">
<h5>Quantity:</h5>
<div class="px-4 d-flex">
<button data-id="pro1" class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
<input data-id="pro1" type="text" class="qty_input border px-2 w-50 bg-light" value="1" placeholder="">
<button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
</div>
</div>

</div>
</div>

<div class="size d-flex">
<div class="d-flex justify-content-between w-75">
<div class="border d-flex">
<h5>Size : </h5>
<button class="btn btn-primary font-size-14 ml-3"> Small</button>
<button class="btn btn-primary font-size-14 ml-2">Medium</button>
<button class="btn btn-primary font-size-14 ml-2">Large</button>
</div>
</div>
</div>


</div>

<div class="col-12">
<br>
<br>
<br>
<br>
<h2 style="font-weight:bold;text-shadow: 0 0 3px #FF0000;">Product Description <i class="fas fa-heart" style="font-size:30px;color:black;"></i></h2>
<hr>
<p font-size-14>A cupcake (also British English: fairy cake; Hiberno-English: bun; Australian English: fairy cake or patty cake[1]) is a small cake designed to serve one person, which may be baked in a small thin paper or aluminum cup. As with larger cakes, frosting and other cake decorations such as fruit and candy may be applied.</p>
<p font-size-14>A cupcake (also British English: fairy cake; Hiberno-English: bun; Australian English: fairy cake or patty cake[1]) is a small cake designed to serve one person, which may be baked in a small thin paper or aluminum cup. As with larger cakes, frosting and other cake decorations such as fruit and candy may be applied.</p>
</div>

</div>
</div>
</section>
<?php
endif;
endforeach;
?>