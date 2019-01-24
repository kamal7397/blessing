<?php
if(isset($_SESSION['username']))
{
	header('location:./admin/index.php?pg=profile');
}

?>


<div class="container">
<div class="row mt-5 mb-5">
<div class="col-md-3">
</div>
<div class="col-md-6">
<h2 class="text-center mb-3">Login</h2>
<form method="post" >
<div class="form-group">
<div class="input-group ">
  <div class="input-group-prepend">
	<span class="input-group-text"><i class="fas fa-user"></i></span>
	</div>
<input type="text" name="username" placeholder="Username" required="required" class="form-control">
</div>
</div>

<div class="form-group">
<div class="input-group ">
  <div class="input-group-prepend">
	<span class="input-group-text"><i class="fas fa-key"></i></span>
	</div>
<input type="password" name="password" placeholder="Password" required="required" class="form-control">
</div>
</div>
<div class="form-group">
<input type="submit" name="login" value="submit" class="form-control btn btn-primary">
</div>
</div>
<div class="col-md-3">
</div>
</div>
</form>
</div>