<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book a Seat</title>
    <meta name="description" content="Smapsters is a creative travel website">
    <meta name="keywords" content="travel, travel website, tour">
    <meta name="author" content="WebDevils">
    
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
    <?php include("header.php");?>
	
	<!-- Top Page Title Bar -->
    <div class="page-title-bar">
        <div class="page-title text-right">
            <h2>BOOK YOUR SEAT NOW</h2>
        </div>
    </div>

    <!-- Customise Form Section
    ================================================== -->
	<section id="portfolio" class="gallery">
    <section id="contact">

        <div class="container"> <!-- Start Container -->
		<?php
			if(isset($_POST['submit']))
			{

			$to="smapsters@gmail.com";
			$subject="Booking Request"; 
			$user=$_POST['Name'];
			$txt="From: ".$user."\n"."No. of people: ".$_POST['NOP']."\n"."Contact No.: ".$_POST['Mobile']."\n"."Version: ".$_POST['Type'];
			$headers="From: ".$_POST['email'];

			if(mail($to, $subject, $txt, $headers))
			{
				echo '<h3 style="margin-left:20%;">Your mail has been sent. You will receive a response shortly :)</h3><br>';
			}
			else
			{
				echo '<h3 style="margin-left:20%;">There was an error sending the email. Please try again :(</h3><br>'; 
			}
			}
		?>
            <div class="row"> <!-- Start Row -->
                <div class="col-md-10 col-md-offset-1">
                
                    <form name="sentMessage" id="contactForm" action="" method="POST">
                        <div id="form" class="contact-form" >
                            <h3><b>Wish to be a part of our next trip?
							<br>
							<br>
							It's just a click away!</b>
							</h3>
							<span class="fa fa-angle-double-down fa-2x"></span>
							<br>                            
                                <div class="form-group">
                                    <input type="text" autocomplete="off" class="form-control" placeholder="Your Name *" name="Name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
								<div class="form-group">
                                    <input type="number" autocomplete="off" class="form-control" placeholder="No of People *" name="NOP" required data-validation-required-message="Please enter the number of people.">
                                    <p class="help-block text-danger"></p>
                                </div>
								<div class="form-group">
                                    <input type="tel" autocomplete="off" class="form-control" placeholder="Contact Number *" name="Mobile" required data-validation-required-message="Please enter the contact number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" autocomplete="off" class="form-control" placeholder="Your Email *" name="email" required data-validation-required-message="Please enter your email.">                            
                                    <p class="help-block text-danger"></p>
                                </div>
								<div class="form-group">
                                    <select autocomplete="off" class="form-control" name="Type" style="border-color:#0b102c; border-radius:0px; height: 50px; padding: 15px 10px;" id="Type" required data-validation-required-message="Please enter your type.">
										<option class="form-control" value="" disabled selected style="display:none">SMAPSTERS EDITION</option>
										<option class="form-control" value="Smapsters 8.0">Smapsters 8.0</option>
										<option class="form-control" value="Smapsters 9.0">Smapsters 9.0</option>
									</select>
                                    <p class="help-block text-danger"></p>
                                </div>
                            
                            </div>
							<br>
                        <div class="text-center">
                            <div id="success"></div>
                            <button type="submit" name="submit" value="submit" class="btn btn-primary contact-btn">Book My Seat</button> <!-- Send button -->
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

  </body>
</html>