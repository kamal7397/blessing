<div class="container">
<div class="row">
<div class="col-md-3">
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

<input type="submit" name="donation" value="Donate" class="btn btn-block btn-primary"> 
</form>
</div>
<div class="col-md-3">
</div>
</div>
</div>




<div class="container">
<div class="row mt-3">
<div class="col-md-8 offset-2">
<h3 class="text-center mt-3 mb-3">Sermons List</h3>
<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
<tr>
<th>AMOUNT</th>
<th>DATE</th>
<th>PURPOSE</th>
</tr>
</thead>
<tbody>

<?php
$result=selectdata("*","records");
while($row=mysqli_fetch_assoc($result))
	{

?>
<tr>
<td><?php  echo $row['amount']; ?></td>
<td><?php  echo $row['date']; ?></td>
<td><?php  echo $row['purpose']; ?></td>


</tr>
<?php

}

?>
</tbody>

</table>

</div>
</div>
</div>
</div>