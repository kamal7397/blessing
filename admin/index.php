
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

<link href="../assets/css/custom/owl.carousel.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="../assets/css/custom/style.css" rel="stylesheet">

</head>
<body>
<?php ob_start();
session_start();

include 'include/connect.php';
include 'include/functions.php';
include 'include/links.php';

	if(!isset($_SESSION['username'])){
		header('location:../index.php?pg=login');	
	}
	if($_SESSION['type']=="users"){
		header('location:../users/index.php?pg=profile');
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

		case 'sermons':
		include 'pages/sermons.php';
		break;

		case 'donation':
		include 'pages/donation.php';
		break;

		case 'prayers':
		include 'pages/prayers.php';
		break;

		case 'updatePrayer':
		include 'pages/updatePrayer.php';
		break;


		case 'updateRecord':
		include 'pages/updateRecord.php';
		break;


		case 'gallery':
		include 'pages/gallery.php';
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

</body>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="../assets/css/custom/owl.carousel.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

</html>