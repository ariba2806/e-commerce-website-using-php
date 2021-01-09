<!--shopping cart-->
<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['delete-love-submit'])){
        $del=$Love->deleteLove($_POST['item_id']);
    }
    

}

?>


<section id="cart" class="py-3 mb-1">
<div class="container-fluid w-75">
<br>
<Br>
<h2 style="font-weight:bold;text-shadow: 0 0 3px #FF0000;">Upcoming Cupcakes you Love<i class="fas fa-heart" style="font-size:30px;color:black;"></i></h2>
<div class="row">
<div class="col-sm-9">
<?php

foreach ($newcake->getData('love') as $item):
    $love=$newcake->getProduct($item['item_id']);
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

<form method="post">
<input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
<button type="submit" name="delete-love-submit" class="btn text-danger px-2 border-right">Delete <i class="fas fa-trash" style="font-size:15px;color:red;"></i></button>
</form>
</div>

</div>

<div class="col-sm-2 text-right">
<div class="font-size-20 text-danger">
$<span id="sum-<?php echo $item['item_id'];?>" class="product_price"><?php echo $item['item_price'] ?? 0; ?></span>

</div>
</div>

</div>
<div>
<i class="fa fa-info-circle" style="font-size:15px;" aria-hidden="true"></i> - <?php echo $item['Description'] ?? "abc"; ?>
<br>
<br>
</div>

<?php 
return $item['item_price'];
},$love);
endforeach;

?>
</div>
<div class="sub-total text-center mt-1 ml-5">
<h5 class="font-size-20 text-success py-3"><i class="fas fa-check"></i> Important Notice</h5>
<div class="border-top">
<h5 class="font-size-14">By loving these upcoming cupcakes<br> you make us know that how much <br>will you people like to buy and try <br>these out once we release them so <br>the more love you shower on our <br>newbies the more we will experiment<br> and bring out new things for you<i class="fas fa-heart"></i></h5>
<button class="btn font-size-20 bg-light mt-3"><i class="fas fa-heart" style="font-size:20px;color:pink;"></i> Keep Loving <i class="fas fa-heart" style="font-size:20px;color:pink;"></i></button>
</div>
</div>
</div>
<br>
</div>
</section>
<!-- onclick="ariba1('input-<?php echo $item['item_id'] ?? '0';?>','sum-<?php echo $item['item_id'] ?? '0';?>','cuckoo','akshat')"
onclick="ariba('input-<?php echo $item['item_id'] ?? '0';?>','sum-<?php echo $item['item_id'] ?? '0';?>','cuckoo','akshat')"
id="input-<?php echo $item['item_id'];?>" -->