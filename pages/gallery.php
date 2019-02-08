<!--
##################################
FROM GALLERY
##################################
-->

<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h3>GALLERY</h3>
</div>
</div>
<div class="row">
<?php
$result=selectdata("*","gallery");
while($row=mysqli_fetch_assoc($result))
{
?>
	<div class="col-md-3 mb-3">
	<img src="assets/img/gallery/<?php echo $row['image']; ?>" alt="image" width="100%" height="200px">
	</div>
<?php
}
?>
</div>
</div>