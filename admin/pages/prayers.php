<div class="container">


<div class="row mt-5 mb-2">
<div class="col-md-12">
<h3 class="text-center">Prayers Requests
</h3>

</div>
</div>


<div class="row mt-3">
<div class="col-md-12">
<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
<tr>
<th>NAME</th>
<th>DOB</th>
<th>ADDRESS</th>
<th>FNAME</th>
<th>CONTACT</th>
<th>REQUEST</th>
<th>UID</th>
<th>STATUS</th>
<th>EDIT</th>
</tr>
</thead>
<tbody>

<?php
$result=selectdata("*","prayer");
while($row=mysqli_fetch_assoc($result))
	{

?>
<tr>
<td><?php  echo $row['name']; ?></td>
<td><?php echo $row['dob'];  ?></td>
<td><?php  echo $row['address'];  ?></td>
<td><?php  echo $row['fname'];  ?></td>
<td><?php echo $row['contact'];  ?></td>
<td><?php  echo $row['request']; ?></td>
<td><?php  echo $row['uid']; ?></td>
<td>
<form>
<input type="hidden" value="<?php echo $row['id']; ?>" name="id">
<button type="submit"  name="updatePrayerStatus"  class="btn"><?php  echo $row['status']; ?></button>
</form>
</td>
<td class="text-center"><a href="index.php?pg=updatePrayer&id=<?php echo $row['id']; ?>"><i class="fa fa-edit"></i></a>
<form>
<input type="hidden" value="<?php echo $row['id']; ?>" name="id">
<button type="submit"  name = "delete"  class="btn"><i class="fa fa-trash"></i></button>
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
