<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
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
    <?php require_once("header.php");?>
	
	<!-- Top Page Title Bar -->
    <div class="page-title-bar">
        <div class="page-title text-right">
            <h2>Create Your Account</h2>
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
								<div class="form-group">
                                    <input type="password" autocomplete="off" class="form-control" placeholder="Confirm Password *" name="passwordConfirm" required data-validation-required-message="Please enter the number of people.">
                                    <p class="help-block text-danger"></p>
                                </div>
								<div class="form-group">
                                    <input type="email" autocomplete="off" class="form-control" placeholder="Email *" name="email" required data-validation-required-message="Please enter the number of people.">
                                    <p class="help-block text-danger"></p>
                                </div>
									<?php

											//if form has been submitted process it
											if(isset($_POST['submit'])){

												//collect form data
												extract($_POST);

												//very basic validation
												if($username ==''){
													$error[] = 'Please enter the username.';
												}

												if($password ==''){
													$error[] = 'Please enter the password.';
												}

												if($passwordConfirm ==''){
													$error[] = 'Please confirm the password.';
												}

												if($password != $passwordConfirm){
													$error[] = 'Passwords do not match.';
												}

												if($email ==''){
													$error[] = 'Please enter the email address.';
												}

												if(!isset($error)){

													$hashedpassword = $user2->password_hash($password, PASSWORD_BCRYPT);

													try {

														//insert into database
														$stmt = $db->prepare('INSERT INTO blog_users (username,password,email) VALUES (:username, :password, :email)') ;
														$stmt->execute(array(
															':username' => $username,
															':password' => $hashedpassword,
															':email' => $email
														));
														if($user2->login($username,$password)){ 

													//logged in return to index page
													header('Location: index.php');
													exit;
												

												
												}
														
														//redirect to index page
														//header('Location:login.php');
														exit;

													} catch(PDOException $e) {
														echo $e->getMessage();
													}

												}

											}

											//check for any errors
											if(isset($error)){
												foreach($error as $error){
													echo '<p class="error">'.$error.'</p>';
												}
											}
											?>
						</div>
						<br>
                        <div class="text-center">
                            <div id="success"></div>
                            <button type="submit" name="submit" value="Sign Up" class="btn btn-primary contact-btn">Sign Up</button> <!-- Send button -->
                        </div>
                    </form>
					<center><h3 style="color:black;">Already a User? <a href="login.php" style="color:blue;"><b>Login</b></a></h3></center>
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