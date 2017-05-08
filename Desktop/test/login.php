<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <meta name="description" content="Smapsters is a creative travel website">
    <meta name="keywords" content="travel, travel website, tour">
    <meta name="author" content="Webdevils">
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">

    <!-- Other Css Files
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="font-awesome-4.2.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/jasny-bootstrap.min.css">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!-- Google Fonts
    ================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

    <!-- Modernizr
    ================================================== -->
    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Preloader
    ================================================== -->
    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>


    <!-- Off Canvas Navigation
    ================================================== -->
    <?php 
	require_once("header.php");
	//check if already logged in
	if( $user2->is_logged_in() ){ header('Location: index.php'); } //change to blog.php when blog implemented
	?>
	
	<!-- Top Page Title Bar -->
    <div class="page-title-bar">
        <div class="page-title text-right">
            <h2>LOGIN</h2>
        </div>
    </div>

    <!-- Customise Form Section
    ================================================== -->
	<section id="portfolio" class="gallery">
	
    <section id="contact">

        <div class="container"> <!-- Start Container -->
            <div class="row"> <!-- Start Row -->
                <div class="col-md-10 col-md-offset-1">
                
                    <form name="sentMessage" id="contactForm" action="" method="post">
                        <div id="form" class="contact-form">
							<br>                            
                                <div class="form-group">
                                    <input type="text" autocomplete="off" class="form-control" placeholder="Username *" name="username" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
								<div class="form-group">
                                    <input type="password" autocomplete="off" class="form-control" placeholder="Password *" name="password" required data-validation-required-message="Please enter the number of people.">
                                    <p class="help-block text-danger"></p>
                                </div>
								<?php
									//process login form if submitted
									if(isset($_POST['submit'])){

										$username = trim($_POST['username']);
										$password = trim($_POST['password']);
										
										if($user2->login($username,$password)){ 

											//logged in return to index page
											header('Location: index.php');
											exit;
										

										} else {
											$message = '<p class="error" style="color:#FF0000 ;">Wrong username or password</p>';
										}

									}//end if submit

									if(isset($message)){ echo $message; }
								?>
						</div>
						<br>
                        <div class="text-center">
                            <div id="success"></div>
                            <button type="submit" name="submit" value="Login" class="btn btn-primary contact-btn">Login</button> <!-- Send button -->
                        </div>
                    </form>
					<center><h3 style="color:black;">Not a user yet? <a href="signup.php"><b style="color:blue;">Sign Up</b></a></h3></center>
					<center>
					<div>
						<a href="fblogin3.php" title="We are working on it"><img src="img/facebook.png"></a>
						&nbsp;&nbsp;
						<a href="#" title="We are working on it"><img src="img/google.png"></a>
					</div>
					</center>
                </div>
            </div> <!-- End Row -->
        </div><!-- End Container -->
		

    </section>
	</section>
    

   

    <!-- Footer Section
    ================================================== -->
   <?php include("footer.php");?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins)
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <!-- Other JS Files -->
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/jasny-bootstrap.min.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/nivo-lightbox.js"></script>

    <!-- Custom Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>

  </body>
</html>