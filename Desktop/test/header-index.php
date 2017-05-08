<?php 
require("includes/config.php");?>

<nav id="horizontal" class="navbar navbar-default navbar-fixed-top page-title-bar" style="text-transform:uppercase; border:none; padding:0 5% 0 5%; height:auto; font-family:Bradley Hand ITC; font-size:1em; color:#ffffff;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1"><span class="sr-only">Toggle navigation</span></button>
      <a class="navbar-brand page-scroll" href="index.php"><img src="img/logo.png" class="blacklogo" alt="Smapsters" style="float:left; height:160%"></a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right" style="margin:0.5% 0 0.5% 0;">
        <li><a class="page-scroll" href="index.php#about-us" style="color:#ffffff;">About Us</a></li>
        <li><a class="page-scroll" href="index.php#past" style="color:#ffffff;">Past</a></li>
		<li><a class="page-scroll" href="index.php#upcoming" style="color:#ffffff;">Upcoming</a></li>
		<li><a class="page-scroll" href="index.php#dest" style="color:#ffffff;">Destinations</a></li>
        <li><a class="page-scroll" href="index.php#contact" style="color:#ffffff;">Contact Us</a></li>
		<?php if( $user2->is_logged_in())
		{?>
		<li><a href="logout.php" style="color:#ffffff;">Logout</a></li>
		<?php }
		else 
		{
		?>
			<li><a href="login.php" style="color:#ffffff;">Login</a></li>
		<?php } ?>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>