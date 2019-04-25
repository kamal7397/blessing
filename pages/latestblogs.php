<!--
##################################
latest blog	
##################################
-->
<div class="row">
<div class="col-md-3 bgcolor2 text-color1 pl-5  pt-5 pb-5">
<p class="p1">LATEST</p>
<h2 class="p2 mb-0">BLOG</h2>
</div>
<div class="owl-carousel col-md-9 px-0" id="second">
<?php
$result=selectdata("*","blogs");
while($row=mysqli_fetch_assoc($result))
{
?>
<div class="padding2 block item">

<span class="bgcolor2 text-color1 px-2"><?php echo $row['date']; ?></span>
<h4><?php echo $row['title']; ?></h4>
<p><?php echo $row['description']; ?>
                                    </p>

</div>

<?php
}
?>
</div>
</div>
