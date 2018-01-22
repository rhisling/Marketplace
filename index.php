<?php
session_start();
function array_key_lookup($haystack, $needle)
{
    $matches = preg_grep("/$needle/", array_keys($haystack));
    return array_intersect_key($haystack, array_flip($matches));
}

$mvl = $_COOKIE;
$arr_mvl = array();
$filtered_mvl = array_key_lookup($mvl, "^[0-9]+$");
arsort($filtered_mvl);
$mvlkeys = (array_keys($filtered_mvl));
$mvl5 = array_slice($mvlkeys, 0, 7);
//print_r($mvl5);
$mvl5split = implode(',',$mvl5);
$integerIDs = array_map('intval', $mvl5);
//print_r($mvl5split);



$dbResults = array();

$connection = mysqli_connect('shareddb1d.hosting.stackcp.net', 'admin-13', 'aravi-13', 'credentials-313726f7');
//$connection = mysqli_connect('localhost', 'root', '', 'php');
//mysqli_query($connection,"INSERT INTO `Credentials`( `Username`, `Password`) VALUES ('aravi','aravi')");
if(count($mvl5)>0){
    if ($connection ) {
// mysqli_query($connection,"INSERT INTO `Credentials`( `Username`, `Password`) VALUES ('aravi','aravi')");
        foreach($mvl5 as $mvl){
            $result = mysqli_query($connection, "Select * from `Product`  where ProductId = '$mvl'");
            $row = mysqli_fetch_row($result);
            array_push($dbResults,$row);
            //echo "foreach";
        }
        // $row = mysqli_fetch_row($result);
    }
    else{
        echo  mysqli_connect_errno();
    }
}

//print_r($dbResults);
//print_r($filtered_mvl);
?>

<?php
$randomsql = "SELECT * FROM `Product`
ORDER BY RAND()
LIMIT 10";

$randomproducts = array();

if($connection){
    $randresult = mysqli_query($connection,$randomsql);

    while($row = mysqli_fetch_row($randresult)){
        array_push($randomproducts,$row);
    }

}
else{
    echo mysqli_connect_errno();
}

//print_r($randomproducts);
//print("done");

?>


<?php
$lvl = $_COOKIE;
$lastvisitedproducts = array();

$filtered_lvl = array_key_lookup($lvl, "^[0-9]+tracker$");

//print_r($filtered_lvl);

arsort($filtered_lvl);
$lvl5 = array_slice($filtered_lvl, 0, 7);

foreach ($lvl5 as $key => $value) {
    // echo "$key\n";
    $var = substr($key, 0, 4);
    array_push($lastvisitedproducts, $var);
}

$lvlresults= array();

if(count($lastvisitedproducts)>0){
    if ($connection ) {
// mysqli_query($connection,"INSERT INTO `Credentials`( `Username`, `Password`) VALUES ('aravi','aravi')");
        foreach($lastvisitedproducts as $lastvisitedproduct){
            $lvlresult = mysqli_query($connection, "Select * from `Product`  where ProductId = '$lastvisitedproduct'");
            $row = mysqli_fetch_row($lvlresult);
            array_push($lvlresults,$row);
            //echo "foreach";
        }
        // $row = mysqli_fetch_row($result);
    }
    else{
        echo  mysqli_connect_errno();
    }
}

//echo "this";
//print_r($lvlresults);
//echo "done";
?>

<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Amalgam </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logo/favicon.ico">

    <!-- Google Fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">

    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome CSS
    ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Mean Menu CSS
    ============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- owl.carousel CSS
    ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- nivo-slider css
    ============================================ -->
    <link rel="stylesheet" href="css/nivo-slider.css">
    <!-- Price slider css
    ============================================ -->
    <link rel="stylesheet" href="css/jquery-ui-slider.css">
    <!-- Simple Lence css
    ============================================ -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleGallery.css">
    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- main CSS
    ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
    ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Header Area -->
<div class="header-area home-2-header-area">
    <!-- Header top bar -->
    <div class="header-top-bar">
        <div class="container">
            <div class="header-top-inner">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <div class="header-top-left">
                            <div class="phone">
                                <label>Call us:</label> (+1) 234 567 8910
                            </div>
                            <div class="e-mail">
                                <label>Email:</label> admin@amalgam.com
                            </div>
                            <!-- Header Link Area -->
                            <div class="header-link-area">
                                <div class="header-link">
                                    <p class="hidden-xs">Language: </p>
                                    <ul>
                                        <li><a href="#">English <span class="caret"></span></a>
                                            <ul>
                                                <li><a href="#">English</a></li>
                                                <li><a href="#">Espanol</a></li>
                                                <li><a href="#">Italian</a></li>
                                                <li><a href="#">Chinese</a></li>
                                                <li><a href="#">English 5</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-link">
                                    <ul>
                                        <li><a href="#">Account <span class="caret"></span></a>
                                            <ul>
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="wishlist.html">My Wishlist</a></li>
                                                <li><a href="cart.html">My Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="my-account.html">login</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- End Header Link Area -->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="header-top-right">


                            <!-- Header Social Icon -->
                            <div class="header-social-icon">
                                <ul>
                                    <li><a href="#"><i class="fa fa-twitter" onclick="window.open(
				      'https://twitter.com/share?url='+encodeURIComponent('www.faciteel.xyz')+'&text='+encodeURIComponent('Check out our site #Amalgam') + '&count=none/',
				      'twitter-share-dialog',
				      'width=626,height=436,top='+((screen.height - 436) / 2)+',left='+((screen.width - 626)/2 ));
				    return false;"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" onclick="javascript:window.open('https://plus.google.com/share?url=http://www.faciteel.xyz/',
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" onclick="window.open(
                                            'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('www.faciteel.xyz') +'&t=' + encodeURIComponent('Share on social networks #amalgam'),
                                            'facebook-share-dialog',
                                            'width=626,height=436,top='+((screen.height - 436) / 2)+',left='+((screen.width - 626)/2 ));
                                            return false;"></i></a></li>
                                    <!--<li><a href="#"><i class="fa fa-youtube"></i></a></li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row" style="padding-top: 5px;">
                <div class="col-sm-12">
                    <div class="header-top-right">

                        <div>
                            <?php if(isset($_SESSION['user'])){ ?>
                                <p><a style="color: #696969;font-size: 12px; padding-bottom: 5px;padding-left: 10px; text-transform: capitalize;" class="header-link" href="logout.php?logout" style="text-decoration:none"><i class="fa fa-sign-in"></i><span class="hidden-xs text-uppercase" style="padding-left: 3px;">  Sign Out</span></a>
                                    <?php echo "Hello, ";?><?php print_r($_SESSION['user']);?>!</p>
                            <?php }else{ ?>
                                <p><a style="color: #696969;font-size: 12px; padding-bottom: 5px;padding-left: 10px; text-transform: capitalize;" class="header-link" href="my-account.php" style="text-decoration:none"><i class="fa fa-user"></i><span class="hidden-xs text-uppercase" style="padding-left: 3px;">Sign In</span> </a>Hello, User!</p>
                            <?php } ?>
                        </div>
                      <!--  --><?php
