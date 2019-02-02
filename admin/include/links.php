<?php 

if(isset($_POST['logout']))
{
	session_destroy();
	header('location:../index.php?pg=login');
}





if(isset($_POST['prayer']))
{
$name=$_POST['name'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$fname=$_POST['fname'];
$contact=$_POST['contact'];
$request=$_POST['request'];
updatedata("prayer","name,dob,address,fname,contact,request","'$name','$dob','$address','$fname','$contact','$request'","index.php?pg=updatePrayer&id=$_GET['id'];");
}

?>


