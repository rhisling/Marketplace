<?php
ob_start();
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My Account || Minoan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logo/favicon.ico">

    <!-- Google Fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/html'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/html'>
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
    <link rel="stylesheet" type="text/html" href="css/jquery.simpleLens.css">
    <link rel="stylesheet" type="text/html" href="css/jquery.simpleGallery.css">
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

    <div id="fb-root"></div>
    <div id="fb-root"></div>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=1760983737537949';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->




<?php

ob_start();
session_start();

require_once 'dbconnect.php';

// it will never let you open index(login) page if session is set
//if ( isset($_SESSION['user'])!="" ) {
//header("Location: index.php");
//exit;
//}
$emailError = $invalidcred = $helloname = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ( !filter_var($_POST["email"],FILTER_VALIDATE_EMAIL) && (!empty($_POST["email"])) ) {
        $error = true;
        $emailError = "Please enter valid email address.";

    }
}

?>
<?php
//extract($_POST);
$error = false;


if( isset($_POST['submit']) ) {

    // prevent sql injections/ clear user invalid inputs

    $email = trim($_POST['email']);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);

    $pass = trim($_POST['pass']);
    $pass = strip_tags($pass);
    $pass = htmlspecialchars($pass);
    // prevent sql injections / clear user invalid inputs


    // if there's no error, continue to login
    if (!$error) {

        //$password = hash('sha256', $pass); // password hashing using SHA256

        //$res=mysql_query("SELECT first_name, last_name, mp_password FROM users WHERE mp_email='$email'");
        $sql="SELECT * FROM mp_users WHERE mp_email='$email' AND mp_password='$pass'";
        $res=mysqli_query($conn,$sql);
        if (!$res) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        $row=mysqli_fetch_array($res);
        $count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row

        if( $count == 1 ) {
            $_SESSION['user'] = $row['first_name'];
            $_SESSION['session_user'] = $row['user_name'];
            $_SESSION['session_id'] = $row['user_id'];

           /* if(isset($_SESSION['user']))
            {
                echo "Welcome, ";
                print_r($_SESSION['user']);
            }*/

            //$helloname = $row['first_name'];
            header("Location: index.php");
        } else {
            $invalidcred = "Incorrect Email or Password!";
            //header("Location: my-account.php");
        }



    }

}


?>

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
                        </div>
                        <div class="col-md-4">
                            <br><br>
                            <!-- Header logo -->
                            <div class="header-logo">
                                <a href="index.html"><h1 style="font-family: Tangerine; font-size: 75px; font-weight: bolder; color: #5e5e5e">Amalgam</h1></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Header Top bar -->

    </div><!-- End Header Area -->

    <!-- My Account Area -->
    <div class="my-account-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="my-account-title">
                        <h2>Login or Create an Account</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="new-customers customer">
                        <div class="customer-inner">
                            <div class="user-title">
                                <h2><i class="fa fa-file"></i>New Customers</h2>
                            </div>
                            <div class="user-content">
                                <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                            </div>
                        </div>
                        <div class="user-bottom fix col-md-12">

                            <div class="col-md-6">
                            <form method="get" action="adduser.php">
                                <button class="btn" type="submit" formaction="adduser.php">Create an Account</button>
                            </form>
                            </div>
                            <div class="col-md-6" style="padding-left: 5px;">
                            <form method="get" action="index.php">
                                <button class="btn" type="submit" formaction="index.php">Continue as Guest</button>
                            </form>
                            </div>
                            <div id="fb-root"></div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="resestered-customers customer">
                        <form class="form-horizontal product-form">
                            <div class="customer-inner">
                                <div class="user-title">
                                    <h2><i class="fa fa-file-text"></i>Registered  Customers</h2>
                                </div>
                                <div class="user-content">
                                    <p>If you have an account with us, please log in.</p>
                                </div>

                                <div class="account-form">
                                    <div class="form-goroup">
                                        <form method="post" action="my-account.php?go">

                                            <label>Email Address <sup>*</sup></label>
                                            <input name="email" type="text" required="required" class="form-control">
                                            <span class="error"> <?php echo $emailError;?></span><br>
                                            <label>Password <sup>*</sup></label>
                                            <input name="pass" type="password" required="required" class="form-control">
                                            <span style="color:red" class="error"> <?php echo $invalidcred;?></span><br>

                                            <p class="reauired-fields floatright"><sup>*</sup> Required Fields</p>
                                    </div>


                                </div>
                            </div>

                            <div class="user-bottom fix col-md-12">
                                <!--<div class="col-md-4">
                                <a href="#">Forgot Your Password?</a>
                                </div>-->

                                    <div class="fb-login-button col-md-4" style="padding-top: 13px;" data-max-rows="1" data-size="medium" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
                                 <!-- --><?php
