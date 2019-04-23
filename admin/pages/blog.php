<div class="container">
<div class="row mt-5 mb-2">
<div class="col-md-3">
</div>
<div class="col-md-6">

<?php
if(isset($_GET['status']))
{
?>

<div class="row mt-3">
	<div class="col-md-12">

		<?php
		if($_GET['status']==0)
		{
		?>
		<div class="alert alert-danger">
			<p>Blog is not Added</p>
		</div>
		<?php
		}
		else
		?>
		<div class="alert alert-success">
			<p>Blog is Added</p>
		</div>
		<?php		
		}
		?>




</div>
<div class="col-md-3">
</div>
</div>
</div>









<div class="container">
<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-6">
<h3 class="text-center mt-3 mb-3">Latest Blogs</h3>
<form method="post" enctype="multipart/form-data" >

<div class="form-group">
<input placeholder="Date" class="form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" name="date">
</div>
<div class="form-group">
<input type="text" name="title" placeholder="Title" required="required" class="form-control">
</div>

<div class="form-group">
<textarea class="form-control" name="description" rows="10" placeholder="Description"></textarea>
</div>
<input type="submit" name="addblog" value="Add Blog" class="btn btn-block btn-primary"> 
</form>
</div>
<div class="col-md-3">
</div>
</div>
</div>




<div class="container">
<div class="row mt-3 ">
<div class="col-md-12 ">
<h3 class="text-center mt-3 mb-3">Blogs List</h3>
<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
<tr>


<th>DATE</th>
<th>TITLE</th>
<th>DESCRIPTION</th>
<th>EDIT</th>
</tr>
</thead>
<tbody>



<?php
$result=selectdata("*","blogs");
while($row=mysqli_fetch_assoc($result))
	{

?>
<tr>

<td><?php echo $row['date']; ?></td>
<td><?php  echo $row['title']; ?></td>
<td><?php echo $row['description']; ?></td>
<td class="text-center"><a href="index.php?pg=updateBlog&id=<?php echo $row['id'] ?>"><i class="fa fa-edit"></i>
<form>
<input type="hidden" value="<?php echo $row['id']; ?>" name="id">
<input type="hidden" value="<?php echo $row['image']; ?>" name="image">
<button type="submit"  name = "delete_blog"  class="btn"><i class="fa fa-trash"></i></button>
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