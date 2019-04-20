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
insertdata("temp_records","amount,date,purpose, userid","'".$amount."','".$date."','".$purpose."',".$_SESSION['userid']);

}
?>