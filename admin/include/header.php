<div class="row bg-dark">
	<div class="col-md-9 col-xs-12">   
	<nav class="navbar navbar-expand-md navbar-dark ">
	<a class="navbar-brand" href="#"> <img src="../assets/img/logo.png" class="ml-4 mt-4 img-fluid position1"> </a>
	 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    		<span class="navbar-toggler-icon"></span>
  	</button>
	<div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav nav_marginleft_list mt-4">
      <li class="nav-item">
        <a class="nav-link" href="index.php?pg=home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?pg=contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?pg=about">About</a>
      </li>    
      <li class="nav-item">
        <a class="nav-link" href="index.php?pg=prayer">PrayerRequest</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?pg=gallery">Gallery</a>
      </li>
    </ul>
  </div>  
</nav>
</div>


<form method="post" class="mt-5 ml-5 ">
<input type="submit" class="bg-dark pt-1 pb-2 px-4" name="logout" value="Logout">
</form>	

 </div>
<h1>welcome <?php echo $_SESSION['username'] ;  ?></h1>