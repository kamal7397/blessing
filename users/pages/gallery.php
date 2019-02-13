<div class="container">
<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-6">
<h3 class="text-center mt-3 mb-3">Add Image</h3>
<form method="post" enctype="multipart/form-data" >
<div class="form-group">
<input type="text" name="name" placeholder="Name" required="required" class="form-control">
</div>
<div class="form-group">
<input type="file" name="fileToUpload" class="form-control ">
</div>
<input type="submit" name="addimg" value="Add Image" class="btn btn-block btn-primary"> 
</form>
</div>
<div class="col-md-3">
</div>
</div>
</div>




<div class="container">
<div class="row mt-3">
<div class="col-md-8 offset-2">
<h3 class="text-center mt-3 mb-3">Images List</h3>
<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
<tr>
<th>NAME</th>
<th>IMAGE</th>
<th>EDIT</th>
</tr>
</thead>
<tbody>

<?php
$result=selectdata("*","gallery");
while($row=mysqli_fetch_assoc($result))
	{

?>
<tr>
<td><?php  echo $row['name']; ?></td>
<td><img src="../assets/img/gallery/<?php echo $row['image'];  ?>" height="100px" width="100px;"></td>


<td>
<form>
<input type="hidden" value="<?php echo $row['id']; ?>" name="id">
<input type="hidden" value="<?php echo $row['image']; ?>" name="image">
<button type="submit"  name = "delete_image"  class="btn"><i class="fa fa-trash"></i></button>
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