<?php 
require_once('header.php');
//include config
require_once('includes/config.php');


if(!$user2->is_logged_in()){ header('Location: login.php'); }
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update profile</title>
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
	
	<!-- Top Page Title Bar -->
    <div class="page-title-bar">
        <div class="page-title text-right">
            <h2>Update Your Profile</h2>
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
                                    <input type="text" autocomplete="off" class="form-control" placeholder="E-mail *" name="email" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
								<div class="form-group">
                                    <input type="password" autocomplete="off" class="form-control" placeholder="Password *" name="password" required data-validation-required-message="Please enter the password.">
                                    <p class="help-block text-danger"></p>
                                </div>
								<div class="form-group">
                                    <input type="password" autocomplete="off" class="form-control" placeholder="Confirm Password *" name="passwordConfirm" required data-validation-required-message="Please confirm password.">
                                    <p class="help-block text-danger"></p>
                                </div>
								<?php

									//if form has been submitted process it
									if(isset($_POST['submit'])){

										//collect form data
										extract($_POST);

										//very basic validation
										

										if( strlen($password) > 0){

											if($password ==''){
												$error[] = '<center style="padding-top: 20px;"><h3>Please enter the password.</h3></center>';
											}

											if($passwordConfirm ==''){
												$error[] = 'Please confirm the password.';
											}

											if($password != $passwordConfirm){
												$error[] = 'Passwords do not match.';
											}

										}
										

										if($email ==''){
											$error[] = 'Please enter the email address.';
										}

										if(!isset($error)){

											try {

												if(isset($password)){

													$hashedpassword = $user2->password_hash($password, PASSWORD_BCRYPT);

													//update into database
													$stmt = $db->prepare('UPDATE blog_users SET password = :password, email = :email WHERE memberID = :memberID') ;
													$stmt->execute(array(
														
														':password' => $hashedpassword,
														':email' => $email,
														':memberID' => $_SESSION['id']
													));


												} else {

													//update database
													$stmt = $db->prepare('UPDATE blog_users SET email = :email WHERE memberID = :memberID') ;
													$stmt->execute(array(
												
														':email' => $email,
														':memberID' => $_SESSION['id']
													));

												}
												

												//redirect to index page
												header('Location:index.php');
												exit;

											} catch(PDOException $e) {
												echo $e->getMessage();
											}

										}

									}

									?>
						</div>
						<br>
                        <div class="text-center">
                            <div id="success"></div>
                            <input type='submit' name='submit' value='Update Profile' class="btn btn-primary contact-btn"> <!-- Send button -->
                        </div>
                    </form>
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

</div>
</div>
</body>
</html>	
