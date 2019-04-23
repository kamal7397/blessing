<!--
##################################
latest sermons
##################################
-->
<div class="row mt-5">
<div class="col-md-12 text-center mb-5">
<h2 class="section-heading sec-heading">Latest Sermons</h2><div class="section-heading2"></div>
</div>
</div>




<div class="container owl-carousel" id="sermons">

	<?php
		$query="SELECT * FROM sermons ORDER BY id DESC";
		$result = mysqli_query($con,$query);
		$rows=mysqli_num_rows($result);
		$total_rows=$rows/3;
		
		for($i=0; $i<$total_rows; $i++)	
		{
		$x=0;
	?>


<div class="item">
	<?php
		while($row=mysqli_fetch_assoc($result))
		{
	?>
<div class="row mb-2 pb-2 b-bottom">
<div class="col-md-2">
<img src="assets/img/sermons/<?php echo $row['image']; ?>" alt="pic3" width="100%" height="140px">
</div>
<div class="col-md-7 pt-4">
<p class="f-sizep mt-2"><?php echo $row['name']; ?></p>
<p>By <a href="#"><span class="text-color2"><?php echo $row['author']; ?></span></a> , <?php echo $row['date']; ?></p>
</div>
<div class="col-md-3 pt-4">

<a href="<?php echo $row['link']; ?>" target="_blank"><i class="fas fa-video bgcolor1 text-color1 fa-1x mr-2 px-4 pt-4 pb-4 font-sizei"></i></a>
<i class="fas fa-volume-up bgcolor1 text-color1 fa-1x mr-2 px-4 pt-4 pb-4 font-sizei"></i>
<i class="fas fa-file-pdf bgcolor1 text-color1 fa-1x mr-2 px-4 pt-4 pb-4 font-sizei" ></i>
</div>
</div>
	<?php
	$x++;
	if($x == 3)
	{
	break;
	}
	}
	?>
</div>
	<?php
	}
	?>
</div>