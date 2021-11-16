<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>UnitedListing</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">

            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="images/logo.png" alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="index.html">Home</a> </li>
                                        <li> <a href="about.html">About</a> </li>
                                        <li> <a href="contact.php">Contact</a> </li>
                                        <li><a href="brand.html">Brand</a></li>
                                        <li><a href="signIn.php">Sign In</a></li>
                                        <li><a href="seller_registration.php">Become a Seller</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-6">
                        <div class="location_icon_bottum">
                            <ul>
                                <li><img src="icon/call.png" />(+91)9876543109</li>
                                <li><img src="icon/email.png" />unilists@gmail.com</li>
                                <li><img src="icon/loc.png" />Mumbai</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- end header -->
    <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Sign Up</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <form method="post">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="First Name" type="text" name="FName" id="FName" required>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Last Name" type="text" name="LName" id="LName" required>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" placeholder="Username" type="text" name="Username" id="Username" required>
                            </div>
                            <div class=" col-xl-6 col-lg-6 col-md-6 col-sm-6 product-dropdown">
                                <select class="form-control" name="Gender" id="Gender" required>
                                    <option selected disabled hidden>Gender</option>
                                    <option value="Female">Female</option>
                                    <option value="Male">Male</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                            

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Phone" type="number" pattern="[0-9]{10}" name="Phone"  id="Phone" required>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" placeholder="Email-ID" type="text" name="Email" id="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="A form with an email field that that must be in the following order: characters@characters.domain (characters followed by an @ sign, followed by more characters, and then a "." After the "." sign, add at least 2 letters from a to z:" size="30"required="">
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" placeholder="Password" id="password" type="text" name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" placeholder="Confirm Password" id="confirm_password" type="text" name="confirm_password" required>
                                
                            </div>
                            
                            <div class=" col-md-12">
                                <button class="send">Sign Up</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->

    <!-- footer -->
    <footer>
        <div id="contact" class="footer">
            <div class="container">
                <div class="row pdn-top-30">
                    <div class="col-md-12 ">
                        <div class="footer-box">
                            <div class="headinga">
                                <h3>Address</h3>
                                <span>356, Service Road, Near Highway, Vile Parle (east), Mumbai</span>
                                <p>(+91)9876543109
                                    <br>unilists@gmail.com</p>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </footer>
    <!-- end footer -->
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}



        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });

    </script>
    <!-- PHP DATABASE LINKING -->
<?php

$con = mysqli_connect('127.0.0.1', 'root', '', 'majorproject');

$FName = isset($_POST['FName']) ? $_POST['FName'] : '';

$LName = isset($_POST['LName']) ? $_POST['LName'] : '';

$Username = isset($_POST['Username']) ? $_POST['Username'] : '';

$Gender = isset($_POST['Gender']) ? $_POST['Gender'] : '';

$Phone = isset($_POST['Phone']) ? $_POST['Phone'] : '';

$Email = isset($_POST['Email']) ? $_POST['Email'] : '';

$confirm_password = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : '';

$sql = "INSERT INTO signup(FName, LName, Username, Gender, Phone, Email, confirm_password) 
         VALUES ('$FName', '$LName', '$Username', '$Gender', '$Phone', '$Email', '$confirm_password')";

/*if(mysqli_query($con, $sql))
{
    echo "Records added successfully.";
}
 else
 {
    echo "ERROR";
 }*/
mysqli_close($con);
?>

</body>

</html>