
<!--
###################
request
###################
-->

<div class="row mt-5">
<div class="col-md-10 offset-1">
<h3 class="text-center mt-3 mb-5">Donation Request</h3>
	
</div>
</div>

<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
<tr>
<th>ID</th>
<th>AMOUNT</th>
<th>DATE</th>
<th>PURPOSE</th>
<th>USERID</th>
<th>STATUS</th>
<th>EDIT/DELETE</th>
</tr>
</thead>
<tbody>

<?php
$result=selectdata("*","temp_records");
while($row=mysqli_fetch_assoc($result))
	{

?>
<tr>
<td><?php  echo $row['id']; ?></td>
<td><?php  echo $row['amount']; ?></td>
<td><?php  echo $row['date']; ?></td>
<td><?php  echo $row['purpose']; ?></td>
<td><?php  echo $row['userid']; ?></td>
<td><?php  echo $row['status']; ?></td>

<td class="text-center"><a href="index.php?pg=updateRecord&rid=<?php echo $row['rid'] ?>"><i class="fa fa-edit"></i>

<form>
<input type="hidden" value="<?php echo $row['rid'];  ?>" name="rid">
<button type="submit" name="deleterecord" class="btn"><i class="fa fa-trash"></i></button>
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
