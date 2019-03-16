<?php
$result=selectdatacon("*","testimony","id=".$_GET['id']);
$row=mysqli_fetch_assoc($result);
?>




<div class="container">
<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-6">
<h3 class="text-center mt-3 mb-3">Add Testimony</h3>
<form method="post" enctype="multipart/form-data" >
<div class="form-group">
<input type="text" name="name" placeholder="Name" required="required" class="form-control" value="<?php echo $row['name']; ?>">
</div>
<div class="form-group">
<input type="text" name="author" placeholder="Author" required="required" class="form-control" value="<?php echo $row['author']; ?>">
</div>
<div class="form-group">
<input placeholder="Date" class="form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" name="date" value="<?php echo $row['date']; ?>">
</div>
<div class="form-group">
<input type="file" name="fileToUpload" class="form-control ">
</div>
<div class="form-group">
<input type="hidden" name="oldimage" class="form-control " value="<?php echo $row['image']; ?>">
</div>
<input type="submit" name="update_testimony" value="Update Testimony" class="btn btn-block btn-primary"> 
</form>
</div>
<div class="col-md-3">
</div>
</div>
</div>




