<!--
##################################
FROM GALLERY
##################################
-->

<div class="container sec">
<div class="row ">
<div class="col-md-12 text-center">
<h3 class=" section-heading sec-heading  mb-5">GALLERY</h3>
</div>
</div>
<div class="row gallery_images">
<?php
$result=selectdata("*","gallery");
while($row=mysqli_fetch_assoc($result))
{
?>
	<div class="col-md-4 mb-3 ">
	<img src="assets/img/gallery/<?php echo $row['image']; ?>" alt="image" >
	</div>
<?php
}
?>
</div>
</div>


<script>
$(document).ready(function() {
    $('.gallery_images img').each(function() {
	var maxHeight = 200; 
	var ratio = 0;  
        var width = $(this).width();  
        var height = $(this).height(); 
	ratio=width/height;
	$(this).css("width", maxHeight*ratio); 
            $(this).css("height", maxHeight ); 
});
});

</script>