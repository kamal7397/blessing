<?php ob_start();
session_start();

if(isset($_POST['login'])){
$username=$_POST['username'];
$password=$_POST['password'];

$result=selectdata("*","users");


if(mysqli_num_rows($result)>0)
{
echo "user exists";
$row=mysqli_fetch_assoc($result);
echo $row['username'];
	if($row['password']==md5($password))
	{
	$_SESSION['username']=$row['username'];
	$_SESSION['name']=$row['name'];
	echo $_SESSION['name'];	
	
	header('location:index.php?pg=dashboard');
	}
	else
	{
	echo "invalid password";
	}
}
else
{
echo "user doesn't exist";
}
}



if(isset($_POST['register']))
{
$name=$_POST['name'];
$username=$_POST['username'];
$password=md5($_POST['password']);
insertdata("users","name,username,password","'$name','$username','$password'");
}



?>


