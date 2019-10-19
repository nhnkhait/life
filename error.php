<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">

<head>
	<!-- Basic need -->
	<title>Cinema In Your Home</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="profile" href="#">
	<link rel="icon" href="images/favicon.png" type="image/png">
    <!--Google Font-->
    <!-- <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' /> -->
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
	<!-- Mobile specific meta -->
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone-no">

	<!-- BEGIN | CSS files -->
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- END CSS files -->

</head>


<body>
<!--BEGIN | preloading-->
<div id="preloader">
    <img class="logo" src="images/logo.png" alt="" width="400" height="200">
    <div id="status">
        <span></span>
        <span></span>
    </div>
</div>
<!--END | preloading-->


<!--BEGIN | login form popup-->
	<?php require "login.php"?>
<!--END | login form popup-->


<!--BEGIN | signup form popup-->
	<?php require "sign-up.php"?>
<!--END |  signup form popup-->

<!-- BEGIN | Header -->
<header class="ht-header">
	<?php require "header.php" ?>
</header>
<!-- END | Header -->
	
<!-- BEGIN | Slider-Items -->
	<?php require "slider-items.php"?>
<!-- END | Slider-Items -->

<!-- BEGIN | movie-items -->
	<?php require "error-movie-items.php"?>
<!-- END | movie-items -->

<!-- BEGIN | Trailers -->
	<?php require "trailers.php"?>
<!-- END | Trailers -->


<!-- BEGIN | latest new v1 section-->
	<?php require "news.php"?>
<!-- END | latest new v1 section-->


<!-- BEGIN | footer section-->
	<?php require "footer.php"?>
<!-- END | footer section-->

<!-- BEGIN | Script -->
<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/plugins2.js"></script>
<script src="js/custom.js"></script>
<!-- END | Script -->

</body>
</html>
