<div class="container">
<div class="row">
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

<input type="submit" name="updateRecord" value="Update" class="btn btn-block btn-primary"> 
</form>
</div>
<div class="col-md-3">
</div>
</div>
</div>