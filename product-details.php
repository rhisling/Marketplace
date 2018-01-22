<?php
    session_start();
    $productId = $_GET["pid"];
    require_once 'dbconnect.php';
    $id = $productId[0];
    $UserName_disp = $Comments_disp = $Rating_disp = $username = $comments = $rating = $dbResults = '';

if(!isset($_COOKIE[$productId])){
    $cookie = 1;
    setcookie($productId,$cookie);
}
else{
    $cookie = $_COOKIE[$productId] + 1;
    setcookie($productId,$cookie);
}
setcookie($productId."tracker",time());

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

if (isset($id)) {
    if ($id == 1) {
        $content = get_data('http://www.amazingkryptonitesruthi.us/market-place.php');
    } else if ($id == 2) {
        $content = get_data('http://www.muster.tech/market-place.php');
    } else if ($id == 3) {
        $content = get_data('http://www.faciteel.xyz/market-place.php');
    } else if ($id == 4) {
        $content = get_data('http://renup.org/product_marketplace.php');
    } else if ($id == 7) {
        $content = get_data('http://viewyourthoughts.com/market-place.php');
    } else if ($id == 8) {
        $content = get_data('http://absolutestop.com/market-place.php');
    }
}


$rows = json_decode($content, true);

if (isset($_POST['rating']) && !empty($_POST['rating'])) {

    if(isset($_SESSION['session_id'])) {
          $user = $_SESSION['session_id'];
          $username = $_SESSION['session_user'];
          $productId = $_GET['pid'];
          $rating = $_POST['rating'];
          $comments = $_POST['comments'];

    $sql = "INSERT INTO Review (UserId, ProductId, Rating, Comments, UserName)
            VALUES ('$user', '$productId', '$rating', '$comments', '$username')";

        if ($conn->query($sql) === TRUE)
        {
            echo '<script type="text/javascript"> alert("Rating and Comments Successfully added"); </script>';
            }
        else
        {
        echo '<script> alert("You can only review once. Sorry!!! :(");</script>';
        }
            $sql_disp="SELECT * FROM Review where ProductId = $productId";
            $sql_result=mysqli_query($conn,$sql_disp);
          //$sql_rows=mysqli_num_rows($sql_result);

            $dbResults = array();
            while ($sql_rows = mysqli_fetch_row($sql_result)) {
            array_push($dbResults,$sql_rows);
         }

    }
    else
        {
        echo '<script type="text/javascript"> alert("You have to Sign In to add rating/review"); </script>';
        header("Refresh:0");
            }

    //$user = $_SESSION['session_id'];
    //$username = $_SESSION['session_user'];
}

else

