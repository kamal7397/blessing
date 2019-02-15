
<div class="container">
<div class="row mt-3">
<div class="col-md-8 offset-2">
<h3 class="text-center mt-3 mb-3">Donation History</h3>
<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
<tr>
<th>AMOUNT</th>
<th>DATE</th>
<th>PURPOSE</th>
</tr>
</thead>
<tbody>

<?php
$result=selectdata("*","records");
while($row=mysqli_fetch_assoc($result))
	{

?>
<tr>
<td><?php  echo $row['amount']; ?></td>
<td><?php  echo $row['date']; ?></td>
<td><?php  echo $row['purpose']; ?></td>


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