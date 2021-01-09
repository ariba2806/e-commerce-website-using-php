


<section id="cart" class="py-3 mb-1">
<div class="container-fluid w-75">
<h4>Shopping Cart</h4>
<div class="row">
<div class="col-sm-9">
<!--empty cart -->
<div class="row border-top py-3 mt-3">
<div class="col-sm-12 text-center py-2">
<img src="./asset/cart.jpg" class="img-fluid" style="height:200px;">
</div>
</div>
</div>
<div class="col-sm-3">

<div class="sub-total border text-center mt-3">
<h5 class="font-size-12 text-success py-3"><i class="fas fa-check"></i>Your order is eligible for free delivery</h5>
<div class="border-top py-4">
<h5 class="font-size-20">Subtotal(<span id="akshat"><?php echo isset($subTotal) ? count($subTotal): 0; ?> </span> items) :&nbsp;<span class="text-danger">$<span id="cuckoo" class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal):0; ?></span></span></h5>
<button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
</div>
</div>

</div>
</div>
</div>
</section>