/*

                        if (isset($_SESSION['USERID'])) {
                            $userID = $_SESSION['USERID'];

                            echo '<div class="loginsty">
         <i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Welcome ' . $userID . '</span>


         <a href="logout.php"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">Logout</span></a>
          </div>';
                        } else {

                            echo '<div>
                                <a style="color: #696969;font-size: 12px; padding-bottom: 5px;padding-left: 10px; text-transform: capitalize;" href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Sign in</span></a>


                                <a style="color: #696969;font-size: 12px; padding-bottom: 5px;padding-left: 10px; text-transform: capitalize;" href="/um/customer-register.php"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">Sign up</span></a>
                            </div>';

                        }
                        */?>
                    </div>

                </div>
            </div>
        </div>
    </div><!-- End Header Top bar -->


    <!-- Header bottom -->
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <!-- Header Search -->
                    <div class="header-search">
                        <form action="#">
                            <input type="text" placeholder="SEARCH...">
                            <button type="button" class="btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Header logo -->
                    <div class="header-logo">
                        <a href="index.php"><h1
                                    style="font-family: Tangerine; font-size: 75px; font-weight: bolder; color: #5e5e5e">
                                Amalgam</h1></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Header Cart Area-->
                    <div class="header-cart-area">
                        <div class="header-cart">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span class="my-cart">My cart</span>
                                        <span class="badge">2</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <div class="cart-list">
                                                <div class="cart-list-item">
                                                    <div class="cart-list-img">
                                                        <a href="#"><img src="img/cart/c1.jpg" alt="cart"/></a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <a href="#">Etiam gravida</a>
                                                        <p>1 x <span>$432.00</span></p>
                                                    </div>
                                                    <div class="cart-button">
                                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                                        <a href="#"><i class="fa fa-times"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-list cart-list-two">
                                                <div class="cart-list-item">
                                                    <div class="cart-list-img">
                                                        <a href="#"><img src="img/cart/c2.jpg" alt="cart"/></a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <a href="#">Etiam gravida</a>
                                                        <p>1 x <span>$432.00</span></p>
                                                    </div>
                                                    <div class="cart-button">
                                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                                        <a href="#"><i class="fa fa-times"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-subtotal">
                                                <p>Subtotal: <span>$1,131.00</span></p>
                                            </div>
                                            <div class="cart-action">
                                                <button type="button" class="btn"><span>checkout</span> <i
                                                            class="fa fa-long-arrow-right"></i></button>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div><!-- End Header Cart Area-->
                </div>
            </div>
        </div>
    </div><!-- End Header bottom -->
</div><!-- End Header Area -->


<!-- *** LOGIN MODAL ***
_________________________________________________________ -->

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
    <div class="modal-dialog modal-sm">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="Login">Customer login</h4>
            </div>
            <div class="modal-body">
                <form action="/login/loginuser.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username_modal" required=""
                               placeholder="username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password_modal" required=""
                               placeholder="password">
                    </div>

                    <p class="text-center">
                        <input name="submit" type="submit" value="Log in" class="btn btn-template-main"></input>
                    </p>

                </form>

                <p class="text-center text-muted">Not registered yet?</p>


            </div>
        </div>
    </div>
</div>

<!-- *** LOGIN MODAL END *** -->

<!-- *** Create-User MODAL ***
_________________________________________________________ -->

<div class="modal fade" id="create-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
    <div class="modal-dialog modal-sm">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="Login">Customer login</h4>
            </div>
            <div class="modal-body">
                <form action="/login/loginuser.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username_modal" required=""
                               placeholder="username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password_modal" required=""
                               placeholder="password">
                    </div>

                    <p class="text-center">
                        <input name="submit" type="submit" value="Log in" class="btn btn-template-main"></input>
                    </p>

                </form>

                <p class="text-center text-muted">Not registered yet?</p>


            </div>
        </div>
    </div>
</div>

<!-- *** CreateUser MODAL END *** -->


