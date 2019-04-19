<div class="container">
<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-6">
<h3 class="text-center mt-5 mb-3">Add Sermon</h3>
<form method="post" enctype="multipart/form-data" >
<div class="form-group">
<input type="text" name="name" placeholder="Name" required="required" class="form-control">
</div>
<div class="form-group">
<input type="text" name="author" placeholder="Author" required="required" class="form-control">
</div>
<div class="form-group">
<input type="text" name="link" placeholder="Link" required="required" class="form-control">
</div>
<div class="form-group">
<input placeholder="Date" class="form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" name="date">
</div>
<div class="form-group">
<input type="file" name="fileToUpload" class="form-control ">
</div>
<input type="submit" name="addsermon" value="Add Sermon" class="btn btn-block btn-primary"> 
</form>
</div>
<div class="col-md-3">
</div>
</div>
</div>




<div class="container">
<div class="row mt-3">
<div class="col-md-12">
<h3 class="text-center mt-3 mb-3">Sermons List</h3>
<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
<tr>
<th>NAME</th>
<th>IMAGE</th>
<th>AUTHOR</th>
<th>LINK</th>
<th>DATE</th>
<th>EDIT</th>
</tr>
</thead>
<tbody>

<?php
$result=selectdata("*","sermons");
while($row=mysqli_fetch_assoc($result))
	{

?>
<tr>
<td><?php  echo $row['name']; ?></td>
<td><img src="../assets/img/sermons/<?php echo $row['image'];  ?>" height="100px" width="100px;"></td>
<td><?php echo $row['author']; ?></td>
<td><?php echo $row['link']; ?></td>
<td><?php echo $row['date']; ?></td>
<td class="text-center"><a href="index.php?pg=updateSermons&id=<?php echo $row['id'] ?>&image=<?php echo $row['image'] ?>"><i class="fa fa-edit"></i>
<form>
<input type="hidden" value="<?php echo $row['id']; ?>" name="id">
<input type="hidden" value="<?php echo $row['image']; ?>" name="image">
<button type="submit"  name = "delete_image_sermon"  class="btn"><i class="fa fa-trash"></i></button>
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