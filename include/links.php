<?php ob_start();
session_start();



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


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
	$_SESSION['type']=$row['type'];
	$_SESSION['userid']=$row['id'];
	header('location:./users/index.php?pg=welcome');	
	
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
$address=$_POST['address'];
$contact=$_POST['contact'];
insertdata("users","name,username,password,address,contact,type","'$name','$username','$password','$address','$contact','users'","index.php?pg=register&status=1","index.php?pg=register&status=1");
}


if(isset($_POST['prayer']))
{
$name=$_POST['name'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$fname=$_POST['fname'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$request=$_POST['request'];
$uid='POPWA'.mt_rand(1000,9999);
insertdata("prayer","name,dob,address,fname,contact,request,uid","'$name','$dob','$address','$fname','$contact','$request','$uid'","index.php?pg=prayer&status=1&uid=".$uid,"index.php?pg=prayer&status=0");


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Fetching data that is entered by the user
$email = $_POST['email'];
$password = $_POST['password'];
$to_id = $_POST['toid'];
$message = "Please note your UID number($uid) for tracking your requested prayer status in future.";
$subject = "Prayer Request UID Number";

// Configuring SMTP server settings
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username ='princeofpeacewelfareassoc@gmail.com';
$mail->Password ='association@1';
$mail->setFrom('princeofpeacewelfareassoc@gmail.com', 'Prince of Peace Welfare Association');

// Email Sending Details
$mail->addAddress($email);
$mail->Subject = $subject;
$mail->msgHTML($message);

$mail->send();
}


if(isset($_POST['track_prayer']))
{
$uid=$_POST['uid'];
header('location:index.php?pg=track_status&uid='.$uid);
}


?>