<!-- Main Menu Area -->
<div class="main-menu-area home-2-main-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Main Menu -->
                <div class="main-menu hidden-sm hidden-xs">
                    <nav>
                        <ul class="main-ul">
                            <li class="sub-menu-li"><a href="index.php" class="active">Home</a>
                            </li>
                            <li><a href="shop.php"><span class="label-menu">Sale</span> Partners<i
                                            class="fa fa-chevron-down"></i></a>
                                <ul class="mega-menu-ul">
                                    <li>
                                        <!-- Mega Menu -->
                                        <div class="mega-menu">
                                            <div class="single-mega-menu">
                                                <h2><a href="shop.php">Choose the pill</a></h2>

                                                <a href="shop.php?id=3"><i class="fa fa-chevron-circle-right"></i>
                                                    <span>Vladyno Apps</span></a>
                                                <a href="shop.php?id=2"><i class="fa fa-chevron-circle-right"></i>
                                                    <span>Muster Comic Collection</span></a>
                                                <a href="shop.php?id=8"><i class="fa fa-chevron-circle-right"></i>
                                                    <span>Fashion Collection</span></a>
                                                <a href="shop.php?id=7"><i class="fa fa-chevron-circle-right"></i>
                                                    <span>Blizzard Studio</span></a>
                                                <a href="shop.php?id=1"><i class="fa fa-chevron-circle-right"></i> <span>Amazing Kryptonite</span></a>

                                            </div>

                                            <!-- <div class="single-mega-menu banner-add">
                                                 <a href="shop.html">
                                                     <img src="img/cart/menu-img.png" alt="img">
                                                 </a>
                                             </div>-->
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="tracker.php">Tracker<i class=""></i></a>

                            </li>

                            <li><a href="About.html">About<i class=""></i></a>

                            </li>
                            <li><a href="ContactUs.html">Contact<i class=""></i></a>

                            </li>

                        </ul>
                    </nav>
                </div><!-- End Main Menu -->
                <!-- Start Mobile Menu -->
                <div class="mobile-menu hidden-md hidden-lg">
                    <nav>
                        <ul class="main-ul">
                            <li class="sub-menu-li"><a href="index.php" class="active">Home</a>
                            </li>
                            <li><a href="shop.php"><span class="label-menu">Sale</span> Partners<i
                                            class="fa fa-chevron-down"></i></a>
                                <ul class="mega-menu-ul">
                                    <li>
                                        <!-- Mega Menu -->
                                        <div class="mega-menu">
                                            <div class="single-mega-menu">
                                                <h2><a href="shop.php">Choose the pill</a></h2>

                                                <a href="shop.php?id=3"><i class="fa fa-chevron-circle-right"></i>
                                                    <span>Vladyno Apps</span></a>
                                                <a href="shop.php?id=2"><i class="fa fa-chevron-circle-right"></i>
                                                    <span>Muster Comic Collection</span></a>
                                                <a href="shop.php?id=8"><i class="fa fa-chevron-circle-right"></i>
                                                    <span>Fashion Collection</span></a>
                                                <a href="shop.php?id=7"><i class="fa fa-chevron-circle-right"></i>
                                                    <span>Blizzard Studio</span></a>
                                                <a href="shop.php?id=1"><i class="fa fa-chevron-circle-right"></i> <span>Amazing Kryptonite</span></a>

                                            </div>

                                            <!-- <div class="single-mega-menu banner-add">
                                                 <a href="shop.html">
                                                     <img src="img/cart/menu-img.png" alt="img">
                                                 </a>
                                             </div>-->
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="tracker.php">Tracker<i class=""></i></a>

                            </li>

                            <li><a href="About.html">About<i class=""></i></a>

                            </li>
                            <li><a href="ContactUs.html">Contact<i class=""></i></a>

                            </li>

                        </ul>
                    </nav>
                </div><!-- End Mobile Menu -->
            </div>
        </div>
    </div>
</div><!-- End Main Menu Area -->
<!-- Main Slider Area -->
<div class="main-slider-area home-2-main-slider-area entire-home-main-slider">
    <div class="container">
        <!-- Main Slider -->
        <div class="main-slider">
            <div class="slider">
                <div id="mainSlider" class="nivoSlider slider-image">
                    <img src="img/productimages/a1.jpg" alt="main slider" style="width:100%" title="#htmlcaption1"/>
                    <img src="img/productimages/a2.jpg" alt="main slider" style="width:100%" title="#htmlcaption2"/>
                    <img src="img/productimages/a3.jpg" alt="main slider" style="width:100%" title="#htmlcaption2"/>
                    <img src="img/productimages/a4.jpg" alt="main slider" style="width:100%" title="#htmlcaption2"/>
                    <img src="img/productimages/a5.jpg" alt="main slider" style="width:100%" title="#htmlcaption2"/>
                </div>
                <!-- Slider Caption One -->
                <div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
                    <div class="slider-progress"></div>
                    <div class="slide-text">
                        <div class="middle-text">
                            <div class="cap-title wow zoomInRight" data-wow-duration=".9s" data-wow-delay="0s">
                                <h2>At Finally started...</h2>
                            </div>
                            <div class="cap-dec">
                                <h1 class="cap-dec wow zoomInRight" data-wow-duration="1.1s" data-wow-delay="0s">Huge
                                    sale</h1>
                                <p class="cap-dec wow zoomInRight" data-wow-duration="1.3s" data-wow-delay="0s"> up to
                                    70% off Fahion collection Shop now</p>
                            </div>
                            <div class="cap-readmore wow zoomInRight" data-wow-duration=".9s" data-wow-delay=".5s">
                                <a href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Caption Two -->
                <div id="htmlcaption2" class="nivo-html-caption slider-caption-2">
                    <div class="slider-progress"></div>
                    <div class="slide-text slide-text-2">
                        <div class="middle-text">
                            <div class="cap-dec">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Main Slider -->
    </div>
