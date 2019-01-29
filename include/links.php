<?php ob_start();
session_start();




if(isset($_POST['login']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$result=selectdatacon("*","users","username = '$username'");
if(mysqli_num_rows($result)>0)
{

	$row=mysqli_fetch_assoc($result);

	if($row['password']==md5($password))
	{
	$_SESSION['username']=$row['username'];
	$_SESSION['name']=$row['name'];
	
	
	header('location:./admin/index.php?pg=profile');
	}
	else
	{
	header('location:index.php?pg=login&userStatus=1&passStatus=0');
	}
}
else
{
	header('location:index.php?pg=login&userStatus=0');
}
}
if(isset($_POST['register']))
{
$name=$_POST['name'];
$username=$_POST['username'];
$password=md5($_POST['password']);
insertdata("users","name,username,password","'$name','$username','$password'");
}


if(isset($_POST['prayer']))
{
$name=$_POST['name'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$fname=$_POST['fname'];
$contact=$_POST['contact'];
$request=$_POST['request'];
insertdata("prayer","name,dob,address,fname,contact,request","'$name','$dob','$address','$fname','$contact','$request'","index.php?pg=prayer&status=1","index.php?pg=prayer&status=0");
}







?>


