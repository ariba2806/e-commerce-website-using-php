
<?php

shuffle($newcake_shuffle);

//request method post
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['new_phones_submit'])){
        $Love->addToLove($_POST['user_id'],$_POST['item_id']);
    }
    //call add to cart
   
}
?>

<section id="new-phones">
<div class="container" style="width:1600px;">
<h2 class="text-center" style="font-weight:bold;text-shadow: 0 0 3px #FF0000;">Upcoming CupCakes<i class="fas fa-heart" style="font-size:30px;color:black;"></i></h2>
<hr>

<div class="owl-carousel owl-theme">
<?php foreach($newcake_shuffle as $item){ ?>

<div class="item py-2 bg-light mr-1">
<div class="product">
<a href="<?php printf('%s?item_id=%s','newcakes.php',$item['item_id']) ?>"><img src="<?php echo $item['item_image'] ?? "./asset/choco1.jpg"; ?>" class="img-fluid mb-3 mt-2 xyz" style="box-shadow: 10px 10px 8px grey;width:210px;"></a>
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
if(in_array($item['item_id'],$Love->getLoveId($newcake->getData('love')) ?? [] )){
    echo '<button type="submit" disabled class="btn font-size-12 bg-light" style="text-shadow: 0 0 3px #FF0000;"><i class="fas fa-heart" style="font-size:40px;color:red;"></i></button>';
}
else{
echo '<button type="submit" name="new_phones_submit" class="btn font-size-12 bg-light"><i class="fas fa-heart" style="font-size:40px;color:red;"></i></button>';
}
?>
</form>
</div>
</div>
</div>
<?php } ?>
</div>

</div>
</section>