</div><!-- End Main Slider Area -->
<!-- Product area -->
<div class="product-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Product Top Bar -->
                <div class="product-top-bar customize-tab-bar">
                    <!-- Tab Button -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#p-random" data-toggle="tab"><i class="fa fa-picture-o"></i>Random
                                Products</a></li>
                        <li role="presentation" ><a href="#p-bestseller" data-toggle="tab"><i
                                        class="fa fa-pencil-square-o"></i>Most Visited </a></li>
                        <li role="presentation"><a href="#p-new" data-toggle="tab"><i class="fa fa-star"></i>Last Visited
                                </a></li>

                    </ul><!-- End Tab Button -->
                </div><!-- End Product Top Bar -->
            </div>
            <div class="col-md-12">
                <!-- Single Product area -->
                <div class="single-product-area c-carousel-button">
                    <!-- Tab Content -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="p-random">
                            <div class="row">
                                <!-- Single Product Carousel-->
                                <div id="single-product-random" class="owl-carousel">
                                    <!-- Start Single Product Column -->
                                    <?php
                                    foreach ($randomproducts as $randomproduct){
                                        echo "<div class=\"col-md-3\">
                                        <div class=\"single-product\">
                                            <div class=\"single-product-img\">
                                                <a href=\"#\">
                                                    <img class=\"primary-img\" src=\"img/productimages/$randomproduct[0].jpg\"  style=\"width: 260px; height: 340px; \" alt=\"product\">
                                                    <img class=\"secondary-img\" src=\"img/product/$randomproduct[0].jpg\"  style=\"width: 260px; height: 340px;\" alt=\"product\">
                                                </a>
                                                <div class=\"product-status\">
                                                    <span class=\"product-new\">New</span>
                                                </div>
                                            </div>
                                            <div class=\"single-product-content\">
                                                <div class=\"product-content-head\">
                                                    <h2 class=\"product-title\"><a href=\"#\">$randomproduct[1]</a></h2>
                                                    <p class=\"product-price\">$randomproduct[3]</p>
                                                </div>
                                                <div class=\"product-bottom-action\">
                                                    <div class=\"product-action\">
                                                        <div class=\"action-button\">
                                                            <button class=\"btn\" type=\"button\"><i
                                                                        class=\"fa fa-shopping-cart\"></i> <span>Add to bag</span>
                                                            </button>
                                                        </div>
                                                        <div class=\"action-view\">
                                                            <button type=\"button\" class=\"btn\" data-toggle=\"modal\"
                                                                    data-target=\"#productModal\"><i
                                                                        class=\"fa fa-search\"></i>Quick view
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>";
                                    }

                                    ?>
                                    <!-- End Single Product Column -->
                                </div><!-- End Single Product Carousel-->
                            </div>
                        </div><!-- End Tab Pane Three -->
                        <!-- Tab Pane One -->
                        <div class="tab-pane " id="p-bestseller">
                            <div class="row">
                                <!-- Single Product Carousel-->
                                <div id="single-product-bestseller" class="owl-carousel">
                                    <!-- Start Single Product Column-->
                                    <?php
                                    foreach ($dbResults as $dbResult){
                                        echo "<div class=\"col-md-3\">
                                        <div class=\"single-product\">
                                            <div class=\"single-product-img\">
                                                <a href=\"#\">
                                                    <img class=\"primary-img\" src=\"img/productimages/$dbResult[0].jpg\"  style=\"width: 260px; height: 340px; \" alt=\"product\">
                                                    <img class=\"secondary-img\" src=\"img/product/$dbResult[0].jpg\"  style=\"width: 260px; height: 340px;\" alt=\"product\">
                                                </a>
                                                <div class=\"product-status\">
                                                    <span class=\"product-new\">New</span>
                                                </div>
                                            </div>
                                            <div class=\"single-product-content\">
                                                <div class=\"product-content-head\">
                                                    <h2 class=\"product-title\"><a href=\"#\">$dbResult[1]</a></h2>
                                                    <p class=\"product-price\">$dbResult[3]</p>
                                                </div>
                                                <div class=\"product-bottom-action\">
                                                    <div class=\"product-action\">
                                                        <div class=\"action-button\">
                                                            <button class=\"btn\" type=\"button\"><i
                                                                        class=\"fa fa-shopping-cart\"></i> <span>Add to bag</span>
                                                            </button>
                                                        </div>
                                                        <div class=\"action-view\">
                                                            <button type=\"button\" class=\"btn\" data-toggle=\"modal\"
                                                                    data-target=\"#productModal\"><i
                                                                        class=\"fa fa-search\"></i>Quick view
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>";
                                    }

                                    ?>
                                    <!-- End Single Product Column -->
                                    <!-- Start Single Product Column -->
                                </div><!-- End Single Product Carousel-->
                            </div>
                        </div><!-- End Tab Pane One -->
                        <!-- Tab Pane Two -->
                        <div class="tab-pane" id="p-new">
                            <div class="row">
                                <!-- Single Product Carousel-->
                                <div id="single-product-new" class="owl-carousel">
                                    <?php
                                    foreach ($lvlresults as $lvlresult){
                                        echo "<div class=\"col-md-3\">
                                        <div class=\"single-product\">
                                            <div class=\"single-product-img\">
                                                <a href=\"#\">
                                                    <img class=\"primary-img\" src=\"img/productimages/$lvlresult[0].jpg\"  style=\"width: 260px; height: 340px; \" alt=\"product\">
                                                    <img class=\"secondary-img\" src=\"img/product/$lvlresult[0].jpg\"  style=\"width: 260px; height: 340px;\" alt=\"product\">
                                                </a>
                                                <div class=\"product-status\">
                                                    <span class=\"product-new\">New</span>
                                                </div>
                                            </div>
                                            <div class=\"single-product-content\">
                                                <div class=\"product-content-head\">
                                                    <h2 class=\"product-title\"><a href=\"#\">$lvlresult[1]</a></h2>
                                                    <p class=\"product-price\">$lvlresult[3]</p>
                                                </div>
                                                <div class=\"product-bottom-action\">
                                                    <div class=\"product-action\">
                                                        <div class=\"action-button\">
                                                            <button class=\"btn\" type=\"button\"><i
                                                                        class=\"fa fa-shopping-cart\"></i> <span>Add to bag</span>
                                                            </button>
                                                        </div>
                                                        <div class=\"action-view\">
                                                            <button type=\"button\" class=\"btn\" data-toggle=\"modal\"
                                                                    data-target=\"#productModal\"><i
                                                                        class=\"fa fa-search\"></i>Quick view
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>";
                                    }

                                    ?> <!-- Start Single Product Column -->

                                </div><!-- End Single Product Carousel-->
                            </div>
                        </div><!-- End Tab Pane Two -->
                        <!-- Tab Pane Three -->

                    </div><!-- End Tab Content -->
                </div><!-- End Single Product area -->
            </div>
        </div>
    </div>
