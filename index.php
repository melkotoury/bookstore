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
    <img src="images/products/men4.png" alt="Levis Jeans" />
    <p class="list-price text-danger">List Price: <s>$54.99</s></p>
    <p class="price">Our Price: $34.99</p>
    <button type="button" class="btn btn-small btn-success" data-toggle="modal" data-target="#details-1" >Details</button>

</div>

<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <h4>Hollister Shirt</h4>
    <img src="images/products/men1.png" alt="Hollister Shirt" />
    <p class="list-price text-danger">List Price: <s>$34.99</s></p>
    <p class="price">Our Price: $29.99</p>
    <button type="button" class="btn btn-small btn-success" data-toggle="modal" data-target="#details-1" >Details</button>

</div>

<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <h4>Fancy Shoes</h4>
    <img src="images/products/women6.png" alt="Fancy Shoes" />
    <p class="list-price text-danger">List Price: <s>$64.99</s></p>
    <p class="price">Our Price: $49.99</p>
    <button type="button" class="btn btn-small btn-success" data-toggle="modal" data-target="#details-1" >Details</button>

</div>

<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <h4>Boys Hoodies</h4>
    <img src="images/products/men3.png" alt="Boys Hoodies" />
    <p class="list-price text-danger">List Price: <s>$24.99</s></p>
    <p class="price">Our Price: $19.99</p>
    <button type="button" class="btn btn-small btn-success" data-toggle="modal" data-target="#details-1" >Details</button>

</div>

<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <h4>Woman's Shirt</h4>
    <img src="images/products/women7.png" alt="Woman's Shirt" />
    <p class="list-price text-danger">List Price: <s>$34.99</s></p>
    <p class="price">Our Price: $19.99</p>
    <button type="button" class="btn btn-small btn-success" data-toggle="modal" data-target="#details-1" >Details</button>

</div>

<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <h4>Woman's Skirt</h4>
    <img src="images/products/girls3.png" alt="Woman's Skirt" />
    <p class="list-price text-danger">List Price: <s>$64.99</s></p>
    <p class="price">Our Price: $19.99</p>
    <button type="button" class="btn btn-small btn-success" data-toggle="modal" data-target="#details-1" >Details</button>

</div>

<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <h4>Purse</h4>
    <img src="images/products/men4.png" alt="Purse" />
    <p class="list-price text-danger">List Price: <s>$49.99</s></p>
    <p class="price">Our Price: $39.99</p>
    <button type="button" class="btn btn-small btn-success" data-toggle="modal" data-target="#details-1" >Details</button>

</div>

<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <h4>Levis Jeans</h4>
    <img src="images/products/men4.png" alt="Levis Jeans" />
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


<div></div>
<script>
    JQuery(window).scroll(function(){
        var vscroll= JQuery(this).scrollTop();
        JQuery('#logotext').css({
            "transform":"translate(0px,"+vscroll/2+"px)"
        });

        var vscroll= JQuery(this).scrollTop();
        JQuery('#back-flower').css({
            "transform":"translate("+vscroll/5+"px,-"+vscroll/12+"px)"
        });

        var vscroll= JQuery(this).scrollTop();
        JQuery('#fore-flower').css({
            "transform":"translate(0px,-"+vscroll/2+"px)"
        });
    });
</script>
</body>
</html>
