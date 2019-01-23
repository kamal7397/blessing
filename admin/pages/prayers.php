<table>

<tr>
<th>NAME</th>
<th>DOB</th>
<th>ADDRESS</th>
<th>FNAME</th>
<th>CONTACT</th>
<th>REQUEST</th>
</tr>


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
</table>