</div><!-- End Product area -->
<!-- Single Banner area -->
<div class="single-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="singler-banner banner-add">
                    <a href="#">
                        <img src="img/productimages/deal.png" alt="banner">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Single Banner area -->
<!-- -----------------------------------------------------------------------commentedout1------------- --!>
<!-- refer index_commentedout_section.php fr contents commented out -->
<!-- -----------------------------------------------------------------------commentedout1------------- --!>


<!-- Blog Post area -->
<div class="blog-post-area brand-products c-carousel-button">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="blog-post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="products-head">
                                <div class="products-head-title">
                                    <i class="fa fa-picture-o"></i>
                                    <h2>Blog posts</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Blog Post Carousel -->
            <div id="blog-posts" class="owl-carousel">
                <div class="col-md-12 col-sm-12">
                    <!-- Blog Post Item area -->
                    <div class="blog-post-item-area">
                        <div class="row">
                            <!-- Blog Post Inner Item Column -->
                            <div class="col-md-6">
                                <!-- Blog Post Inner Item -->
                                <div class="blog-post-inner-item">
                                    <!-- Fetured Product Single Item -->
                                    <div class="blog-post-single-item">
                                        <div class="single-item-img">
                                            <a href="#">
                                                <img src="img/productimages/blog1.jpg" alt="product">
                                            </a>
                                        </div>
                                        <div class="single-item-content">
                                            <h2><a href="#">Here comes... A Single App!</a>
                                            </h2>
                                            <p>But ladies…it’s time to treat ourselves. Let’s collectively agree to swap out that threadbare robe with “Bridesmaid” scrawled across the back (the bride’s about to have her second child!)</p>
                                        </div>
                                    </div><!-- End Blog Post Single Item -->
                                    <!-- Fetured Product Single Item -->
                                    <div class="blog-post-single-item">
                                        <div class="single-item-img">
                                            <a href="#">
                                                <img src="img/productimages/blog2.jpg" alt="product">
                                            </a>
                                        </div>
                                        <div class="single-item-content">
                                            <h2><a href="#">6 Ways to Wear!</a>
                                            </h2>
                                            <p>Through shifting trends and fleeting fads, a few clutch pieces never fall out of style. One of them? The classic pea coat. A timeless topper that’s endured decades, this wardrobe essential doesn’t have to be boring.</p>
                                        </div>
                                    </div><!-- End Blog Post Single Item -->
                                </div><!-- End Blog Post Inner Item -->
                            </div><!-- End Fetured Product Inner Item Column -->
                            <!-- Blog Post Inner Item Column -->
                            <div class="col-md-6">
                                <!-- Blog Post Inner Item -->
                                <div class="blog-post-inner-item">
                                    <!-- Fetured Product Single Item -->
                                    <div class="blog-post-single-item">
                                        <div class="single-item-img">
                                            <a href="#">
                                                <img src="img/productimages/blog4.jpg" alt="product">
                                            </a>
                                        </div>
                                        <div class="single-item-content">
                                            <h2><a href="#">Comic Scholars!!! Welcome!</a>
                                            </h2>
                                            <p>Academic scholars, people working in other institutional frameworks, and independent scholars are all equally welcome to contribute.</p>
                                        </div>
                                    </div><!-- End Blog Post Single Item -->
                                    <!-- Fetured Product Single Item -->
                                    <div class="blog-post-single-item">
                                        <div class="single-item-img">
                                            <a href="#">
                                                <img src="img/productimages/blog5.jpg" alt="product">
                                            </a>
                                        </div>
                                        <div class="single-item-content">
                                            <h2><a href="#">Come on, Pose for yourself!</a>
                                            </h2>
                                            <p>This is only one example of the creativity and innovative thinking the blog has projected to its readers since being launched in 2010 by both Morris and co-founder, Patrick Hall</p>
                                        </div>
                                    </div><!-- End Blog Post Single Item -->
                                </div><!-- End Blog Post Inner Item -->
                            </div><!-- End Fetured Product Inner Item Column -->
                        </div>
                    </div><!-- End Blog Post Item area -->
                </div>
            </div><!-- End Blog Post Carousel -->
        </div>
    </div>
</div><!-- End Blog Post area -->

