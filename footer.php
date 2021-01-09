</main>
<!--main-->
<br>
<br>
<!--footer-->
<footer id="footer" class="bg-dark text-white py-4 ">
<div class="container">
<div class="row justify-content-between">
<div class="col-lg-3 col-12 mr-6">
<h4 class="font-size-20 ">Cakes Shoppee</h4>
<p class="font-size-14 text-white-50">This is a fab cake with lots of jelly and fruits and tasty topping which will be available very soon in your nearby stores</p>
</div>
<div class="col-lg-4 col-12">
<h4 class="font-size-20">NewsLatter</h4>
<form class="form-row">
<div class="col">
<input type="text" class="form-control" placeholder="Email">
</div>
<div class="col">
<button type="button" class="btn btn-primary mb-2">Subscribe</button>
</div>
</form>
</div>

<div class="col-lg-2 col-12">
<h4 class="font-size-20">Information</h4>
<div class="d-flex flex-column flex-wrap">
<a href="#" class="font-size-14 text-white-50 pb-1">About Us</a>
<a href="#" class="font-size-14 text-white-50 pb-1">Delivery Information</a>
<a href="#" class="font-size-14 text-white-50 pb-1">Privacy Policy</a>
<a href="#" class="font-size-14 text-white-50 pb-1">Terms and Conditions</a>
</div>
</div>

<div class="col-lg-2">
<h4 class="font-size-20">Account</h4>
<div class="d-flex flex-column flex-wrap">
<a href="#" class="font-size-14 text-white-50 pb-1">My Account</a>
<a href="#" class="font-size-14 text-white-50 pb-1">Order History</a>
<a href="#" class="font-size-14 text-white-50 pb-1">Wish List</a>
<a href="#" class="font-size-14 text-white-50 pb-1">NewsLatters</a>
</div>
</div>
</div>
</div>
</footer>
<!--footer-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>



<!-- Owl Carousel Js file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

<!--  isotope plugin cdn  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous"></script>

<script>

$("#top-sale .owl-carousel").owlCarousel({
 loop:true,
 nav:true,
 dots:false,
 responsive:{
     0:{
     items:1
 },
 600:{
     items:3
 },
 1000:{
     items:5
 }
 }
});
var $grid=$(".grid").isotope({
itemSelector:'.grid-item',
layoutMode:'fitRows'
});

//filter items on button click
$(".button-group").on("click","button",function(){
var filterValue=$(this).attr('data-filter');
$grid.isotope({filter:filterValue});
})
//new phones carousel
$("#new-phones .owl-carousel").owlCarousel({
 loop:true,
 nav:false,
 dots:true,
 responsive:{
     0:{
     items:1
 },
 600:{
     items:3
 },
 1000:{
     items:5
 }
 }
});

//blogs
$("#blogs .owl-carousel").owlCarousel({
 loop:true,
 nav:false,
 dots:true,
 responsive:{
     0:{
     items:1
 },
 600:{
     items:3
 }

 }
});
// product qty section
let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $deal_price = $("#deal-price");
    // let $input = $(".qty .qty_input");

    // click on qty up button
    $qty_up.click(function(e){

        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        // change product price using ajax call
        $.ajax({url: "Template/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if($input.val() >= 1 && $input.val() <= 9){
                    $input.val(function(i, oldval){
                        return ++oldval;
                    });

                    // increase price of the product
                    $price.text(parseInt(item_price * $input.val()).toFixed(2));

                    // set subtotal price
                    let subtotal = parseInt($deal_price.text()) + parseInt(item_price);
                    $deal_price.text(subtotal.toFixed(2));
                }

            }}); // closing ajax request
    }); // closing qty up button

    // click on qty down button
    $qty_down.click(function(e){

        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        // change product price using ajax call
        $.ajax({url: "Template/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if($input.val() > 1 && $input.val() <= 10){
                    $input.val(function(i, oldval){
                        return --oldval;
                    });


                    // increase price of the product
                    $price.text(parseInt(item_price * $input.val()).toFixed(2));

                    // set subtotal price
                    let subtotal = parseInt($deal_price.text()) - parseInt(item_price);
                    $deal_price.text(subtotal.toFixed(2));
                }

            }}); // closing ajax request
    }); // closing qty down button

</script>
</body>
</html>