{

    //print_r($dbResults);
     $sql_disp="SELECT * FROM Review where ProductId = $productId";
    $sql_result1=mysqli_query($conn,$sql_disp);
    //$sql_rows=mysqli_num_rows($sql_result);


    //while($sql_rows=mysqli_fetch_array($sql_result)){
$dbResults = array();
    while ($sql_rows = mysqli_fetch_row($sql_result1)) {
            array_push($dbResults,$sql_rows);
    }

}

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
        <link href="http://fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
       <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	   <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

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
        <style>
            .rating {
                border: none;
                float: left;
            }

            .rating > input {
                display: none;
            }

            .rating > label:before {
                margin: 5px;
                font-size: 3em;
                font-family: FontAwesome;
                display: inline-block;
                content: "\f005";
            }

            fieldset, label {
                margin: 0;
                padding: 0;
            }

            .rating > .half:before {
                content: "\f089";
                position: absolute;
            }

            .rating > label {
                color: #ddd;
                float: right;
            }

            .rating > input:checked ~ label,
            .rating:not(:checked) > label:hover,
            .rating:not(:checked) > label:hover ~ label {
                color: #FFD700;
            }

            .rating > input:checked + label:hover,
            .rating > input:checked ~ label:hover,
            .rating > label:hover ~ input:checked ~ label,
            .rating > input:checked ~ label:hover ~ label {
                color: #FFED85;
            }
        </style>


        <!-- jquery
        ============================================ -->
        <script src="js/vendor/jquery-1.11.3.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $("#demo1 .stars").click(function () {
                    //alert($(this).val());
                    $.post('rating.php', {rate: $(this).val()}, function (d) {
                        if (d > 0) {
                            alert('You already rated');
                        } else {
                            alert('Thanks For Rating');
                        }
                    });
                    $(this).attr("checked");
                });
            });

        </script>
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
						<div class="col-md-4  col-sm-12">
							<!-- Header logo -->
                            <a href="index.php"><h1
                                        style="font-family: Tangerine; font-size: 75px; font-weight: bolder; color: #5e5e5e">
                                    Amalgam</h1></a>
						</div>
						<div class="col-md-4 col-sm-12">
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
		<!-- End Main Menu Area -->
		<!-- Breadcurb Area -->
		<div class="breadcurb-area">
			<div class="container">
				<ul class="breadcrumb">
					<li><a href="index.php">Home</a></li>

				</ul>
			</div>
		</div><!-- End Breadcurb Area -->
		<!-- Single Product details Area -->
		<div class="single-product-detaisl-area">
			<!-- Single Product View Area -->
            <?php
            foreach ($rows as $row){
                if ($productId == $row['ProductId']){
                    $price = $row['ProductPrice'];
                    $productId = $row["ProductId"];
                    $productTag = $row["ProductTag"];
                    $productName = $row["ProductName"];

                    $productDesc = $row["ProductDesc"];

                    echo "<div class=\"product-view-area\">
				<div class=\"container\">
					<div class=\"row\">
						<div class=\"col-md-5 col-sm-12 col-xs-12\">
							<!-- Single Product View -->
							<div class=\"single-procuct-view\">
								<!-- Simple Lence Gallery Container -->
								<div class=\"simpleLens-gallery-container\" id=\"p-view\">
									<div class=\"simpleLens-container tab-content\">
										<div class=\"tab-pane active\" id=\"p-view-1\">
											<div class=\"simpleLens-big-image-container\">
												<a class=\"simpleLens-lens-image\" data-lens-image=\"img/product/single-product/large/1.jpg\">
													<img src=\"img/productimages/$productId.jpg\" style=\"width: 600px; height: 600px;\" class=\"simpleLens-big-image\" alt=\"productd\">
												</a>
											</div>
										</div>
										<div class=\"tab-pane\" id=\"p-view-2\">
											<div class=\"simpleLens-big-image-container\">
												<a class=\"simpleLens-lens-image\" data-lens-image=\"img/product/single-product/large/2.jpg\">
													<img src=\"img/product/single-product/medium/2.jpg\" class=\"simpleLens-big-image\" alt=\"productd\">
												</a>
											</div>
										</div>
										<div class=\"tab-pane\" id=\"p-view-3\">
											<div class=\"simpleLens-big-image-container\">
												<a class=\"simpleLens-lens-image\" data-lens-image=\"img/product/single-product/large/3.jpg\">
													<img src=\"img/product/single-product/medium/3.jpg\" class=\"simpleLens-big-image\" alt=\"productd\">
												</a>
											</div>
										</div>
										<div class=\"tab-pane\" id=\"p-view-4\">
											<div class=\"simpleLens-big-image-container\">
												<a class=\"simpleLens-lens-image\" data-lens-image=\"img/product/single-product/large/4.jpg\">
													<img src=\"img/product/single-product/medium/4.jpg\" class=\"simpleLens-big-image\" alt=\"productd\">
												</a>
											</div>
										</div>
										<div class=\"tab-pane\" id=\"p-view-5\">
											<div class=\"simpleLens-big-image-container\">
												<a class=\"simpleLens-lens-image\" data-lens-image=\"img/product/single-product/large/1.jpg\">
													<img src=\"img/product/single-product/medium/1.jpg\" class=\"simpleLens-big-image\" alt=\"productd\">
												</a>
											</div>
										</div>
										<div class=\"tab-pane\" id=\"p-view-6\">
											<div class=\"simpleLens-big-image-container\">
												<a class=\"simpleLens-lens-image\" data-lens-image=\"img/product/single-product/large/2.jpg\">
													<img src=\"img/product/single-product/medium/2.jpg\" class=\"simpleLens-big-image\" alt=\"productd\">
												</a>
											</div>
										</div>
										<div class=\"tab-pane\" id=\"p-view-7\">
											<div class=\"simpleLens-big-image-container\">
												<a class=\"simpleLens-lens-image\" data-lens-image=\"img/product/single-product/large/3.jpg\">
													<img src=\"img/product/single-product/medium/3.jpg\" class=\"simpleLens-big-image\" alt=\"productd\">
												</a>
											</div>
										</div>
										<div class=\"tab-pane\" id=\"p-view-8\">
											<div class=\"simpleLens-big-image-container\">
												<a class=\"simpleLens-lens-image\" data-lens-image=\"img/product/single-product/large/4.jpg\">
													<img src=\"img/product/single-product/medium/4.jpg\" class=\"simpleLens-big-image\" alt=\"productd\">
												</a>
											</div>
										</div>
									</div>

								</div><!-- End Simple Lence Gallery Container -->
							</div><!-- End Single Product View -->
						</div>
						<div class=\"col-md-4 col-sm-8 col-xs-12\">
							<!-- Single Product Content View -->
							<form action=\"product-details.php?pid=$productId\" method=\"post\">
							<div class=\"single-product-content-view\">
								<h2>$productTag</h2>
								<div class=\"ratings\">
									 <fieldset id='demo1' class=\"rating\">
                                        <input class=\"stars\" type=\"radio\" id=\"star5\" name=\"rating\" value=\"5\"/>
                                        <label class=\"full\" for=\"star5\" title=\"Awesome - 5 stars\"></label>
                                        <input class=\"stars\" type=\"radio\" id=\"star4\" name=\"rating\" value=\"4\"/>
                                        <label class=\"full\" for=\"star4\" title=\"Pretty good - 4 stars\"></label>
                                        <input class=\"stars\" type=\"radio\" id=\"star3\" name=\"rating\" value=\"3\"/>
                                        <label class=\"full\" for=\"star3\" title=\"Meh - 3 stars\"></label>
                                        <input class=\"stars\" type=\"radio\" id=\"star2\" name=\"rating\" value=\"2\"/>
                                        <label class=\"full\" for=\"star2\" title=\"Kinda bad - 2 stars\"></label>
                                        <input class=\"stars\" type=\"radio\" id=\"star1\" name=\"rating\" value=\"1\"/>
                                        <label class=\"full\" for=\"star1\" title=\"Sucks big time - 1 star\"></label>
                                    </fieldset>
									<p class=\"rating-links\">
										<a href=\"#\">1 Review(s)</a>
									</p>
								</div>
								<div class=\"short-description\">
									<div class=\"std\">
										$productDesc
									</div>
								</div>
								<p class=\"availability in-stock\">Availability: <span>In stock</span></p>
								<div class=\"add-to-box add-to-box2\">
									<div class=\"actions-inner\">
										<ul class=\"add-to-links\">
											<li><a class=\"link-wishlist\" title=\"Add to Wishlist\" href=\"#\"><i class=\"fa fa-star\"></i>Add to Wishlist</a></li>
											<li><a class=\"link-compare\" title=\"Add to Compare\" href=\"#\"><i class=\"fa fa-pie-chart\"></i> Add to Compare</a></li>
											<li class=\"email-friend\" title=\"Email to a Friend\"><a href=\"#\"><i class=\"fa fa-envelope\"></i> Email a Friend</a></li>
										</ul>
									</div>

									<div class=\"price-box\">
										<span class=\"regular-price\">
											<span class=\"price\"><b>$price</b></span>
										</span>
									</div>
									<div class=\"add-to-cart\">
										<div class=\"input-content\">
											<label for=\"qty\">Qty:</label>
											<input type=\"button\" class=\"qty-decrease\" onclick=\"var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) qty_el.value--;return false;\" value=\"-\">
											<input type=\"text\" class=\"input-text qty\" title=\"Qty\" value=\"1\" maxlength=\"12\" id=\"qty\" name=\"qty\">
											<input type=\"button\" class=\"qty-increase\" onclick=\"var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++;return false;\" value=\"+\">
										</div>
										<button type=\"button\" class=\"btn\"><span>Add to Cart</span></button>
									</div>
								</div>
								<h3>Enter your Comments</h3>
                                <textarea id=\"comments\" style=\"width: 100%; height: 130px;\" name=\"comments\"></textarea>
                                <button type=\"submit\" class='btn-info btn' style=\"margin-top: 10px; width: 180px; height: 45px;\">Submit Review</button>
							</div><!-- End Single Product Content View -->
							</form>
						</div>
						<div class=\"col-md-3 col-sm-4 col-xs-12\">

						</div>
					</div>
				</div>
			</div>";
                }
            }

            ?>
			<!-- End Single Product View Area -->
			<!-- Single Description Tab -->
			<div class="single-product-description">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="product-description-tab">
								<!-- tab bar -->
								<ul class="nav nav-tabs" role="tablist">
									<li class="active"><a href="#product-des" data-toggle="tab">Product Description</a></li>
									<li><a href="#product-rev" data-toggle="tab">Reviews</a></li>
									<li><a href="#product-tag" data-toggle="tab">Product Tags</a></li>
								</ul>
								<!-- Tab Content -->
								<div class="tab-content">
									<div class="tab-pane active" id="product-des">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue. Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum. Quisque in arcu id dui vulputate mollis eget non arcu. Aenean et nulla purus. Mauris vel tellus non nunc mattis lobortis. </p>
									</div>
									<div class="tab-pane" id="product-rev">
										<div class="row">
											<div class="col-md-6">
												<div class="product-rev-left">
                                                <p> <?php
                                         {

                                                if(count($dbResults) >= 1)
                                                {
                                                foreach ($dbResults as $dbResult) {

                                                $UserName_disp = $dbResult[4];
                                                $Rating_disp = $dbResult[2];

                                               $Comments_disp = $dbResult[3];

                                               if($Rating_disp == 1){
                                                $stars = "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>";
                                               }
                                                if($Rating_disp == 2){
                                                $stars = "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>" . "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>";
                                               }
                                                if($Rating_disp == 3){
                                                $stars = "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>" . "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>" . "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>";
                                               }
                                                if($Rating_disp == 4){
                                                $stars = "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>" . "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>" . "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>" . "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>";
                                               }
                                                if($Rating_disp == 5){
                                                $stars = "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>" . "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>" . "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>" . "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>" . "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>";

                                               }

                                                    echo "<br>$UserName_disp : $stars - $Comments_disp <br>";
                                            }
                                  }
                                  elseif(count($dbResults) < 1)
                                  {
                                  echo "<br>No reviews present. Be the first to review!";
                                  }

                                        }
                                                ?>
                                                </p>


												</div>
											</div>

										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- End Single Description Tab -->

		</div><!-- End Single Product details Area -->
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
								<img src="img/productimages/logo4.jpg" alt="logo">
							</a>
						</div>
						<div class="single-brand-logo">
							<a href="#">
								<img src="img/productimages/logo7.png" alt="logo">
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