<!--Individual Top 5 -->
<div class="container">
    <div class="product-tab-area">
        <!-- Tab Bar -->

        <div class="tab-bar">
            <h3>Top 5 Products from individual company</h3>
            <hr>
            <div class="tab-bar-inner">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#muster-product" data-toggle="tab"><i class="fa fa fa-bolt"></i>Muster Comic</a></li>
                    <li><a href="#fashion-product" data-toggle="tab"><i class="fa fa fa-bolt"></i>Fashion Collection</a></li>
                    <li><a href="#photograph-product" data-toggle="tab"><i class="fa fa fa-bolt"></i>Photograph Collection</a></li>
                    <li><a href="#vladyno-product" data-toggle="tab"><i class="fa fa fa-bolt"></i>Vladyno Apps</a></li>
                    <li><a href="#amazing-krypto" data-toggle="tab"><i class="fa fa fa-bolt"></i>Amazing Kryptonite</a></li>

                </ul>
            </div>

        </div><!-- End Tab Bar -->
        <!-- Tab Content -->
        <div class="tab-content">
            <div class="tab-pane active" id="muster-product">
                <div class="row tab-content-row">
                    <?php
                    $id = 2;
                    $musterproducts = array();
                    $sql1 = "SELECT * FROM `Product`WHERE ProductId > "  . $id * 1000 .  " and ProductId <  ". ($id + 1) * 1000 .  " ORDER BY RAND() LIMIT 5";
                    if($connection){
                        $result_muster = mysqli_query($connection, $sql1);
                        while($row1 = mysqli_fetch_row($result_muster)){
                            array_push($musterproducts,$row1);
                        }
                    }
                    foreach ($musterproducts as $musterproduct){
                        $productId = $musterproduct[0];
                        $productTag = $musterproduct[1];
                        $productName = $musterproduct[2];
                        $productPrice = $musterproduct[3];
                        $productDesc = $musterproduct[4];
                        echo "<div class=\"col-md-4 col-sm-4 tab-content-row\">
                                                <div class=\"single-product\">
                                                    <div class=\"single-product-img\">
                                                        <a href=\"#\">
                                                            <img  class=\"primary-img\" src=\"img/productimages/$productId.jpg\" style=\"width: 260px; height: 340px;\" alt=\"product\">
                                                            <img  class=\"secondary-img\" src=\"img/productimages/$productId.jpg\" style=\"width: 260px; height: 340px;\" alt=\"product\">
                                                        </a>
                                                    </div>
                                                    <div class=\"single-product-content\">
                                                        <div class=\"product-content-head\">
                                                            <h2 class=\"product-title\"><a href=\"product-details.php?pid=$productId\">$productName</a></h2>
                                                            <p class=\"product-price\">$productPrice</p>
                                                        </div>
                                                        <div class=\"product-bottom-action\">
                                                            <div class=\"product-action\">
                                                                <div class=\"action-button\">
                                                                    <button class=\"btn\" type=\"button\"><i class=\"fa fa-shopping-cart\"></i> <span>Add to bag</span></button>
                                                                </div>
                                                                <div class=\"action-view\">
                                                                    <button type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#productModal\"><i class=\"fa fa-search\"></i>Quick view</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>";
                    }
                    ?>
                </div>

            </div>
            <div class="tab-pane " id="fashion-product">
                <div class="row tab-content-row">
                    <?php
                    $id = 8;
                    $musterproducts = array();
                    $sql1 = "SELECT * FROM `Product`WHERE ProductId > "  . $id * 1000 .  " and ProductId <  ". ($id + 1) * 1000 .  " ORDER BY RAND() LIMIT 5";
                    if($connection){
                        $result_muster = mysqli_query($connection, $sql1);
                        while($row1 = mysqli_fetch_row($result_muster)){
                            array_push($musterproducts,$row1);
                        }
                    }
                    foreach ($musterproducts as $musterproduct){
                        $productId = $musterproduct[0];
                        $productTag = $musterproduct[1];
                        $productName = $musterproduct[2];
                        $productNametrim =substr($productName,0,10);
                        $productPrice = $musterproduct[3];
                        $productDesc = $musterproduct[4];
                        echo "<div class=\"col-md-4 col-sm-4 tab-content-row\">
                                                <div class=\"single-product\">
                                                    <div class=\"single-product-img\">
                                                        <a href=\"#\">
                                                            <img  class=\"primary-img\" src=\"img/productimages/$productId.jpg\" style=\"width: 260px; height: 340px;\" alt=\"product\">
                                                            <img  class=\"secondary-img\" src=\"img/productimages/$productId.jpg\" style=\"width: 260px; height: 340px;\" alt=\"product\">
                                                        </a>
                                                    </div>
                                                    <div class=\"single-product-content\">
                                                        <div class=\"product-content-head\">
                                                            <h2 class=\"product-title\"><a href=\"product-details.php?pid=$productId\">$productNametrim</a></h2>
                                                            <p class=\"product-price\">$productPrice</p>
                                                        </div>
                                                        <div class=\"product-bottom-action\">
                                                            <div class=\"product-action\">
                                                                <div class=\"action-button\">
                                                                    <button class=\"btn\" type=\"button\"><i class=\"fa fa-shopping-cart\"></i> <span>Add to bag</span></button>
                                                                </div>
                                                                <div class=\"action-view\">
                                                                    <button type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#productModal\"><i class=\"fa fa-search\"></i>Quick view</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>";
                    }
                    ?>
                </div>

            </div>
            <div class="tab-pane " id="photograph-product">
                <div class="row tab-content-row">
                    <?php
                    $id = 7;
                    $musterproducts = array();
                    $sql1 = "SELECT * FROM `Product`WHERE ProductId > "  . $id * 1000 .  " and ProductId <  ". ($id + 1) * 1000 .  " ORDER BY RAND() LIMIT 5";
                    if($connection){
                        $result_muster = mysqli_query($connection, $sql1);
                        while($row1 = mysqli_fetch_row($result_muster)){
                            array_push($musterproducts,$row1);
                        }
                    }
                    foreach ($musterproducts as $musterproduct){
                        $productId = $musterproduct[0];
                        $productTag = $musterproduct[1];
                        $productName = $musterproduct[2];
                        $productPrice = $musterproduct[3];
                        $productDesc = $musterproduct[4];
                        echo "<div class=\"col-md-4 col-sm-4 tab-content-row\">
                                                <div class=\"single-product\">
                                                    <div class=\"single-product-img\">
                                                        <a href=\"#\">
                                                            <img  class=\"primary-img\" src=\"img/productimages/$productId.jpg\" style=\"width: 260px; height: 340px;\" alt=\"product\">
                                                            <img  class=\"secondary-img\" src=\"img/productimages/$productId.jpg\" style=\"width: 260px; height: 340px;\" alt=\"product\">
                                                        </a>
                                                    </div>
                                                    <div class=\"single-product-content\">
                                                        <div class=\"product-content-head\">
                                                            <h2 class=\"product-title\"><a href=\"product-details.php?pid=$productId\">$productName</a></h2>
                                                            <p class=\"product-price\">$productPrice</p>
                                                        </div>
                                                        <div class=\"product-bottom-action\">
                                                            <div class=\"product-action\">
                                                                <div class=\"action-button\">
                                                                    <button class=\"btn\" type=\"button\"><i class=\"fa fa-shopping-cart\"></i> <span>Add to bag</span></button>
                                                                </div>
                                                                <div class=\"action-view\">
                                                                    <button type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#productModal\"><i class=\"fa fa-search\"></i>Quick view</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>";
                    }
                    ?>
                </div>

            </div>
            <div class="tab-pane " id="vladyno-product">
                <div class="row tab-content-row">
                    <?php
                    $id = 3;
                    $musterproducts = array();
                    $sql1 = "SELECT * FROM `Product`WHERE ProductId > "  . $id * 1000 .  " and ProductId <  ". ($id + 1) * 1000 .  " ORDER BY RAND() LIMIT 5";
                    if($connection){
                        $result_muster = mysqli_query($connection, $sql1);
                        while($row1 = mysqli_fetch_row($result_muster)){
                            array_push($musterproducts,$row1);
                        }
                    }
                    foreach ($musterproducts as $musterproduct){
                        $productId = $musterproduct[0];
                        $productTag = $musterproduct[1];
                        $productName = $musterproduct[2];
                        $productPrice = $musterproduct[3];
                        $productDesc = $musterproduct[4];
                        echo "<div class=\"col-md-4 col-sm-4 tab-content-row\">
                                                <div class=\"single-product\">
                                                    <div class=\"single-product-img\">
                                                        <a href=\"#\">
                                                            <img  class=\"primary-img\" src=\"img/productimages/$productId.jpg\" style=\"width: 260px; height: 340px;\" alt=\"product\">
                                                            <img  class=\"secondary-img\" src=\"img/productimages/$productId.jpg\" style=\"width: 260px; height: 340px;\" alt=\"product\">
                                                        </a>
                                                    </div>
                                                    <div class=\"single-product-content\">
                                                        <div class=\"product-content-head\">
                                                            <h2 class=\"product-title\"><a href=\"product-details.php?pid=$productId\">$productName</a></h2>
                                                            <p class=\"product-price\">$productPrice</p>
                                                        </div>
                                                        <div class=\"product-bottom-action\">
                                                            <div class=\"product-action\">
                                                                <div class=\"action-button\">
                                                                    <button class=\"btn\" type=\"button\"><i class=\"fa fa-shopping-cart\"></i> <span>Add to bag</span></button>
                                                                </div>
                                                                <div class=\"action-view\">
                                                                    <button type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#productModal\"><i class=\"fa fa-search\"></i>Quick view</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>";
                    }
                    ?>
                </div>

            </div>
            <div class="tab-pane " id="amazing-krypto">
                <div class="row tab-content-row">
                    <?php
                    $id = 1;
                    $musterproducts = array();
                    $sql1 = "SELECT * FROM `Product`WHERE ProductId > "  . $id * 1000 .  " and ProductId <  ". ($id + 1) * 1000 .  " ORDER BY RAND() LIMIT 5";
                    if($connection){
                        $result_muster = mysqli_query($connection, $sql1);
                        while($row1 = mysqli_fetch_row($result_muster)){
                            array_push($musterproducts,$row1);
                        }
                    }
                    foreach ($musterproducts as $musterproduct){
                        $productId = $musterproduct[0];
                        $productTag = $musterproduct[1];
                        $productName = $musterproduct[2];
                        $productPrice = $musterproduct[3];
                        $productDesc = $musterproduct[4];
                        echo "<div class=\"col-md-4 col-sm-4 tab-content-row\">
                                                <div class=\"single-product\">
                                                    <div class=\"single-product-img\">
                                                        <a href=\"#\">
                                                            <img  class=\"primary-img\" src=\"img/productimages/$productId.jpg\" style=\"width: 260px; height: 340px;\" alt=\"product\">
                                                            <img  class=\"secondary-img\" src=\"img/productimages/$productId.jpg\" style=\"width: 260px; height: 340px;\" alt=\"product\">
                                                        </a>
                                                    </div>
                                                    <div class=\"single-product-content\">
                                                        <div class=\"product-content-head\">
                                                            <h2 class=\"product-title\"><a href=\"product-details.php?pid=$productId\">$productName</a></h2>
                                                            <p class=\"product-price\">$productPrice</p>
                                                        </div>
                                                        <div class=\"product-bottom-action\">
                                                            <div class=\"product-action\">
                                                                <div class=\"action-button\">
                                                                    <button class=\"btn\" type=\"button\"><i class=\"fa fa-shopping-cart\"></i> <span>Add to bag</span></button>
                                                                </div>
                                                                <div class=\"action-view\">
                                                                    <button type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#productModal\"><i class=\"fa fa-search\"></i>Quick view</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>";
                    }
                    ?>
                </div>

            </div>

        </div><!-- End Tab Content -->
        <!-- Tab Bar -->

    </div>
