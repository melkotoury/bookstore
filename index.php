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

<script>
    JQuery(window).scroll(function(){
        var vscroll= JQuery(this).scrollTop();
        JQuery('#logotext').css({
            "transform":"translate(0px,"+vscroll/2+"px)"
        });

        var vscroll= JQuery(this).scrollTop();
        JQuery('#back-flower').css({
            "transform":"translate("+vscroll/5+"0px,-"+vscroll/12+"px)"
        });

        var vscroll= JQuery(this).scrollTop();
        JQuery('#fore-flower').css({
            "transform":"translate(0px,-"+vscroll/2+"px)"
        });
    });
</script>
</body>
</html>