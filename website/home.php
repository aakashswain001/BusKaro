<?php
ob_start();
session_start();
require_once 'dbconnect.php';

// it will never let you open index(login) page if session is set
if ( isset( $_SESSION[ 'user' ] ) == "" ) {
	header( "Location: index.php" );
	exit;
}
?>
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<title>Buskaro | One stop bus booking website</title>
	<meta name="description" content="Worthy a Bootstrap-based, Responsive HTML5 Template">
	<meta name="author" content="htmlcoder.me">

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<link rel="shortcut icon" href="images/favicon.ico">

	<!-- Web Fonts -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Raleway:700,400,300" rel="stylesheet" type="text/css">

	<!-- Bootstrap core CSS -->
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

	<!-- Font Awesome CSS -->
	<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

	<!-- Plugins -->
	<link href="css/animations.css" rel="stylesheet">

	<!-- Worthy core CSS file -->
	<link href="css/style.css" rel="stylesheet">

	<!-- Custom css -->
	<link href="css/custom.css" rel="stylesheet">

	<link href="css/myStyles.css" rel="stylesheet">

	<!-- Respomsive slider -->
	<link href="../css/responsive-calendar.css" rel="stylesheet">

	<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
	<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css"/>

	<!--Font Awesome (added because you use icons in your prepend/append)-->
	<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css"/>

	<!-- Inline CSS based on choices in "Settings" tab -->
	<style>
		.bootstrap-iso .formden_header h2,
		.bootstrap-iso .formden_header p,
		.bootstrap-iso form {
			font-family: Arial, Helvetica, sans-serif;
			color: black
		}
		
		.bootstrap-iso form button,
		.bootstrap-iso form button:hover {
			color: white !important;
		}
		
		.asteriskField {
			color: red;
		}
	</style>

	<script>
		$( '#myModal' ).modal( 'show' );
	</script>

</head>

<body class="no-trans">
	<!-- scrollToTop -->
	<!-- ================ -->
	<div class="scrollToTop"><i class="icon-up-open-big"></i>
	</div>
	<!-- -->

		<!-- header start -->
		<!-- ================ --> 
		<header class="header fixed clearfix navbar navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">

						<!-- header-left start -->
						<!-- ================ -->
						<div class="header-left clearfix" style="float: left">

							<!-- logo -->
							<div class="logo smooth-scroll">
								<a href="#banner"><img id="logo" src="images/logo.png" width="60" height="60" alt="Worthy"></a>
							</div>

							<!-- name-and-slogan -->
							<div class="site-name-and-slogan smooth-scroll">
								<div class="site-name">Buskaro</div>
								<div class="site-slogan">Your one stop bus booking website</div>
							</div>

						</div>
						<!-- header-left end -->

					</div>
					<div class="col-md-8">

						<!-- header-right start -->
						<!-- ================ -->
						<div class="header-right clearfix">

							<!-- main-navigation start -->
							<!-- ================ -->
							<div class="main-navigation animated">

								<!-- navbar start -->
								<!-- ================ -->
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid" style="float: right">

										<!-- Toggle get grouped for better mobile display -->
										<div class="navbar-header" style="clear: both; overflow: visible">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>

										<!-- Collect the nav links, forms, and other content for toggling -->
										<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
											<ul class="nav navbar-nav navbar-right">
												<li class="active"><a href="#banner">Home</a></li>
												<li><a href="#about">About</a></li>
												<li><a href="#contact">Contact</a></li>
												<li><a href="include/signout.php" >Sign Out</a></li>
											</ul>
										</div>

									</div>
								</nav>
								<!-- navbar end -->

							</div>
							<!-- main-navigation end -->

						</div>
						<!-- header-right end -->

					</div>
				</div>
			</div>
		</header>
		<!-- header end -->
	<!-- -->
	<?php
	include 'include/banner.php';
	?>
	<!-- -->
	<?php
	include 'include/about.php';
	?>

	
	<!-- footer start -->
	<?php 
	include 'include/footer.php';
	?>
	<!-- ================ -->
	
	<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
	<!-- Jquery and Bootstap core js files -->
	<script type="text/javascript" src="plugins/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

	<!-- Modernizr javascript -->
	<script type="text/javascript" src="plugins/modernizr.js"></script>

	<!-- Isotope javascript -->
	<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>

	<!-- Backstretch javascript -->
	<script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>

	<!-- Appear javascript -->
	<script type="text/javascript" src="plugins/jquery.appear.js"></script>

	<!-- Initialization of Plugins -->
	<script type="text/javascript" src="js/template.js"></script>

	<!-- Custom Scripts -->
	<script type="text/javascript" src="js/custom.js"></script>

	<script src="js/responsive-calendar.js" type="text/javascript"></script>


	<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
	<!-- Include jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

	<!-- Include Date Range Picker -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
	<script>
		$( document ).ready( function () {
			var date_input = $( 'input[name="date"]' ); //our date input has the name "date"
			var container = $( '.bootstrap-iso form' ).length > 0 ? $( '.bootstrap-iso form' ).parent() : "body";
			date_input.datepicker( {
				format: 'dd/mm/yyyy',
				container: container,
				todayHighlight: true,
				autoclose: true,
			} )
			date_input.datepicker.css( 'zIndex', 999999 );
		} );
	</script>
</body>
</html>
