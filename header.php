<?php 
require("includes/config.php");?>

<div id="navigation" class="navmenu navmenu-default navmenu-fixed-left offcanvas"> <!--- Off Canvas Side Menu -->
	<img src="img/menu-logo.png" alt="Smapsters" style="width:75%; padding:10px;;" class="logo"> <!--- User Icon/Image -->
      <ul class="nav navmenu-nav"> <!--- Menu -->
		<?php
			if( $user2->is_logged_in())
		{?>
		<li><a href="profile.php"><b>Hi, <?php echo $_SESSION['username'];?></b></a></li>
		<?php }
		?>
        <li><a class="page-scroll" href="index.php#hero">Home</a></li>
        <li><a class="page-scroll" href="index.php#about-us">About Us</a></li>
        <li><a class="page-scroll" href="index.php#past">Past Trips</a></li>
		<li><a class="page-scroll" href="index.php#upcoming">Upcoming Trips</a></li>
		<li><a class="page-scroll" href="index.php#dest">Destination Trips</a></li>
        <li><a class="page-scroll" href="index.php#contact">Contact Us</a></li>
		<?php if( $user2->is_logged_in())
		{?>
		<li><a href="logout.php">LOGOUT</a></li>
		<?php }
		else 
		{
		?>
			<li><a href="login.php">LOGIN</a></li>
		<?php } ?>
      </ul><!--- End Menu -->
</div> <!--- End Off Canvas Side Menu -->
<!--
<div id="static_login_button"> <!--LOGIN BUTTON-->
<!--
	<?php
		if( $user2->is_logged_in())
	{?>
	<a href="logout.php"><button class="btn btn-primary contact-btn" style="padding-left:7.5%; padding-right:7.5%; background-color:#111A45; border:none;"><b>Log Out</b></button></a>
	<?php }
		else
		{
		?>
	<a href="login.php"><button class="btn btn-primary contact-btn" style="padding-left:7.5%; padding-right:7.5%; background-color:#111A45; border:none;"><b>Login</b></button></a>
	<?php }
		?>
</div>
-->
    <!-- Menu Toggle for Off Canvas-Menu -->
<div id="menu" class="menu" data-toggle="offcanvas" data-target=".navmenu">
        <!--<img src="img/menu.png" alt="menu-logo"><br>-->
		<img src="img/menu.png" alt="menu-logo">
</div>