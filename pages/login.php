<?php
if(isset($_SESSION['username']))
{
	header('location:./admin/index.php?pg=welcome');
}

?>

<div class="container">
<div class="row mt-5 mb-2">
<div class="col-md-3">
</div>
<div class="col-md-6">

<?php
if(isset($_GET['userStatus']))
{
?>

<div class="row mt-3">
	<div class="col-md-12">

		<?php
		if($_GET['userStatus']==0)
		{
		?>
		<div class="alert alert-danger">
			<p>Invalid <strong>Username</strong></p>
		</div>
		<?php
		}
		?>



		<?php
if(isset($_GET['passStatus']))
{
		if($_GET['userStatus']==1 && $_GET['passStatus']==0)
		{
		?>
		<div class="alert alert-danger">
			<p>Invalid <strong>password</strong></p>
		</div>
		<?php
		}
	}
		?>	
	</div>
</div>
<?php
}
?>
</div>
<div class="col-md-3">
</div>
</div>
</div>




<div class="container">
<div class="row">
<div class="col-md-12 text-center text-primary">
<p>If you want to donate for the church please signup and register your details with unique id and password. After that with that particular id Login here and donate. Also for the Future donation remember that id so that you will be able for the further donation.</p>
</div>
</div>
</div>











<div class="container">
<div class="row mt-2 ">
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
<input type="submit" name="login" value="Submit" class="form-control btn btn-primary">
</div>
</div>
<div class="col-md-3">
</div>
</div>
</form>
<div class="row mb-5">
<div class="col-md-12 text-center">
<p>Not Registered? <a href="index.php?pg=register" >Sign up</a></p>
</div>
</div>
</div>