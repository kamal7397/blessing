<?php ob_start();
session_start();

include 'include/connect.php';
include 'include/functions.php';
include 'include/links.php';

	if(!isset($_SESSION['username'])){
		header('location:../index.php?pg=login');
		
	}


	include 'include/header.php';
	
	if(isset($_GET['pg']))
	{
	switch($_GET['pg']){
		case 'home':
		include 'pages/home.php';
		break;
		
		case 'profile':
		include 'pages/profile.php';
		break;


		default;
		include 'pages/profile.php';
	}
}
	else
	{
		include 'pages/home.php';
	}
		include 'include/footer.php';


?>
