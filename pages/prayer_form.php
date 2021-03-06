
<div class="container">

<?php
if(isset($_GET['status']))
{
?>
<div class="row mt-5">
	<div class="col-md-12">

		<?php
		if($_GET['status']==1)
		{
		?>
		<div class="alert alert-success">
			<p>Request Submitted With UID Number <?php echo $_GET['uid']; ?> .Your UID number has also been sent at your registered mail id.</p>
		</div>
		<?php
		}
		else
		{
		?>
		<div class="alert alert-danger">
			<p>!Request Not Submitted</p>
		</div>
		<?php
		}
		?>


	</div>
</div>
<?php
}
?>

<div class="row mt-5 alert alert-info">
<div class="col-md-12">
<p class="text-left ">After the submission of the form, your UID will be generated. <br/><strong>Note that UID, for further tracking your prayer request status</strong>. UID will also be mailed to your registered mail id.</p>
</div>
</div>
<div class="row mt-2 mb-5">
<div class="col-md-12">
<form method="post">
<h2 class="text-center  mb-5  "><i class="fas fa-hands mr-2"></i>Request for Prayer</h2>
<div class="form-group">
<div class="input-group ">
  <div class="input-group-prepend">
	<span class="input-group-text">
<i class="fas fa-user"></i></span>
</div>
<input type="text" name="name" placeholder="Name" required="required" class="form-control">
</div>
</div>



<div class="form-group">

<div class="input-group ">
  <div class="input-group-prepend">
	<span class="input-group-text">
<i class="far fa-calendar-alt"></i></span>
</div>
<input placeholder="DOB" class="form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" name="dob">
</div>
</div>


<div class="form-group">

<div class="input-group ">
  <div class="input-group-prepend">
	<span class="input-group-text">
<i class="fas fa-house-damage"></i></span>
</div>
<input type="text" name="address" placeholder="Address" required="required" class="form-control">
</div>
</div>

<div class="form-group">

<div class="input-group ">
  <div class="input-group-prepend">
	<span class="input-group-text">
<i class="fas fa-user-tie"></i>
</div>
<input type="text" name="fname" placeholder="Father's Name" required="required" class="form-control">
</div>
</div>



<div class="form-group">

<div class="input-group ">
  <div class="input-group-prepend">
	<span class="input-group-text">
<i class="fas fa-envelope"></i>
</div>
<input type="email" name="email" placeholder="E-mail" required="required" class="form-control">
</div>
</div>



<div class="form-group">

<div class="input-group ">
  <div class="input-group-prepend">
	<span class="input-group-text">
<i class="fas fa-phone fa-flip-horizontal"></i></span>
</div>
<input type="number" name="contact" placeholder="Contact" required="required" class="form-control">
</div>
</div>


<div class="form-group">
<textarea class="form-control" name="request" rows="10" placeholder="Request"></textarea>
</div>


<input type="submit" name="prayer" value="Request" class="btn btn-primary btn-block">

</form>
</div>
</div>
</div>





