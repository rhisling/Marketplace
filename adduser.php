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
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <?php
 require_once 'dbconnect.php';

  $dupErr = $firstnameErr = $lastnameErr = $emailErr = $firstname = $lastname = $email = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $firstname = test_input($_POST["firstname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
      $firstnameErr = "Only letters and white space allowed";
    }

    $lastname = test_input($_POST["lastname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
      $lastnameErr = "Only letters and white space allowed"; 
    }

      $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if ( !filter_var($_POST["email"],FILTER_VALIDATE_EMAIL) && (!empty($_POST["email"])) ) {
    $error = true;
    $emailErr = "Enter valid email address.";
    }

    $pass = test_input($_POST["pass"]);
  }
 
 function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
 
 $insertquery = '';
 
if(isset($_POST['submit'])!='')
{
   if ($emailErr != '')
     {
     echo "please correct the errors in the form";
     }
   else
     {
        $_POST=array(); 

if(isset($email)){
$sql_dupchk = "SELECT * FROM mp_users where mp_email='$email'";
    $result=mysqli_query($conn,$sql_dupchk); 
    //-create  while loop and loop through result set 
    //$rowcount = mysqli_num_rows($result);
if(mysqli_num_rows($result)>=1)
{
$dupErr = "User already registered!";
}
else
{
    $fullname = "'$firstname $lastname'";
     $insertquery = "INSERT INTO mp_users (first_name, last_name, user_name, mp_email, mp_password) VALUES ('$firstname','$lastname', $fullname, '$email', '$pass')";

     if ($conn->query($insertquery) === TRUE) {
     header("Location: my-account.php");
     exit();
     } 
     else 
     {
    echo "Error: " . $insertquery . "<br>" . $conn->error;
     }
}
     }
}
}
$conn->close();
   ?>
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
                            </div>
                             <div class="col-md-4">
                    <!-- Header logo -->
                    <div class="header-bottom">
                    <div class="header-logo">
                        <a href="index.php"><h1 style="font-family: Tangerine; font-size: 65px; font-weight: bolder; color: #5e5e5e">Amalgam</h1></a>
                    </div>
                    </div>
                </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="header-top-right">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Header Top bar -->
        
        <!-- My Account Area -->
        <div class="my-account-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="my-account-title">
                            <h2>Create an Account</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="new-customers customer">
                        <form class="form-horizontal product-form">
                            <div class="customer-inner">
                                <div class="user-title">
                                    <h2><i class="fa fa-file"></i>New Customers</h2>
                                </div>
                              
                                <div class="account-form">

                                    <div class="form-goroup">
                                        <form method="post" action="adduser.php">
                                          <label>First Name <sup>*</sup></label>
                                          <input name="firstname" type="text" required="required" class="form-control">
                                          <label>Last Name <sup>*</sup></label>
                                          <input name="lastname" type="text" required="required" class="form-control">
                                          <label>Email Address <sup>*</sup></label>
                                          <input name="email" type="text" required="required" class="form-control">
                                          <span class="error"> <?php echo $emailErr;?></span><br>
                                          <label>Password <sup>*</sup></label>
                                          <input name="pass" type="password" required="required" class="form-control">
                                          
                                            <div class="user-content">
                                            <span style="color:red" class="error"> <?php echo $dupErr;?></span><br>
                                           Existing User? <a href="my-account.php">Sign In</a>
                                            <p class="reauired-fields floatright"><sup>*</sup> Required Fields</p><br>
                                            </div>
                                    </div>
                                </div>
                            </div>    
                                           <div class="user-bottom fix">
                                           By creating an account you agree to Amalgam's Terms and Conditions.
                                           <button name="submit" class="btn" type="submit" formmethod="post">Submit</button>
                                        </form>
                                        </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End My Account Area -->
<br>
       
        <!-- Footer area -->
        <div class="footer-area">
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <!-- Copyright -->
                    <div class="copyright">
                        <p>Copyright &copy; <a href="http://bootexperts.com/">Amalgam</a> All Rights Reserved.</p>
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