</div>



<!-- Support area -->
<div class="support-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <!-- Single Support area -->
                <div class="single-support">
                    <div class="single-support-icon">
                        <p><i class="fa fa-bus"></i></p>
                    </div>
                    <div class="single-support-content">
                        <h2>FREE SHIPPING</h2>
                        <p>All orders are eligible for free shipping.</p>
                    </div>
                </div><!-- End Single Support area -->
            </div>
            <div class="col-md-4 col-sm-4">
                <!-- Single Support area -->
                <div class="single-support">
                    <div class="single-support-icon">
                        <p><i class="fa fa-gift"></i></p>
                    </div>
                    <div class="single-support-content">
                        <h2>FREE RETURNS</h2>
                        <p>All orders are eligible for free returns.</p>
                    </div>
                </div><!-- End Single Support area -->
            </div>
            <div class="col-md-4 col-sm-4">
                <!-- Single Support area -->
                <div class="single-support">
                    <div class="single-support-icon">
                        <i class="fa fa-fax"></i>
                    </div>
                    <div class="single-support-content">
                        <h2>FAST SHIPPING</h2>
                        <p>All orders will be shipped in 3-4 days.</p>
                    </div>
                </div><!-- End Single Support area -->
            </div>
        </div>
    </div>
</div><!-- End Support area -->
<!-- Brand Logo area -->
<div class="brand-logo-area">
    <div class="container">
        <div class="brand-logo">
            <div class="brand-logo-title">
                <h2>Logo brands</h2>
            </div>
            <div id="brands-logo" class="owl-carousel">

                <div class="single-brand-logo">
                    <a href="#">
                        <img src="img/productimages/logo1.png" alt="logo">
                    </a>
                </div>
                <div class="single-brand-logo">
                    <a href="#">
                        <img src="img/productimages/logo2.jpg" alt="logo">
                    </a>
                </div>
                <div class="single-brand-logo">
                    <a href="#">
                        <img src="img/productimages/logo3.jpg" alt="logo">
                    </a>
                </div>
                <div class="single-brand-logo">
                    <a href="#">
                        <img src="img/productimages/logo7.png" alt="logo">
                    </a>
                </div>
                <div class="single-brand-logo">
                    <a href="#">
                        <img src="img/productimages/logo4.jpg" alt="logo">
                    </a>
                </div>
                <div class="single-brand-logo">
                    <a href="#">
                        <img src="img/brand-logo/blogo2.png" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Brand Logo area -->
