<?php
if(isset($_POST['logout']))
{
	session_destroy();
	header('location:../index.php?pg=login');
}

if(isset($_POST['donation']))
{
$amount=$_POST['amount'];
$date=$_POST['date'];
$purpose=$_POST['purpose'];
insertdata("records","amount,date,purpose, userid, type","'".$amount."','".$date."','".$purpose."',".$_SESSION['userid'].",'donation'");
selectcondata("*","records","'".$userid."'=".$_SESSION['userid']);
}
?>