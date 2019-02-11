

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
<link href="assets/css/custom/owl.carousel.min.css" rel="stylesheet">
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>


</head>
	<body>
	
	<?php
	include 'include/header.php';
	if(isset($_GET['pg']))
	{
	switch($_GET['pg']){
		case 'home':
			include 'pages/blessingcarousel.php';
			include 'pages/upcomingevents.php';
			include 'pages/transforminglive.php';
			include 'pages/aboutthechurch.php';
			include 'pages/latestsermons.php';
			include 'pages/takemetochurch.php';
			include 'pages/latestblogs.php';
			include 'pages/gallery.php';
		





		break;

	 	case 'about':
		include 'pages/about.php';
		break;

		case 'gallery':
		include 'pages/gallery.php';
		break;


		case 'sermons':
		include 'pages/sermons.php';
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
		
		case 'track':
		include 'pages/track.php';
		break;
		
		
		case 'track_status':
		include 'pages/track_status.php';
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
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="assets/css/custom/owl.carousel.min.js"></script>

<script>

$('#banner').owlCarousel({
	animateOut: 'fadeOut',
	animateIn: 'fadeIn',
    loop:true,
   autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,

    responsive:{
        0:{
            items:1,
	    
        },
        600:{
            items:1,
	},
        1000:{
            items:1,
	 
      }
    }
});


$('#first').owlCarousel({
loop:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        }
    }
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
});
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
});


$('#second').owlCarousel({
loop:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        }
    }
});

</script>

</html>
