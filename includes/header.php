<!DOCTYPE html>
<html>
  <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Travel Agency - HTML5 Booking template</title>
	<?php include_once("constants.php"); ?>
	<script>
		var baseUrl = "<?php echo BASE_URL; ?>";
	</script>
    <!-- Bootstrap -->
    <link href="<?php echo BASE_URL;?>dist/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="<?php echo BASE_URL;?>assets/css/custom.css" rel="stylesheet" media="screen">

    <!-- Updates -->
    <link href="<?php echo BASE_URL;?>updates/update1/css/style01.css" rel="stylesheet" media="screen">	
	
    <!-- Carousel -->
	<link href="<?php echo BASE_URL;?>examples/carousel/carousel.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
	
    <!-- Fonts -->	
	<link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400,300,300italic' rel='stylesheet' type='text/css'>	
	<!-- Font-Awesome -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/font-awesome.css" media="screen" />
    <!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="assets/css/font-awesome-ie7.css" media="screen" /><![endif]-->
	
    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>css/fullscreen.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>rs-plugin/css/settings.css" media="screen" />

    <!-- Picker UI-->	
	<link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/jquery-ui.css" />		
	
    <!-- jQuery -->	
    <script src="<?php echo BASE_URL;?>assets/js/jquery.v2.0.3.js"></script>

	
    <!-- Masonry -->
	<link href="<?php echo BASE_URL;?>updates/update1/css/masonry.css" rel="stylesheet">
	<script src="<?php echo BASE_URL;?>updates/update1/js/masonry.pkgd.js"></script>
	<script>
	// http://masonry.desandro.com/masonry.pkgd.js added as external resource

	docReady( function() {

	  var container = document.querySelector('.masonry');
	  var button = document.querySelector('#toggle-button');
	  var msnry = new Masonry( container, {
		columnWidth: 2
	  });

	  var isActive = true;

	  eventie.bind( button, 'click', function() {
		if ( isActive ) {
		  msnry.destroy();
		} else {
		  msnry = new Masonry( container );
		}
		isActive = !isActive;
	  });

	});
	//@ sourceURL=pen.js
	</script>

	
  </head>
  <body id="top">
    
	<!-- Top wrapper -->			  
	<div class="navbar-wrapper3 navbar-fixed-top2">
      <div class="container">
		<div class="navbar mtnav2">

			<div class="container offset-3">
			  <!-- Navigation-->
			  <div class="navbar-header">
				<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
				<a href="index.html" class="navbar-brand"><img src="<?php echo BASE_URL;?>images/White-Water-Cruise-Logo.png" alt="Travel Agency Logo" class="logo2"/></a>
			  </div>
			  <div class="navbar-collapse collapse">
				<ul class="nav nav2 navlight navbar-nav navbar-right">
				  <li><a href="<?php echo BASE_URL;?>">Home</a></li>
				  <li class="dropdown">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">Packages <span class="badge indent0">3</span><b class="lightcaret mt-2"></b></a>
					<ul class="dropdown-menu posright-0">
					  <li>
							<div class="row dropwidth02">
								<ul class="droplist col-md-12">
								  <li><a href="<?php echo BASE_URL;?>packages\honey-moon\">Honeymoon Packages</a></li>
								  <li><a href="<?php echo BASE_URL;?>packages\house-boat\">Houseboat Packages</a></li>
								  <li><a href="<?php echo BASE_URL;?>packages\kerala-packages\">Kerala Packages</a></li>
								</ul>	
							</div>
					  </li>
					</ul>
				  </li>
				  <li><a href="<?php echo BASE_URL;?>reservations">Reservation</a></li>
				  <li><a href="<?php echo BASE_URL;?>gallery">Gallery</a></li>
				  <li><a href="<?php echo BASE_URL;?>about-us">About Us</a></li>
				  <li><a href="<?php echo BASE_URL;?>about-alleppey">About Alleppey</a></li>			  
				  <li><a href="<?php echo BASE_URL;?>contact-us">Contact Us</a></li>	
				</ul>
			  </div>
			  <!-- /Navigation-->			  
			</div>
		
        </div>
      </div>
    </div>
	<!-- /Top wrapper -->	

	
	