<!-- Footer area -->
<div class="footer-area">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <!-- Footer Left -->
                    <div class="footer-left">
                        <!-- Footer Logog -->

                        <div class="footer-payment">
                            <h2>Payments</h2>
                            <ul>
                                <li><a href="#"><img src="img/logo/payment.png" alt="payment"></a></li>
                            </ul>
                        </div>
                    </div><!-- End Footer Left -->
                </div>
                <div class="col-md-8 footer-right-col">
                    <!-- Footer Right -->
                    <div class="footer-right">
                        <div class="footer-newsletter">
                            <form action="#">
                                <h2>Newsletter</h2>
                                <input type="text" title="Sign up for our newsletter" required>
                                <button type="submit">Subscribe</button>
                            </form>
                        </div>
                        <div class="information-link">
                            <div class="single-information-link">
                                <h2>Informations</h2>
                                <ul>
                                    <li><a href="#">Sitemap</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Your Account</a></li>
                                    <li><a href="#">Advanced Search</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="single-information-link">
                                <h2>other static link</h2>
                                <ul>
                                    <li><a href="#">Product Recall</a></li>
                                    <li><a href="#">Gift Vouchers</a></li>
                                    <li><a href="#">Returns and Exchanges</a></li>
                                    <li><a href="#">Shipping Options</a></li>
                                    <li><a href="#">Help & FAQs</a></li>
                                </ul>
                            </div>
                            <div class="single-information-link">
                                <h2> My account </h2>
                                <ul>
                                    <li><a href="#">My orders</a></li>
                                    <li><a href="#">My credit slips</a></li>
                                    <li><a href="#">My addresses</a></li>
                                    <li><a href="#">My personal info</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- End Footer Left -->
                </div>
            </div>
        </div>
    </div><!-- End Footer Top -->
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <!-- Copyright -->
            <div class="copyright">
                <p>Copyright &copy; <a href="http://bootexperts.com/">BootExperts</a> All Rights Reserved.</p>
            </div>
        </div>
    </div><!-- End Footer Bottom -->
</div><!-- End Footer area -->
<!-- QUICKVIEW PRODUCT -->
<div id="quickview-wrapper">
    <!-- Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="modal-product">
                        <div class="product-images">
                            <div class="main-image images">
                                <img alt="product" src="img/product/sp2.jpg">
                            </div>
                        </div><!-- .product-images -->

                        <div class="product-info">
                            <h1>Cras neque metus</h1>
                            <div class="price-box">
                                <p class="price"><span class="special-price"><span class="amount">$155.00</span></span>
                                </p>
                            </div>
                            <a href="product-details.php" class="see-all">See all features</a>
                            <div class="quick-add-to-cart">
                                <form method="post" class="cart">
                                    <div class="add-to-box add-to-box2">
                                        <div class="add-to-cart">
                                            <div class="input-content">
                                                <label for="qty">Qty:</label>
                                                <input type="button" value="-"
                                                       onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) qty_el.value--;return false;"
                                                       class="qty-decrease">
                                                <input type="text" name="qty" id="qty" maxlength="12" value="1"
                                                       title="Qty" class="input-text qty">
                                                <input type="button" value="+"
                                                       onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++;return false;"
                                                       class="qty-increase">
                                            </div>
                                            <button class="btn" type="button"><span>Add to cart</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="quick-desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est
                                tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis
                                justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id
                                nulla.
                            </div>
                            <div class="social-sharing">
                                <div class="widget widget_socialsharing_widget">
                                    <h3 class="widget-title-modal">Share this product</h3>
                                    <ul class="social-icons">
                                        <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i
                                                        class="fa fa-facebook"></i></a></li>
                                        <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i
                                                        class="fa fa-twitter"></i></a></li>
                                        <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i
                                                        class="fa fa-pinterest"></i></a></li>
                                        <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i
                                                        class="fa fa-google-plus"></i></a></li>
                                        <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .product-info -->
                    </div><!-- .modal-product -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- END Modal -->
</div><!-- END QUICKVIEW PRODUCT -->


<!-- jquery
============================================ -->
<script src="js/vendor/jquery-1.11.3.min.js"></script>
<!-- bootstrap JS
============================================ -->
<script src="js/bootstrap.min.js"></script>
<!-- nivo slider js
============================================ -->
<script src="js/jquery.nivo.slider.pack.js"></script>
<!-- Mean Menu js
============================================ -->
<script src="js/jquery.meanmenu.min.js"></script>
<!-- wow JS
============================================ -->
<script src="js/wow.min.js"></script>
<!-- price-slider JS
============================================ -->
<script src="js/jquery-price-slider.js"></script>
<!-- Simple Lence JS
============================================ -->
<script type="text/javascript" src="js/jquery.simpleGallery.min.js"></script>
<script type="text/javascript" src="js/jquery.simpleLens.min.js"></script>
<!-- owl.carousel JS
============================================ -->
<script src="js/owl.carousel.min.js"></script>
<!-- scrollUp JS
============================================ -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- jquery Collapse JS
============================================ -->
<script src="js/jquery.collapse.js"></script>
<!-- plugins JS
============================================ -->
<script src="js/plugins.js"></script>
<!-- main JS
============================================ -->
<script src="js/main.js"></script>
</body>
</html>
