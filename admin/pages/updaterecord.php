<?php
$result=selectdatacon("*","records","id=".$_GET['rid']);
$row=mysqli_fetch_assoc($result);
?>



<div class="container">
<div class="row">
<div class="col-md-6 offset-3">
<h3 class="text-center mt-3 mb-3">Donation</h3>
<form method="post" enctype="multipart/form-data" >
<div class="form-group">
<input type="text" name="amount" placeholder="Amount" required="required" class="form-control" value="<?php echo $row['amount']; ?>">
</div>
<div class="form-group">
<input type="text" name="purpose" placeholder="Purpose" required="required" class="form-control" value="<?php echo $row['purpose']; ?>">
</div>
<div class="form-group">
<input placeholder="Date" class="form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" name="date" value="<?php echo $row['date']; ?>">
</div>
<div class="form-group">
<select class="form-control" name="rec_type" value="<?php echo $row['type']; ?>">
<option value="donation">Donation</option>
<option value="expense">Expense</option>
</select>
</div>

<input type="submit" name="updateRecord" value="Update" class="btn btn-block btn-primary"> 
</form>
</div>
</div>
</div>