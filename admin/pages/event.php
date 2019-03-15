<div class="container">
<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-6">
<h3 class="text-center mt-3 mb-3">Upcoming Events</h3>
<form method="post" enctype="multipart/form-data" >

<div class="form-group">
<input placeholder="Date" class="form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" name="date">
</div>
<div class="form-group">
<input type="file" name="fileToUpload" class="form-control ">
</div>
<div class="form-group">
<input type="text" name="title" placeholder="Title" required="required" class="form-control">
</div>
<input type="submit" name="addevent" value="Add Event" class="btn btn-block btn-primary"> 
</form>
</div>
<div class="col-md-3">
</div>
</div>
</div>




<div class="container">
<div class="row mt-3">
<div class="col-md-8 offset-2">
<h3 class="text-center mt-3 mb-3">Events List</h3>
<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
<tr>

<th>IMAGE</th>
<th>DATE</th>
<th>TITLE</th>
<th>EDIT</th>
</tr>
</thead>
<tbody>



<?php
$result=selectdata("*","events");
while($row=mysqli_fetch_assoc($result))
	{

?>
<tr>

<td><img src="../assets/img/gallery/<?php echo $row['image'];  ?>" height="100px" width="100px;"></td>

<td><?php echo $row['date']; ?></td>
<td><?php echo $row['title']; ?></td>
<td>
<form>
<input type="hidden" value="<?php echo $row['id']; ?>" name="id">
<input type="hidden" value="<?php echo $row['image']; ?>" name="image">
<button type="submit"  name = "delete_sermon"  class="btn"><i class="fa fa-trash"></i></button>
</form>
</td>
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