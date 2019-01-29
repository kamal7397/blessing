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
</tr>
<?php

}

?>
</tbody>

</table>

</div>
</div>
</div>
