<!DOCTYPE html>


<html>
<head>
  <title>Root Cave Ecommerce</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"  >
    <link rel="stylesheet" href="css/main.css"  >
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no" >
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


</head>
<body>
<!-- This is the Main menu-->
<!--Top Nav Bar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <a href="index.php" class="navbar-brand">Root Cave E-Commerce</a>
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men<span class="caret"></span></a>
                <ul class="dropdown-menu " role="menu">
                    <li><a href="#">Shirts</a></li>
                    <li><a href="#">Paints</a></li>
                    <li><a href="#">Shoes</a></li>
                    <li><a href="#">Accessories</a></li>


                </ul>
            </li>
        </ul>
    </div>
</nav><!-- End of Main Menu -->
<!--Header -->
<div id="headerWrapper">
    <div id="back-flower"> </div>
        <div id="logotext"> </div>
            <div id="fore-flower"></div>
</div>
<!-- End Header -->
<div class="container-fluid">
<!--Left Sidebar -->
<div class=" col-md-2 ">
Left Sidebar
</div>
<!--End Left Sidebar -->

<!--main content -->
<div class="col-md-8 ">
<div class="row">
<h2 class="text-center">Feature Products</h2>
<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <h4>Levis Jeans</h4>
    <img src="images/products/men4.png" alt="Levis Jeans" class="thumb"/>
    <p class="list-price text-danger">List Price: <s>$54.99</s></p>
    <p class="price">Our Price: $34.99</p>
    <button type="button" class="btn btn-small btn-success" data-toggle="modal" data-target="#details-1" >Details</button>

</div>

<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <h4>Hollister Shirt</h4>
    <img src="images/products/men1.png" alt="Hollister Shirt" class="thumb"/>
    <p class="list-price text-danger">List Price: <s>$34.99</s></p>
    <p class="price">Our Price: $29.99</p>
    <button type="button" class="btn btn-small btn-success" data-toggle="modal" data-target="#details-1" >Details</button>

</div>

<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <h4>Fancy Shoes</h4>
    <img src="images/products/women6.png" alt="Fancy Shoes" class="thumb"/>
    <p class="list-price text-danger">List Price: <s>$64.99</s></p>
    <p class="price">Our Price: $49.99</p>
    <button type="button" class="btn btn-small btn-success" data-toggle="modal" data-target="#details-1" >Details</button>

</div>

<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <h4>Boys Hoodies</h4>
    <img src="images/products/boys1.png" alt="Boys Hoodies" class="thumb"/>
    <p class="list-price text-danger">List Price: <s>$24.99</s></p>
    <p class="price">Our Price: $19.99</p>
    <button type="button" class="btn btn-small btn-success" data-toggle="modal" data-target="#details-1" >Details</button>

</div>

<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <h4>Purse</h4>
    <img src="images/products/women5.png" alt="Purse" class="thumb"/>
    <p class="list-price text-danger">List Price: <s>$34.99</s></p>
    <p class="price">Our Price: $19.99</p>
    <button type="button" class="btn btn-small btn-success" data-toggle="modal" data-target="#details-1" >Details</button>

</div>

<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <h4>Woman's Skirt</h4>
    <img src="images/products/women3.png" alt="Woman's Skirt"class="thumb" />
    <p class="list-price text-danger">List Price: <s>$64.99</s></p>
    <p class="price">Our Price: $19.99</p>
    <button type="button" class="btn btn-small btn-success" data-toggle="modal" data-target="#details-1" >Details</button>

</div>

<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <h4>Girl's Dress</h4>
    <img src="images/products/girls3.png" alt="Girl's Dress" class="thumb"/>
    <p class="list-price text-danger">List Price: <s>$49.99</s></p>
    <p class="price">Our Price: $39.99</p>
    <button type="button" class="btn btn-small btn-success" data-toggle="modal" data-target="#details-1" >Details</button>

</div>

<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <h4>Woman's Shoes</h4>
    <img src="images/products/shoes.jpg" alt="Woman's Shoes"class="thumb" />
    <p class="list-price text-danger">List Price: <s>$54.99</s></p>
    <p class="price">Our Price: $19.99</p>
    <button type="button" class="btn btn-small btn-success" data-toggle="modal" data-target="#details-1" >Details</button>

</div>
</div>
</div><!--End main content -->
<!--Right Sidebar -->
<div class="col-md-2 ">


Right Sidebar


</div>
<!--End Right Sidebar -->

</div>
<!--End Fluid Container -->


<footer class="text-center" id="footer">
    &copy; Copyright 2016 Root Cave Ecommerce
</footer>

<div class="modal fade details-1" id="details-1" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true"><!--Start Details Modal -->
    <div class="modal-dialog modal-lg"><!--Start Modal Dialog -->
           <div class="modal-content"><!--Start Modal Content -->
            <div class="modal-header"><!--Start Modal Header -->
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title text-center">Levis Jeans</h4>
            </div><!--End Modal Header -->
            <div class="modal-body "><!--Start Modal Body -->
                <div class="container-fluid">
                    <div class="row">
                        <div class=" col-sm-6 ">
                            <div class="center-block">
                                <img src="images/products/men4.png" alt="Levis Jeans" class="details img-responsive">
                            </div>

                        </div>
                        <div class=" col-sm-6 ">
                            <h4>Details</h4>
                            <p>These jeans are amazing! They are straight leh, fit great and look sexy. Get a Pair while they last</p>
                            <hr>
                            <p>Price: $34.99</p>
                            <p>Brand: Levis</p>
                            <form action="add_cart.php" method="post">
                                <div class="form-group"><!--Start form group -->
                                    <div class="col-xs-3">
                                        <label for="quantity">
                                            Quantity:
                                        </label>
                                        <input type="text" class="form-control" id="quantity" name="quantity">
                                    </div>
                                    <p>Availble: 3</p>
                                </div><!--End form group -->
                                <br>
                               <div class="form-group"><!--Start form group -->

                                        <label for="size">
                                            Size:
                                        </label>
                                        <select  class="form-control" id="size" name="size">
                                        <option value=""></option>
                                        <option value="28">28</option>
                                        <option value="32">32</option>
                                        <option value="36">36</option>
                                        </select>

                                </div><!--End form group -->
                            </form>
                        </div>

                    </div>
                </div>
            </div><!--End Modal Body -->
            <div class="modal-footer"><!--Start Modal footer -->
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart</button>


            </div><!--Start Modal footer -->
            </div><!--End Modal Content -->
    </div><!--End Modal Dialog -->
</div><!--End Modal Details -->
<script>
    $(window).scroll(function(){
        var vscroll= $(this).scrollTop();
        $('#logotext').css({
            "transform":"translate(0px,"+vscroll/2+"px)"
        });

        var vscroll= $(this).scrollTop();
        $('#back-flower').css({
            "transform":"translate("+vscroll/5+"px,-"+vscroll/12+"px)"
        });

        var vscroll= $(this).scrollTop();
        $('#fore-flower').css({
            "transform":"translate(0px,-"+vscroll/2+"px)"
        });
    });
</script>
</body>
</html>
