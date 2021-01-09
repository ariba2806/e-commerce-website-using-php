<!--product-->

<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['newcake_submit'])){
        $Love->addToLove($_POST['user_id'],$_POST['item_id']);
         } 
  }

$item_id=$_GET['item_id'] ?? 1;
foreach ($newcake->getData() as $item):
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
<form method="post">
<input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
<input type="hidden" name="user_id" value="<?php echo 1; ?>">
<?php
if(in_array($item['item_id'],$Love->getLoveId($newcake->getData('love')) ?? [] )){
    echo '<button type="submit" disabled class="btn btn-primary font-size-16 form-control">In the Love List</button>';
}
else{
echo '<button type="submit" name="newcake_submit" class="btn btn-primary form-control font-size-16 ">Add to Love List</button>';
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



<hr>
<!--order details-->
<div id="order-details" class="d-flex flex-column text-dark">

<small><i class="fas fa-map-marker-alt"></i> &nbsp; Delivery area pincode-125005</small>
</div>

<div class="row">
<div class="col-6">
<div class="color my-3">
<div class="d-flex justify-content-between">
<h5>Topping to be available: </h5>

<i class="fa fa-circle" style="color:pink;font-size:40px;" aria-hidden="true"></i>
<i class="fa fa-circle" style="color:LightSkyBlue;font-size:40px;" aria-hidden="true"></i>
<i class="fa fa-circle" style="color:purple;font-size:40px;" aria-hidden="true"></i>

</div>
</div>
</div>
<div class="col-6">
<!--product qty-->
<div class="qty d-flex mt-3">

</div>

</div>
</div>

<div class="size d-flex mt-5">

<h6 style="font-weight:bold;text-shadow: 0 0 3px #FF0000;">Description-<?php echo $item['Description'] ?> <i class="fas fa-heart" style="font-size:30px;color:black;"></i></h6>
</div>


</div>

</div>
</div>
</section>
<?php
endif;
endforeach;
?>