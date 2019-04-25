<div class="row bg-dark fixed-top" id="firstRow">
	<div class="col-md-12 col-xs-12">   
	<nav class="navbar navbar-expand-md navbar-dark " >
	<a class="navbar-brand" href="#">
    		<img src="assets/img/red-banner.png" alt="Logo" class="pt-2" style="width:240px;">
  	</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

	<div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav nav_marginleft_list mt-2 ml-auto" id="nav-top">
      <li class="nav-item">
        <a class="nav-link" href="index.php?pg=home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($_GET['pg']=="home") echo "scrollLink";?>" href="<?php if($_GET['pg']=="home") echo "#sermons"; else echo "index.php?pg=home#sermons"; ?>">Sermons</a>
      </li>
	<li class="nav-item">
        <a class="nav-link <?php if($_GET['pg']=="home") echo "scrollLink";?>" href="<?php if($_GET['pg']=="home") echo "#testimony"; else echo "index.php?pg=home#testimony"; ?>">Testimony</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($_GET['pg']=="home") echo "scrollLink";?>"  href="<?php if($_GET['pg']=="home") echo "#about"; else echo "index.php?pg=home#about"; ?>">About</a>
      </li>    
      <li class="nav-item">
        <a class="nav-link" href="index.php?pg=prayer">PrayerRequest</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?pg=gallery">Gallery</a>
      </li>
	<li class="nav-item">
        <a class="nav-link" href="index.php?pg=login">Login</a>
      </li>
	<li class="nav-item">
        <a class="nav-link" href="index.php?pg=track">Track</a>
      </li>
    </ul>
  </div>  
</nav>
</div>
<!--
	<div class="col-md-2 float-right text-center d-none d-md-block mt-5 pt-2">
<a href="#"><i class="fab fa-facebook-f text-color1 mr-3"></i></a>
<a href="#"><i class="fab fa-twitter text-color1 mr-3"></i></a> 
<a href="#"><i class="fab fa-youtube text-color1 mr-3"></i></a>
<a href="#"><i class="fab fa-google-plus-g text-color1 mr-3"></i></a>
<a href="#"><i class="fas fa-envelope text-color1 mr-3"></i></a>         
    </div>
-->
 </div>