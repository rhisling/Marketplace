<?php
session_start();
$getId = $_GET["id"];




function get_data($url)
{
    $curl = curl_init();
    $timeout = 5;
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, $timeout);
    $data = curl_exec($curl);
    curl_close($curl);
    return $data;
}

if(isset($getId)) {
    if($getId == 1) {
        $content = get_data('http://www.amazingkryptonitesruthi.us/market-place.php');
    } else if($getId == 2) {
        $content = get_data('http://www.muster.tech/market-place.php');
    } else if($getId == 3) {
        $content = get_data('http://www.faciteel.xyz/market-place.php');
    }  else if($getId == 7) {
        $content = get_data('http://viewyourthoughts.com/market-place.php');
    } else if($getId == 8) {
        $content = get_data('http://absolutestop.com/market-place.php');
    }
}

$productList = json_decode($content, true);

?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Amalgam</title>
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
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

		<!-- Header Area -->
        <div class="header-area">
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
						<div class="col-md-4 col-sm-12">
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
																<a href="#"><img src="img/cart/c1.jpg" alt="cart" /></a>
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
																<a href="#"><img src="img/cart/c2.jpg" alt="cart" /></a>
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
														<button type="button" class="btn"><span>checkout</span> <i class="fa fa-long-arrow-right"></i></button>
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
        <!-- Main Menu Area -->
		<!--<div class="main-menu-area entire-main-menu-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						&lt;!&ndash; Main Menu &ndash;&gt;
						<div class="main-menu hidden-sm hidden-xs">
							<nav>
								<ul class="main-ul">
									<li class="sub-menu-li"><a href="index.html">Home<i class="fa fa-chevron-down"></i></a>
										&lt;!&ndash; Sub Menu &ndash;&gt;
										<ul class="sub-menu">
											<li><a href="index-2.html"><i class="fa fa-chevron-circle-right"></i> <span>Home Page 2</span></a></li>
											<li><a href="index-3.html"><i class="fa fa-chevron-circle-right"></i> <span>Home Page 3</span></a></li>
											<li><a href="index-4.html"><i class="fa fa-chevron-circle-right"></i> <span>Home Page 4</span></a></li>
											<li><a href="index-5.html"><i class="fa fa-chevron-circle-right"></i> <span>Home Page 5</span></a></li>
											<li><a href="index-6.html"><i class="fa fa-chevron-circle-right"></i> <span>Home Page 6</span></a></li>
										</ul>
									</li>
									<li><a href="shop.php"><span class="label-menu">Sale</span> Women<i class="fa fa-chevron-down"></i></a>
										<ul class="mega-menu-ul">
											<li>
												&lt;!&ndash; Mega Menu &ndash;&gt;
												<div class="mega-menu">
													<div class="single-mega-menu">
														<h2><a href="shop.php">Clother</a></h2>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Cocktail</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Day</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Evening</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Sports</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Sexy Dress</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Fsshion Skirt</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Evening Dress</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Children's Clothing</span></a>
													</div>
													<div class="single-mega-menu">
														<h2><a href="shop.php">Dress and skirt</a></h2>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Sports</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Run</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Sandals</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Books</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>A-line Dress</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Lacy Looks</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Shirts-T-Shirts</span></a>
													</div>
													<div class="single-mega-menu">
														<h2><a href="shop.php">shoes</a></h2>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>blazers</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>table</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>coats</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>kids</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Sweater</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Coat</span></a>
													</div>
													<div class="single-mega-menu banner-add">
														<a href="shop.php">
															<img src="img/cart/menu-img.png" alt="img">
														</a>
													</div>
												</div>
											</li>
										</ul>
									</li>
									<li class="small-megamenu-li"><a href="shop.php">Men<i class="fa fa-chevron-down"></i></a>
										<ul class="mega-menu-ul mega-menu-ul-two">
											<li>
												&lt;!&ndash;Small Mega Menu &ndash;&gt;
												<div class="mega-menu mega-menu-two">
													<div class="single-mega-menu">
														<h2><a href="shop.php">Bages</a></h2>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Bootes Bages</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Blazers</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Mermaid</span></a>
													</div>
													<div class="single-mega-menu">
														<h2><a href="shop.php">Clothing</a></h2>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>coats</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>T-shirt</span></a>
													</div>
													<div class="single-mega-menu">
														<h2><a href="shop.php">lingerie</a></h2>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>brands</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>furniture</span></a>
													</div>
												</div>
											</li>
										</ul>
									</li>
									<li><a href="shop.php">Handbags<i class="fa fa-chevron-down"></i></a>
										<ul class="mega-menu-ul">
											<li>
												&lt;!&ndash; Mega Menu &ndash;&gt;
												<div class="mega-menu">
													<div class="single-mega-menu">
														<h2><a href="shop.php">Footwear Man</a></h2>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Gold Rigng</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>paltinum Rings</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Silver Ring</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Tungsten Ring</span></a>
													</div>
													<div class="single-mega-menu">
														<h2><a href="shop.php">Footwear Womens</a></h2>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Bands Gold</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>platinum Bands</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Silver Bands</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Tungsten Bands</span></a>
													</div>
													<div class="single-mega-menu">
														<h2><a href="shop.php">Rings</a></h2>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Platinum Bracelets</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Gold Ring</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>silver ring</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Diamond Bracelets</span></a>
													</div>
													<div class="single-mega-menu">
														<h2><a href="shop.php">Band</a></h2>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Platinum Necklaces</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Gold Ring</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Silver Ring</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Sunglasses</span></a>
													</div>
												</div>
											</li>
										</ul>
									</li>
									<li><a href="shop.php">Shoes<i class="fa fa-chevron-down"></i></a>
										<ul class="mega-menu-ul">
											<li>
												&lt;!&ndash; Mega Menu &ndash;&gt;
												<div class="mega-menu">
													<div class="single-mega-menu">
														<h2><a href="shop.php">Rings</a></h2>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Coats & jackets</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>blazers</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>raincoats</span></a>
													</div>
													<div class="single-mega-menu">
														<h2><a href="shop.php">Dresses</a></h2>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Ankle Boots</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>footwear</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>clog sandals</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>combat boots</span></a>
													</div>
													<div class="single-mega-menu">
														<h2><a href="shop.php">Accessories</a></h2>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>bootees Bags</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>blazers</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>jackets</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>kids</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>shoes</span></a>
													</div>
													<div class="single-mega-menu">
														<h2><a href="shop.php">Top</a></h2>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>briefs</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>camis</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>nigthwear</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>kids</span></a>
														<a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>shapewer</span></a>
													</div>
												</div>
											</li>
										</ul>
									</li>
									<li class="sub-menu-li"><a href="#" class="new-arrivals">Pages<i class="fa fa-chevron-down"></i></a>
										&lt;!&ndash; Sub Menu &ndash;&gt;
										<ul class="sub-menu">
											<li><a href="blog.html"><i class="fa fa-chevron-circle-right"></i> <span>Blog</span></a></li>
											<li><a href="blog-details.html"><i class="fa fa-chevron-circle-right"></i> <span>Blog Details</span></a></li>
											<li><a href="cart.html"><i class="fa fa-chevron-circle-right"></i> <span>Cart</span></a></li>
											<li><a href="checkout.html"><i class="fa fa-chevron-circle-right"></i> <span>Checkout</span></a></li>
											<li><a href="contact.html"><i class="fa fa-chevron-circle-right"></i> <span>Contact</span></a></li>
											<li><a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Shop</span></a></li>
											<li><a href="shop-list.html"><i class="fa fa-chevron-circle-right"></i> <span>Shop List</span></a></li>
											<li><a href="product-details.html"><i class="fa fa-chevron-circle-right"></i> <span>Product Details</span></a></li>
											<li><a href="my-account.html"><i class="fa fa-chevron-circle-right"></i> <span>My Account</span></a></li>
											<li><a href="wishlist.html"><i class="fa fa-chevron-circle-right"></i> <span>Wishlist</span></a></li>
										</ul>
									</li>
								</ul>
							</nav>
						</div>&lt;!&ndash; End Main Menu &ndash;&gt;
						&lt;!&ndash; Start Mobile Menu &ndash;&gt;
						<div class="mobile-menu hidden-md hidden-lg">
							<nav>
								<ul>
									<li class=""><a href="index.html">Home</a>
										<ul class="sub-menu">
											<li><a href="index-2.html">Home Page 2</a></li>
											<li><a href="index-3.html">Home Page 3</a></li>
											<li><a href="index-4.html">Home Page 4</a></li>
											<li><a href="index-5.html">Home Page 5</a></li>
											<li><a href="index-6.html">Home Page 6</a></li>
										</ul>
									</li>
									<li><a href="shop.php">Women</a>
										<ul class="">
											<li><a href="">Clother</a>
												<ul>
													<li><a href="#">Cocktail</a></li>
													<li><a href="#">Day</a></li>
													<li><a href="#">Evening</a></li>
													<li><a href="#">Sports</a></li>
													<li><a href="#">Sexy Dress</a></li>
													<li><a href="#">Fsshion Skirt</a></li>
													<li><a href="#">Evening Dress</a></li>
													<li><a href="#">Children's Clothing</a></li>
												</ul>
											</li>
											<li><a href="#">Dress and skirt</a>
												<ul>
													<li><a href="#">Sports</a></li>
													<li><a href="#">Run</a></li>
													<li><a href="#">Sandals</a></li>
													<li><a href="#">Books</a></li>
													<li><a href="#">A-line Dress</a></li>
													<li><a href="#">Lacy Looks</a></li>
													<li><a href="#">Shirts-T-Shirts</a></li>
												</ul>
											</li>
											<li><a href="#">shoes</a>
												<ul>
													<li><a href="#">blazers</a></li>
													<li><a href="#">table</a></li>
													<li><a href="#">coats</a></li>
													<li><a href="#">Sports</a></li>
													<li><a href="#">kids</a></li>
													<li><a href="#">Sweater</a></li>
													<li><a href="#">Coat</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li class=""><a href="shop.php">Men</a>
										<ul class="">
											<li><a href="#">Bages</a>
												<ul>
													<li><a href="#">Bootes Bages</a></li>
													<li><a href="#">Blazers</a></li>
													<li><a href="#">Mermaid</a></li>
												</ul>
											</li>
											<li><a href="#">Clothing</a>
												<ul>
													<li><a href="#">coats</a></li>
													<li><a href="#">T-shirt</a></li>
												</ul>
											</li>
											<li><a href="#">lingerie</a>
												<ul>
													<li><a href="#">brands</a></li>
													<li><a href="#">furniture</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li><a href="shop.php">Handbags</a>
										<ul class="">
											<li><a href="#">Footwear Man</a>
												<ul>
													<li><a href="#">Gold Rigng</a></li>
													<li><a href="#">paltinum Rings</a></li>
													<li><a href="#">Silver Ring</a></li>
													<li><a href="#">Tungsten Ring</a></li>
												</ul>
											</li>
											<li><a href="#">Footwear Womens</a>
												<ul>
													<li><a href="#">Brand Gold</a></li>
													<li><a href="#">paltinum Rings</a></li>
													<li><a href="#">Silver Ring</a></li>
													<li><a href="#">Tungsten Ring</a></li>
												</ul>
											</li>
											<li><a href="#">Band</a>
												<ul>
													<li><a href="#">Platinum Necklaces</a></li>
													<li><a href="#">Gold Ring</a></li>
													<li><a href="#">silver ring</a></li>
													<li><a href="#">Diamond Bracelets</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li><a href="shop.php">Shoes</a>
										<ul class="">
											<li><a href="#">Rings</a>
												<ul>
													<li><a href="#">Coats & jackets</a></li>
													<li><a href="#">blazers</a></li>
													<li><a href="#">raincoats</a></li>
												</ul>
											</li>
											<li><a href="#">Dresses</a>
												<ul>
													<li><a href="#">footwear</a></li>
													<li><a href="#">blazers</a></li>
													<li><a href="#">clog sandals</a></li>
													<li><a href="#">combat boots</a></li>
												</ul>
											</li>
											<li><a href="#">Accessories</a>
												<ul>
													<li><a href="#">bootees Bags</a></li>
													<li><a href="#">blazers</a></li>
													<li><a href="#">jackets</a></li>
													<li><a href="#">kids</a></li>
													<li><a href="#">shoes</a></li>
												</ul>
											</li>
											<li><a href="#">Top</a>
												<ul>
													<li><a href="#">briefs</a></li>
													<li><a href="#">camis</a></li>
													<li><a href="#">nigthwear</a></li>
													<li><a href="#">kids</a></li>
													<li><a href="#">shapewer</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li class=""><a href="">Pages</a>
										<ul class="">
											<li><a href="blog.html">Blog</a></li>
											<li><a href="blog-details.html">Blog Details</a></li>
											<li><a href="cart.html">Cart</a></li>
											<li><a href="checkout.html">Checkout</a></li>
											<li><a href="contact.html">Contact</a></li>
											<li><a href="shop.php">Shop</a></li>
											<li><a href="shop-list.html">Shop List</a></li>
											<li><a href="product-details.html">Product Details</a></li>
											<li><a href="my-account.html">My Account</a></li>
											<li><a href="wishlist.html">Wishlist</a></li>
										</ul>
									</li>
								</ul>
							</nav>
						</div>&lt;!&ndash; End Mobile Menu &ndash;&gt;
					</div>
				</div>
			</div>
		</div>--><!-- End Main Menu Area -->
		<!-- Breadcurb Area -->
		<div class="breadcurb-area">
			<div class="container">
				<ul class="breadcrumb">
					<li><a href="index.php">Home</a></li>

				</ul>
			</div>
		</div><!-- End Breadcurb Area -->
		<!-- Shop Product Area -->
		<div class="shop-product-area">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-12">
						<!-- Shop Product Left -->
						<div class="shop-product-left">
							<!-- Shop Layout Area -->
							<div class="shop-layout-area">
								<div class="layout-title">
									<h2>Category</h2>
								</div>
								<div class="layout-list">
									<ul>
										<li><a href="#"><i class="fa fa-plus-square-o"></i>Mobile Apps <span>(15)</span></a></li>
										<li><a href="#"><i class="fa fa-plus-square-o"></i>Photography <span>(15)</span></a></li>
										<li><a href="#"><i class="fa fa-plus-square-o"></i> Comic Books<span>(15)</span></a></li>
										<li><a href="#"><i class="fa fa-plus-square-o"></i>Women Fashion Dresses <span>(15)</span></a></li>
										<li><a href="#"><i class="fa fa-plus-square-o"></i>Order your Meal <span>(14)</span></a></li>
                    <li><a href="#"><i class="fa fa-plus-square-o"></i> Party Wear Dresses <span>(15)</span></a></li>
										<li><a href="#"><i class="fa fa-plus-square-o"></i>Photography <span>(15)</span></a></li>


									</ul>
								</div>
							</div><!-- End Shop Layout Area -->
							<!-- Price Filter Area -->
							<div class="price-filter-area shop-layout-area">
								<div class="price-filter">
									<div class="layout-title">
										<h2>Price</h2>
									</div>
									<div id="slider-range"></div>
									<p>
									  <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
									</p>
									<button class="btn btn-default">Filter</button>
								</div>
							</div><!-- End Price Filter Area -->

						</div><!-- End Shop Product Left -->
					</div>
                    <div class="tab-bar">
                        <div class="tab-bar-inner">
                            <ul class="nav nav-tabs" role="tablist">
                                <li <?php if(isset($getId) && $getId == 3)  echo 'class="active"';?>><a href="shop.php?id=3" >Vladyno Apps</a></li>
                                <li <?php if(isset($getId) && $getId == 2)  echo 'class="active"';?>><a href="shop.php?id=2" >Muster Comic Collection</a></li>
                                <li <?php if(isset($getId) && $getId == 8)  echo 'class="active"';?>><a href="shop.php?id=8" >Fashion Collection</a></li>
                                <li <?php if(isset($getId) && $getId == 7)  echo 'class="active"';?>><a href="shop.php?id=7" >Potrait cards</a></li>
                                <li <?php if(isset($getId) && $getId == 1)  echo 'class="active"';?>><a href="shop.php?id=1" >Amazing Kryptonite</a></li>

                            </ul>
                        </div>
                    </div>
					<div class="col-md-9 col-sm-12">
						<!-- Shop Product Right -->
						<div class="shop-product-right">
							<div class="product-tab-area">
								<!-- Tab Bar -->
								<div class="tab-bar">
									<div class="tab-bar-inner">
										<ul class="nav nav-tabs" role="tablist">
											<li class="active"><a href="#shop-product" data-toggle="tab"><i class="fa fa-th-large"></i>Grid</a></li>

										</ul>
									</div>
									<div class="toolbar">
										<div class="sorter">
											<div class="sort-by">
												<label>Sort By</label>
												<select>
													<option value="position">Position</option>
													<option value="name">Name</option>
													<option value="price">Price</option>
												</select>
												<a href="#"><i class="fa fa-long-arrow-up"></i></a>
											</div>
										</div>
										<div class="pager-list">
											<div class="limiter">
												<label>Show</label>
												<select>
													<option value="9">12</option>
													<option value="12">15</option>
													<option value="24">18</option>
													<option value="36">36</option>
												</select>
												per page
											</div>
										</div>
									</div>
								</div><!-- End Tab Bar -->
								<!-- Tab Content -->
								<div class="tab-content ">
									<div class="tab-pane active" id="shop-product">
                                        <div class="row tab-content-row">
                                            <!-- Start Single Product Column -->
                                            <?php
                                            foreach ($productList as $row){
                                                $productId = $row["ProductId"];
                                                $productTag = $row["ProductTag"];
                                                $productName = $row["ProductName"];
                                                $productPrice = $row["ProductPrice"];
                                                $productDesc = $row["ProductDesc"];
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
                                            <!-- End Single Product Column -->
                                        </div>
									</div>
									<div class="tab-pane" id="shop-list">
										<!-- Single Shop -->
										<div class="single-shop single-product">
											<div class="row">
												<div class="col-md-4 col-sm-4">
													<div class="single-product-img">
														<a href="#">
															<img class="primary-img" src="img/product/sp9.jpg" alt="product">
															<img class="secondary-img" src="img/product/sp5.jpg" alt="product">
														</a>
													</div>
												</div>
												<div class="col-md-8 col-sm-8">
													<div class="single-shop-content">
														<div class="shop-content-head fix">
															<h1><a href="#">Fusce aliquam</a></h1>
														</div>
														<div class="shop-content-bottom">
															<div class="product-details">
																<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere </p>
															</div>
															<div class="product-price">
																<p class="product-price">$155.00</p>
															</div>
														</div>
														<div class="product-bottom-action">
															<div class="product-action">
																<div class="action-button">
																	<button class="btn" type="button"><i class="fa fa-shopping-cart"></i> <span>Add to bag</span></button>
																</div>
																<div class="action-view">
																	<button type="button" class="btn" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i>Quick view</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><!-- End Single Shop -->
										<!-- Single Shop -->
										<div class="single-shop single-product">
											<div class="row">
												<div class="col-md-4 col-sm-4">
													<div class="single-product-img">
														<a href="#">
															<img class="primary-img" src="img/product/sp3.jpg" alt="product">
															<img class="secondary-img" src="img/product/sp5.jpg" alt="product">
														</a>
													</div>
												</div>
												<div class="col-md-8 col-sm-8">
													<div class="single-shop-content">
														<div class="shop-content-head fix">
															<h1><a href="#">Fusce aliquam</a></h1>
														</div>
														<div class="shop-content-bottom">
															<div class="product-details">
																<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere </p>
															</div>
															<div class="product-price">
																<p class="product-price"><span>$205.00</span>$155.00</p>
															</div>
														</div>
														<div class="product-bottom-action">
															<div class="product-action">
																<div class="action-button">
																	<button class="btn" type="button"><i class="fa fa-shopping-cart"></i> <span>Add to bag</span></button>
																</div>
																<div class="action-view">
																	<button type="button" class="btn" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i>Quick view</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><!-- End Single Shop -->
										<!-- Single Shop -->
										<div class="single-shop single-product">
											<div class="row">
												<div class="col-md-4 col-sm-4">
													<div class="single-product-img">
														<a href="#">
															<img class="primary-img" src="img/product/sp1.jpg" alt="product">
															<img class="secondary-img" src="img/product/sp5.jpg" alt="product">
														</a>
													</div>
												</div>
												<div class="col-md-8 col-sm-8">
													<div class="single-shop-content">
														<div class="shop-content-head fix">
															<h1><a href="#">Fusce aliquam</a></h1>
														</div>
														<div class="shop-content-bottom">
															<div class="product-details">
																<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere </p>
															</div>
															<div class="product-price">
																<p class="product-price"><span>$205.00</span>$155.00</p>
															</div>
														</div>
														<div class="product-bottom-action">
															<div class="product-action">
																<div class="action-button">
																	<button class="btn" type="button"><i class="fa fa-shopping-cart"></i> <span>Add to bag</span></button>
																</div>
																<div class="action-view">
																	<button type="button" class="btn" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i>Quick view</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><!-- End Single Shop -->
										<!-- Single Shop -->
										<div class="single-shop single-product">
											<div class="row">
												<div class="col-md-4 col-sm-4">
													<div class="single-product-img">
														<a href="#">
															<img class="primary-img" src="img/product/sp2.jpg" alt="product">
															<img class="secondary-img" src="img/product/sp5.jpg" alt="product">
														</a>
													</div>
												</div>
												<div class="col-md-8 col-sm-8">
													<div class="single-shop-content">
														<div class="shop-content-head fix">
															<h1><a href="#">Fusce aliquam</a></h1>
														</div>
														<div class="shop-content-bottom">
															<div class="product-details">
																<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere </p>
															</div>
															<div class="product-price">
																<p class="product-price"><span>$205.00</span>$155.00</p>
															</div>
														</div>
														<div class="product-bottom-action">
															<div class="product-action">
																<div class="action-button">
																	<button class="btn" type="button"><i class="fa fa-shopping-cart"></i> <span>Add to bag</span></button>
																</div>
																<div class="action-view">
																	<button type="button" class="btn" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i>Quick view</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><!-- End Single Shop -->
										<!-- Single Shop -->
										<div class="single-shop single-product">
											<div class="row">
												<div class="col-md-4 col-sm-4">
													<div class="single-product-img">
														<a href="#">
															<img class="primary-img" src="img/product/sp12.jpg" alt="product">
															<img class="secondary-img" src="img/product/sp15.jpg" alt="product">
														</a>
													</div>
												</div>
												<div class="col-md-8 col-sm-8">
													<div class="single-shop-content">
														<div class="shop-content-head fix">
															<h1><a href="#">Fusce aliquam</a></h1>
														</div>
														<div class="shop-content-bottom">
															<div class="product-details">
																<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere </p>
															</div>
															<div class="product-price">
																<p class="product-price"><span>$205.00</span>$155.00</p>
															</div>
														</div>
														<div class="product-bottom-action">
															<div class="product-action">
																<div class="action-button">
																	<button class="btn" type="button"><i class="fa fa-shopping-cart"></i> <span>Add to bag</span></button>
																</div>
																<div class="action-view">
																	<button type="button" class="btn" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i>Quick view</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><!-- End Single Shop -->
									</div>
								</div><!-- End Tab Content -->
								<!-- Tab Bar -->
								<div class="tab-bar">
									<div class="toolbar">
										<div class="sorter">
											<div class="sort-by">
												<label>Sort By</label>
												<select>
													<option value="position">Position</option>
													<option value="name">Name</option>
													<option value="price">Price</option>
												</select>
												<a href="#"><i class="fa fa-long-arrow-up"></i></a>
											</div>
										</div>
										<div class="pages">
											<strong>Page:</strong>
											<ol>
												<li class="current">1</li>
												<li><a href="#">2</a></li>
												<li><a title="Next" href="#"><i class="fa fa-arrow-right"></i></a></li>
											</ol>
										</div>
									</div>
								</div><!-- End Tab Bar -->
							</div>
						</div><!-- End Shop Product Left -->
					</div>
				</div>
			</div>
		</div><!-- End Shop Product Area -->
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
								  <img src="img/productimages/logo7.png" alt="logo">
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
								  <img src="img/productimages/logo4.jpg" alt="logo">
							</a>
						</div>
						<div class="single-brand-logo">
							<a href="#">
								<img src="img/brand-logo/blogo1.png" alt="logo">
							</a>
						</div>
						<div class="single-brand-logo">
							<a href="#">
								<img src="img/brand-logo/blogo5.png" alt="logo">
							</a>
						</div>
						<div class="single-brand-logo">
							<a href="#">
								<img src="img/brand-logo/blogo3.png" alt="logo">
							</a>
						</div>
						<div class="single-brand-logo">
							<a href="#">
								<img src="img/brand-logo/blogo4.png" alt="logo">
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
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
										<p class="price"><span class="special-price"><span class="amount">$155.00</span></span></p>
									</div>
									<a href="product-details.php" class="see-all">See all features</a>
									<div class="quick-add-to-cart">
										<form method="post" class="cart">
											<div class="add-to-box add-to-box2">
											<div class="add-to-cart">
												<div class="input-content">
													<label for="qty">Qty:</label>
													<input type="button" value="-" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) qty_el.value--;return false;" class="qty-decrease">
													<input type="text" name="qty" id="qty" maxlength="12" value="1" title="Qty" class="input-text qty">
													<input type="button" value="+" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++;return false;" class="qty-increase">
												</div>
												<button class="btn" type="button"><span>Add to cart</span></button>
											</div>
										</div>
										</form>
									</div>
									<div class="quick-desc">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.
									</div>
									<div class="social-sharing">
										<div class="widget widget_socialsharing_widget">
											<h3 class="widget-title-modal">Share this product</h3>
											<ul class="social-icons">
												<li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
												<li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
												<li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
												<li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
												<li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
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
