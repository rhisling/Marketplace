<?php

session_start();
function array_key_lookup($haystack, $needle)
{
    $matches = preg_grep("/$needle/", array_keys($haystack));
    return array_intersect_key($haystack, array_flip($matches));
}

$lvl = $_COOKIE;
$lastvisitedproducts = array();
$lastvisitedCompanies = array();
$filtered_lvl = array_key_lookup($lvl, "^[0-9]+tracker$");

//print_r($filtered_lvl);

arsort($filtered_lvl);
$lvl5 = array_slice($filtered_lvl, 0, 5);

foreach ($lvl5 as $key => $value) {
    // echo "$key\n";
    $var = substr($key, 0, 4);
    array_push($lastvisitedproducts, $var);
}


foreach ($lvl5 as $key => $value) {
    // echo "$key\n";
    $var = substr($key, 0, 1);
    array_push($lastvisitedCompanies, $var);
}

//print_r($lastvisitedproducts);


$lastvisitedCompanies = array_unique($lastvisitedCompanies);

//print_r($lvl5);



//print_r($lastvisitedCompanies);


/*if(count($lastvisitedproducts)>0){
    if ($connection ) {
            // mysqli_query($connection,"INSERT INTO `Credentials`( `Username`, `Password`) VALUES ('aravi','aravi')");
        foreach($lastvisitedproducts as $lastvisitedproduct){
            $result = mysqli_query($connection, "Select * from `Product`  where ProductId = '$lastvisitedproduct'");
            $row = mysqli_fetch_row($result);
            array_push($dbResults,$row);
            //echo "foreach";
        }
        // $row = mysqli_fetch_row($result);
    }
    else{
        echo  mysqli_connect_errno();
    }
}*/


?>

<!doctype html>
<html lang="en">
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
                            <?php if (isset($_SESSION['user'])) { ?>
                                <p>
                                    <a style="color: #696969;font-size: 12px; padding-bottom: 5px;padding-left: 10px; text-transform: capitalize;"
                                       class="header-link" href="logout.php?logout" style="text-decoration:none"><i
                                                class="fa fa-sign-in"></i><span class="hidden-xs text-uppercase"
                                                                                style="padding-left: 3px;">  Sign Out</span></a>
                                    <?php echo "Hello, "; ?><?php print_r($_SESSION['user']); ?>!</p>
                            <?php } else { ?>
                                <p>
                                    <a style="color: #696969;font-size: 12px; padding-bottom: 5px;padding-left: 10px; text-transform: capitalize;"
                                       class="header-link" href="my-account.php" style="text-decoration:none"><i
                                                class="fa fa-user"></i><span class="hidden-xs text-uppercase"
                                                                             style="padding-left: 3px;">Sign In</span>
                                    </a>Hello, User!</p>
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
                                                */ ?>
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

<div class="container">
    <div class="col-md-6">
        <h3> Tracking History </h3>
        <hr>
        <?php
        /*if (count($lastvisitedCompanies) > 0) {
            foreach ($lastvisitedCompanies as $lastvisitedCompany) {
                if ($lastvisitedCompany == 2) {
                    echo "<div class=\"alert alert-info\" role=\"alert\">
  <strong>  May the force be with you! </strong> You seem to be interested in Comics. Please check out <a href='http://www.muster.tech'>Muster tech</a>
</div>";
                } else if ($lastvisitedCompany == 3) {
                    echo "<div class=\"alert alert-info\" role=\"alert\">
  <strong>Well, he makes pretty decent apps</strong> And you seem to like Apps. Please check out <a href='http://www.faciteel.xyz'>Faciteel xyz</a>
</div>";
                } else if ($lastvisitedCompany == 1) {
                    echo "<div class=\"alert alert-info\" role=\"alert\">
  <strong>You seem to be health conscious!</strong>  Please check out <a href='http://www.amazingkryptonitesruthi.us/'>Amazing Kryptonite</a> 
</div>";
                } else if ($lastvisitedCompany == 7) {
                    echo "<div class=\"alert alert-info\" role=\"alert\">
  <strong>Do you want more portrait photographs? </strong>  Please check out <a href='http://viewyourthoughts.com'>Blizzard Studio</a> 
</div>";
                } else if ($lastvisitedCompany == 8) {
                    echo "<div class=\"alert alert-info\" role=\"alert\">
  <strong>You seem to have a penchant for Apparels!</strong>  Please check out <a href='http://absolutestop.com/'>Absolute Stop</a>, a one stop shop for all your needs 
</div>";
                }

            }

        }
        else{

            echo "<div class=\"alert alert-warning\" role=\"alert\">
  <strong>Please check out our products!</strong> You'll definitely love it :)
</div> ";
        }*/


        foreach ($lvl5 as $key => $value){
            if(substr($key,0,1)==2){
                $productId = substr($key,0,4);
                $date = date("D M j G:i:s T Y", $value);
                echo "<div class=\"alert alert-info\" role=\"alert\">
  <strong>  May the force be with you! </strong> You seem to be interested in Comics. And you have visited <a href='product-details.php?pid=$productId'>this product at $date</a>.Please check out <a href='http://www.muster.tech'>Muster tech</a>
</div>";
            }
            if(substr($key,0,1)==3){
                $productId = substr($key,0,4);
                $date = date("D M j G:i:s T Y", $value);
                echo "<div class=\"alert alert-info\" role=\"alert\">
  <strong>Well, he makes pretty decent apps</strong> And you seem to like Apps. And you have visited <a href='product-details.php?pid=$productId'>this product at $date</a>. Please check out <a href='http://www.faciteel.xyz'>Faciteel xyz</a>
</div>";
            }
            if(substr($key,0,1)==1){
                $productId = substr($key,0,4);
                $date = date("D M j G:i:s T Y", $value);
                echo "<div class=\"alert alert-info\" role=\"alert\">
  <strong>You seem to be health conscious!</strong> And you have visited <a href='product-details.php?pid=$productId'>this product at $date</a>. Please check out <a href='http://www.amazingkryptonitesruthi.us/'>Amazing Kryptonite</a> 
</div>";
            }
            if(substr($key,0,1)==7){
                $productId = substr($key,0,4);
                $date = date("D M j G:i:s T Y", $value);
                echo "<div class=\"alert alert-info\" role=\"alert\">
  <strong>Do you want more portrait photographs? </strong>And you have visited <a href='product-details.php?pid=$productId'>this product at $date</a>.  Please check out <a href='http://viewyourthoughts.com'>Blizzard Studio</a> 
</div>";
            }
            if(substr($key,0,1)==8){
                $productId = substr($key,0,4);
                $date = date("D M j G:i:s T Y", $value);
                echo "<div class=\"alert alert-info\" role=\"alert\">
  <strong>You seem to have a penchant for Apparels!</strong>And you have visited <a href='product-details.php?pid=$productId'>this product at $date</a>.  Please check out <a href='http://absolutestop.com/'>Absolute Stop</a>, a one stop shop for all your needs 
</div>";
            }
        }
        ?>

    </div>
</div>


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