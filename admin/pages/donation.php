<div class="container">
<div class="row">
<div class="col-md-3">
<?php
 if(isset($_GET['status']))
	{
		if($_GET['status']==0)
		{
		?>
		<div class="alert alert-danger">
		<p>you have not sufficient amount to deduct</p>
		</div>
		<?php
		}
		else
		{
		?>
		<div class="alert alert-success">
		<p>your  amount is deducted</p>
		</div>
		<?php
		}
		
	}


?>


</div>
<div class="col-md-6">
<h3 class="text-center mt-3 mb-3">Donation</h3>
<form method="post" enctype="multipart/form-data" >
<div class="form-group">
<input type="text" name="amount" placeholder="Amount" required="required" class="form-control">
</div>
<div class="form-group">
<input type="text" name="purpose" placeholder="Purpose" required="required" class="form-control">
</div>
<div class="form-group">
<input placeholder="Date" class="form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" name="date">
</div>
<div class="form-group">
<select class="form-control" name="rec_type">
<option value="donation">Donation</option>
<option value="expense">Expense</option>
</select>
</div>

<input type="submit" name="donation" value="Donate" class="btn btn-block btn-primary"> 
</form>
</div>
<div class="col-md-3">
</div>
</div>
</div>






<div class="row mt-3">
<div class="col-md-10 offset-1">
<h3 class="text-center mt-3 mb-3">Transaction History</h3>
	<?php
	$res=selectdatacon("sum(amount) as donation","records","type='donation'");
	$donation = mysqli_fetch_assoc($res);

	$res_expense=selectdatacon("sum(amount) as expense","records","type='expense'");
	$expense = mysqli_fetch_assoc($res_expense);
	?>
<div class="row text-center">
<div class="col-md-4">
<p class="mb-0">TOTAL DONATION</p>
<h5 class="mb-5"><?php echo $donation['donation']; ?></h5>
</div>
<div class="col-md-4">
<p class="mb-0">TOTAL EXPENSE</p>
<h5 class="mb-5"><?php echo $expense['expense']; ?></h5>
</div>
<div class="col-md-4">
<p class="mb-0">CASH IN HAND</p>
<h5 class="mb-5"><?php echo $donation['donation']-$expense['expense']; ?></h5>
</div>
</div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
<tr>
<th>UID</th>
<th>NAME</th>
<th>USERNAME</th>
<th>ADDRESS</th>
<th>CONTACT</th>
<th>TYPE</th>
<th>AMOUNT</th>
<th>DATE</th>
<th>PURPOSE</th>
<th>RECORD TYPE</th>
</tr>
</thead>
<tbody>

<?php
$result=selectdata("*","user_records");
while($row=mysqli_fetch_assoc($result))
	{

?>
<tr>
<td><?php  echo $row['uid']; ?></td>
<td><?php  echo $row['name']; ?></td>
<td><?php  echo $row['username']; ?></td>
<td><?php  echo $row['address']; ?></td>
<td><?php  echo $row['contact']; ?></td>
<td><?php  echo $row['type']; ?></td>
<td><?php  echo $row['amount']; ?></td>
<td><?php  echo $row['date']; ?></td>
<td><?php  echo $row['purpose']; ?></td>
<td class="<?php if($row['rec_type']=='donation') echo 'text-success'; else echo 'text-danger'; ?>"><?php  echo $row['rec_type']; ?></td>


</tr>
<?php

}

?>
</tbody>

</table>

</div>
</div>
</div>
