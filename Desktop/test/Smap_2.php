<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smapsters 2.0</title>
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

    <!--Blog Posts
    ================================================== -->
    <section id="blog-post">
        <div class="header-static">
            <div class="featured-content static">

                <div class="post-details">
                    <img src="img/past/Smap_2/4.jpg" class="img-responsive" alt="...">
                     <div class="text-overlay">
                        <div class="title">
                            <h2>Smapsters 2.0</h2>
                        </div>
                        <div class="metas">
                            <h4><b>Chakrata</b></h4>
                        </div>
                        <p class="excerpt">
						Chakrata is a beautiful offbeat location surrounded by lush green mountains.This trip converted a group of travel enthusiasts into a strong bonded family.The trip was filled with great adventure activities such as bridge slithering, rafting,cliff jumping and  night trek etc.Tiger falls and water activities were the highlights of the trip.
						<br><br>
						Chakrata consists of breath-taking scenic beauty and awesome localites.The trip made the travellers forget about the morbid city life and enjoy the real beauty of nature
						</p>
						<ul class="user-action">
                            <li><a href="http://www.facebook.com/smapsters/" target="#blank"><i class="fa fa-facebook fa-2x"></i></a>&nbsp;</li>
                            <li><a href="http://www.twitter.com/SmapstersAdv/" target="#blank"><i class="fa fa-twitter fa-2x"></i></a>&nbsp;</li>
                            <li><a href="http://www.instagram.com/smapsters/" target="#blank"><i class="fa fa-instagram fa-2x"></i></a>&nbsp;</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div id="main-text" class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">

                        <div id="content">
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <img src="img/past/Smap_2/3.jpg" class="img-responsive" alt="...">
                                </div>

                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <img src="img/past/Smap_2/1.jpg" class="img-responsive" alt="...">
                                </div>
                            </div>
							<div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <img src="img/past/Smap_2/2.jpg" class="img-responsive" alt="...">
                                </div>

                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <img src="img/past/Smap_2/5.jpg" class="img-responsive" alt="...">
                                </div>
                            </div>
							<div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <img src="img/past/Smap_2/6.jpg" class="img-responsive" alt="...">
                                </div>

                    
                            </div>

                        </div>
						<a href="past.php"><button class="btn btn-primary contact-btn">Back to Past Trips</button></a>
						<br><br>

                        <!-- Comment Form Block ******************************************
                        *********************************************************** -->
                        <div id="contact-form"> <!-- Form Wrapper -->
						<div class="comments">
							<h4>Leave a Comment</h4>
							<hr>
							<br>
							<div class="col-md-10 form">
							<?php
										$id=9992;
										$stmt = $db->prepare('SELECT cid, pid, mid,user, content, dt FROM comments where pid = :id ORDER BY cid DESC');
										$stmt->execute(array('id' =>$id ));
											while($row = $stmt->fetch()){
												
												echo '<div>';
													echo '<h3><b>'.$row['user'].'</b></h3>';
													echo '<p style="font-size:1.2em">'.$row['content'].'</p>';				
													echo '<h6>posted on '.date('jS M Y H:i:s', strtotime($row['dt'])).'</h6>';
													if( $user2->is_logged_in() )
														if($row['mid']==$_SESSION['id'])
															echo '<a href= "delete.php?id='.$row["cid"].'&pid='.$id.'" style="color: #0C1026"> Delete</a>';
												
												echo '</div><br>';

											}
									if( $user2->is_logged_in() )
									echo '<form method="post" action="add.php?pid='.$id.'"><textarea name="comment" class="form-control" placeholder="Your Comment"></textarea><br><br><input type="submit" value="Comment" class="btn btn-primary contact-btn"></form>';
									else 
										echo'<br><h3><a href="login.php"><b>Login</b> </a>to Comment</h3>';
									?>
							</div>
						</div>		  
                          
                         <hr>
                        </div> <!-- End Form Wrapper -->

                    </div>
                </div>
            </div>
            <div class="space"></div>
            <div class="clearfix"></div>
        </div>
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