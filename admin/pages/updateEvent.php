<?php
$result=selectdatacon("*","events","id=".$_GET['id']);
$row=mysqli_fetch_assoc($result);
?>





<div class="container">
<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-6">
<h3 class="text-center mt-3 mb-3">Upcoming Events</h3>
<form method="post" enctype="multipart/form-data" >

<div class="form-group">
<input placeholder="Date" class="form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" name="date" value="<?php echo $row['date']; ?>">
</div>
<div class="form-group">
<input type="file" name="fileToUpload" class="form-control " value="<?php echo $row['image']; ?>">
</div>
<div class="form-group">
<input type="text" name="title" placeholder="Title" required="required" class="form-control" value="<?php echo $row['title']; ?>">
</div>
<input type="submit" name="update_event" value="Update Event" class="btn btn-block btn-primary"> 
</form>
</div>
<div class="col-md-3">
</div>
</div>
</div>