/*                                    session_start();
                                    require_once __DIR__ . '/src/Facebook/autoload.php'; // download official fb sdk for php @ https://github.com/facebook/php-graph-sdk
                                    $fb = new Facebook\Facebook([
                                        'app_id' => '1760983737537949',
                                        'app_secret' => '0cc0f9179d1a89f3f3fb4a180deed52b',
                                        'default_graph_version' => 'v2.11',
                                    ]);
                                    $helper = $fb->getRedirectLoginHelper();
                                    $permissions = ['email']; // optional

                                    try {
                                        if (isset($_SESSION['facebook_access_token'])) {
                                            $accessToken = $_SESSION['facebook_access_token'];
                                        } else {
                                            $accessToken = $helper->getAccessToken();
                                        }
                                    } catch(Facebook\Exceptions\FacebookResponseException $e) {
                                        // When Graph returns an error
                                        echo 'Graph returned an error: ' . $e->getMessage();
                                        exit;
                                    } catch(Facebook\Exceptions\FacebookSDKException $e) {
                                        // When validation fails or other local issues
                                        echo 'Facebook SDK returned an error: ' . $e->getMessage();
                                        exit;
                                    }
                                    if (isset($accessToken)) {
                                        if (isset($_SESSION['facebook_access_token'])) {
                                            $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
                                        } else {
                                            // getting short-lived access token
                                            $_SESSION['facebook_access_token'] = (string) $accessToken;
                                            // OAuth 2.0 client handler
                                            $oAuth2Client = $fb->getOAuth2Client();
                                            // Exchanges a short-lived access token for a long-lived one
                                            $longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
                                            $_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;
                                            // setting default access token to be used in script
                                            $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
                                        }
                                        // redirect the user back to the same page if it has "code" GET variable
                                        if (isset($_GET['code'])) {
                                            header('Location: ./index.php');
                                        }
                                        // getting basic info about user
                                        try {
                                            $profile_request = $fb->get('/me?fields=name,first_name,last_name,email');
                                            $profile = $profile_request->getGraphNode()->asArray();
                                        } catch(Facebook\Exceptions\FacebookResponseException $e) {
                                            // When Graph returns an error
                                            echo 'Graph returned an error: ' . $e->getMessage();
                                            session_destroy();
                                            // redirecting user back to app login page
                                            header("Location: ./");
                                            exit;
                                        } catch(Facebook\Exceptions\FacebookSDKException $e) {
                                            // When validation fails or other local issues
                                            echo 'Facebook SDK returned an error: ' . $e->getMessage();
                                            exit;
                                        }

                                        // printing $profile array on the screen which holds the basic info about user
                                        print_r($profile);

                                        echo 'logged in as '.$userNode->getName();
                                        // Now you can redirect to another page and use the access token from $_SESSION['facebook_access_token']
                                    } else {

                                        // replace your website URL same as added in the developers.facebook.com/apps e.g. if you used http instead of https and you used non-www version or www version of your website then you must add the same here
                                        $loginUrl = $helper->getLoginUrl('http://www.faciteel.xyz/final/index.php', $permissions);
                                        echo '<div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>';
                                    }
                                    */?>


                                <button class="btn col-md-4" type="submit" name="submit" formmethod="post">Login</button>

                        </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- End My Account Area -->

<!-- Footer area -->
<br><br><br>
<div class="footer-area">
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