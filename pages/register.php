<div class="container">
<div class="row mt-5 mb-2">
<div class="col-md-3">
</div>
<div class="col-md-6">

<?php
if(isset($_GET['status']))
{
?>

<div class="row mt-3">
	<div class="col-md-12">

		<?php
		if($_GET['status']==0)
		{
		?>
		<div class="alert alert-danger">
			<p>not registered</p>
		</div>
		<?php
		}
		else
		?>
		<div class="alert alert-success">
			<p>registration successfull</p>
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
<div class="row mt-2 ">
<div class="col-md-3"></div>
<div class="col-md-6">
   <h2 class="text-center mb-3">Register</h2>
   <form method="post" >
      <div class="form-group">
         <div class="input-group ">
            <div class="input-group-prepend">
               <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="name" placeholder="Name" required="required" class="form-control">
         </div>
      </div>
      <div class="form-group">
         <div class="input-group ">
            <div class="input-group-prepend">
               <span class="input-group-text"><i class="fas fa-user-cog"></i></span>
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
         <div class="input-group ">
            <div class="input-group-prepend">
               <span class="input-group-text"><i class="fas fa-home"></i></span>
            </div>
            <input type="text" name="address" placeholder="Address" required="required" class="form-control">
         </div>
      </div>
      <div class="form-group">
         <div class="input-group ">
            <div class="input-group-prepend">
               <span class="input-group-text"><i class="fas fa-phone fa-flip-horizontal"></i></span>
            </div>
            <input type="text" name="contact" placeholder="Contact" required="required" class="form-control">
         </div>
      </div>
      <div class="form-group">
         <input type="submit" name="register" value="Register" class="form-control btn btn-primary">
      </div>
</div>
</form>
</div>
</div>
</div>
</div>