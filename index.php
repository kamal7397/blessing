

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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link href="assets/css/custom/style.css" rel="stylesheet">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
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
