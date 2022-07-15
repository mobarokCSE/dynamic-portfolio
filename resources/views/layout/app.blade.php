<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Title -->
	<title>Mobarok Portfolio</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	{{-- <meta name="description" content="Responsive  HTML5 Website Template">
	<meta name="author" content="themetorium.net"> --}}

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon (http://www.favicon-generator.org/) --> 
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- Google fonts (https://www.google.com/fonts) -->
	<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet"> <!-- Global font -->
	<link href="https://fonts.googleapis.com/css?family=Galada" rel="stylesheet"> <!-- Alter font 1 -->
	<link href="https://fonts.googleapis.com/css?family=Bilbo+Swash+Caps" rel="stylesheet"> <!-- Alter font 2 -->

	<!-- Bootstrap CSS (http://getbootstrap.com) -->
	<link rel="stylesheet" href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}">
	<!-- bootstrap CSS (http://getbootstrap.com) -->

	<!-- Libs and Plugins CSS -->
	<link rel="stylesheet" href="{{asset('frontend/vendor/animsition/css/animsition.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/vendor/lightgallery/css/lightgallery.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/vendor/owl-carousel/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/vendor/owl-carousel/css/owl.theme.default.min.css')}}">
	<!-- Owl Carousel CSS (http://www.owlcarousel.owlgraphic.com) -->
	<link rel="stylesheet" href="{{asset('frontend/vendor/ytplayer/css/jquery.mb.YTPlayer.min.css')}}">
	<!-- YTPlayer CSS (more info: https://github.com/pupunzi/jquery.mb.YTPlayer) -->
	<link rel="stylesheet" href="{{asset('frontend/vendor/animate.min.css')}}"> <!-- Animate libs CSS (http://daneden.me/animate) -->

	<!-- Template master CSS --> 
	<link rel="stylesheet" href="{{asset('frontend/css/helper.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/theme.css')}}">

	<!-- Template dark style CSS (uncomment to enable dark style) -->
	<!-- <link rel="stylesheet" href="assets/css/dark-style.css"> -->

</head>

<!-- ===========
	///// Body ///// 
	================
	* Add class "temp-uppercase" to enable uppercase letters (eg. headings, menu links).
	* Add class "temp-letter-spacing" to enable spacing between letters (eg. headings, menu links).
	* Use class "temp-grayscale" to enable grayscale effect when menu is open (no effect on all browsers!).
	* Add class "animsition" to enable page transition while page loads.
	-->

<body class="temp-uppercase temp-grayscale animsition">


	<!-- Page cover (if menu is open) -->
	<span class="page-cover"></span>


	<!-- ===================
		///// Begin header /////
		========================
		* Add class "header-dark" to enable header dark style.
		* Use class "header-click", "header-hover" or "header-fixed" to change behavior of the header (one of them is required!).
		-->
	@include('partial.header')
	<!-- End header -->


	<!-- ==========================
		///// Begin mobile header /////
		===============================
		* Add class "m-header-dark" to enable header dark style.
		-->
	@include('partial.mobileheader')
	<!-- End mobile header -->


	<!-- *************************************
		*********** Begin body content *********** 
		************************************** -->
	<div id="body-content">

		<!-- =================================
			///// Begin gallery list section /////
			================================== -->
		@yield('content')
		<!-- End gallery list section -->

	</div>
	<!-- End body content -->





	<!-- ====================
		///// Scripts below /////
		===================== -->

	<!-- Core JS -->
	<script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.min.js')}}"></script> 

	<!-- Libs and Plugins JS -->
	<script src="{{asset('frontend/vendor/animsition/js/animsition.min.js')}}"></script>
	<script src="{{asset('frontend/vendor/jquery.easing.min.js')}}"></script>
	<script src="{{asset('frontend/vendor/isotope.pkgd.min.js')}}"></script>
	<script src="{{asset('frontend/vendor/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{asset('frontend/vendor/jquery.nicescroll.min.js')}}"></script>
	<script src="{{asset('frontend/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('frontend/vendor/jquery.mousewheel.min.js')}}"></script>
	<script src="{{asset('frontend/vendor/ytplayer/js/jquery.mb.YTPlayer.min.js')}}"></script>

	<script src="{{asset('frontend/vendor/lightgallery/js/lightgallery.min.js')}}"></script>
	<script src="{{asset('frontend/vendor/lightgallery/js/lightgallery-plugins.js')}}"></script>

	<!-- Theme master JS -->
	<script src="{{asset('frontend/js/theme.js')}}"></script>
 
	<!-- <div class="style-switcher')}}">
			<div class="sw-light"><i class="fas fa-sun"></i></div>
			<div class="sw-dark"><i class="far fa-moon"></i></div>
		</div> -->



</body>

</html>