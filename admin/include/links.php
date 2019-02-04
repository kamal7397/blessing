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
updatedata("prayer", "name = '".$name."',dob = '".$dob."',address = '".$address."',fname = '".$fname."',contact = '".$contact."',request = '".$request."'","id = ".$_GET['id']);
}



if(isset($_GET['delete']))
{
$id=$_GET['id'];
deletedata("prayer","id=".$id,"index.php?pg=prayers");
}


if(isset($_GET['updatePrayerStatus']))
{
$id=$_GET['id'];
updatedata("prayer","status='Completed'","id=".$_GET['id']);
header('location:?pg=prayers');
}
?>


