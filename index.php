<?php
include 'include/connect.php';
include 'include/functions.php';
include 'include/links.php';

?>

<html>
<head>
	<title>
		<?php if(isset($_GET['pg']))
			{
				echo $_GET['pg'];			
			}
			else
			{
				echo "Home ";
			}

		  ?>
	</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
	<body>
	
	<?php
	include 'include/header.php';
	if(isset($_GET['pg']))
	{
	switch($_GET['pg']){
		case 'home':
		include 'pages/home.php';
		break;

	 	case 'about':
		include 'pages/about.php';
		break;


		case 'contact':
		include 'pages/contact.php';
		break;

		case 'service':
		include 'pages/service.php';
		break;

		case 'login':
		include 'pages/login.php';
		break;

		case 'register':
		include 'pages/register.php';
		break;

		case 'dashboard':
		include 'pages/dashboard.php';
		break;

		case 'prayer':
		include 'pages/prayer_form.php';
		break;



		default;
		include 'pages/home.php';
	}
}
	else
	{
		include 'pages/home.php';
	}
		include 'include/footer.php';

	?>
	
	</body>
</html>
