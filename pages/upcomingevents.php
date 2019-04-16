<!--
############
images
############
-->
<div class="row ">
<div class="col-md-3 bgcolor2 text-color1 pl-5  pt-5 pb-5">
<p class="p1">UPCOMING</p>
<h2 class="p2">EVENTS</h2>
</div>
<?php
$result=selectdata("*","events");
while($row=mysqli_fetch_assoc($result))
{
?>
<div class="col-md-9 px-0 owl-carousel" id="first">
<div class="px-0 item">
<img src="assets/img/pic1.jpg" alt="pic1" width="100%">
<div class="bgcolor4 text-center position-block">
<p class="text-color3 mb-0"><?php echo $row['date']; ?></p>
<p><?php echo $row['title']; ?></p>
<p><?php echo $row['description']; ?>
                                    </p>
</div>
</div>
<?php
}
?>
</div>
</div>
