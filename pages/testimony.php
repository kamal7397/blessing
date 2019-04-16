<!--
##################################
latest sermons
##################################
-->

<div class="row mt-5" >
<div class="col-md-12 text-center mb-5">
<h2 class="section-heading sec-heading">Testimonies</h2><div class="section-heading2"></div>
</div>
</div>

<div class="container owl-carousel" id="testimony">

	<?php
		$result=selectdata("*","testimony");
		$rows=mysqli_num_rows($result);
		$total_rows=$rows/3;
		
		for($i=0; $i<$total_rows; i++)	
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
<img src="assets/img/s3.jpg" alt="pic3" width="100%" >
</div>
<div class="col-md-7">
<p class="f-sizep mt-2">Find And You Shall Seek</p>
<p>By <a href="#"><span class="text-color2"> Ron Ward</span></a> , February 22,2017</p>
</div>
<div class="col-md-3">

<i class="fas fa-video bgcolor1 text-color1 fa-1x mr-2 px-4 pt-4 pb-4 font-sizei"></i>
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
