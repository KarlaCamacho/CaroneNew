<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>Car One</title>
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="<?php bloginfo('template_url'); ?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

		<!-- REVOLUTION SLIDER -->
		<link href="<?php bloginfo('template_url'); ?>/plugins/slider.revolution/css/extralayers.css" rel="stylesheet" type="text/css" />
		<link href="<?php bloginfo('template_url'); ?>/plugins/slider.revolution/css/settings.css" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->
		<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php bloginfo('template_url'); ?>/css/layout.css" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="<?php bloginfo('template_url'); ?>/css/header-1.css" rel="stylesheet" type="text/css" />
		<link href="<?php bloginfo('template_url'); ?>/css/color_scheme/darkblue.css" rel="stylesheet" type="text/css" id="color_scheme" />

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<?php wp_head(); ?>

	</head>

	<!--
		AVAILABLE BODY CLASSES:
		
		smoothscroll 			= create a browser smooth scroll
		enable-animation		= enable WOW animations

		bg-grey					= grey background
		grain-grey				= grey grain background
		grain-blue				= blue grain background
		grain-green				= green grain background
		grain-blue				= blue grain background
		grain-orange			= orange grain background
		grain-yellow			= yellow grain background
		
		boxed 					= boxed layout
		pattern1 ... patern11	= pattern background
		menu-vertical-hide		= hidden, open on click
		
		BACKGROUND IMAGE [together with .boxed class]
		data-background="images/boxed_background/1.jpg"
	-->
	<body class="smoothscroll enable-animation">

		<!-- SLIDE TOP -->
		<div id="slidetop">

			<div class="container">
				
				<div class="row">

					<div class="col-md-4">
						<h6><i class="icon-heart"></i> POR QUE CARONE?</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. </p>
					</div>

					<div class="col-md-4">
						<h6><i class="icon-attachment"></i> RECENTLY VISITED</h6>
						<ul class="list-unstyled">
							<li><a href="#"><i class="fa fa-angle-right"></i> Consectetur adipiscing elit amet</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> This is a very long text, very very very very very very very very very very very very </a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> Dolor sit amet,consectetur adipiscing elit amet</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> Consectetur adipiscing elit amet,consectetur adipiscing elit</a></li>
						</ul>
					</div>

					<div class="col-md-4">
						<h6><i class="icon-envelope"></i> CONTACT INFO</h6>
						<ul class="list-unstyled">
							<li><b>Address:</b> PO Box 21132, Here Weare St, <br /> Melbourne, Vivas 2355 Australia</li>
							<li><b>Phone:</b> 1-800-565-2390</li>
							<li><b>Email:</b> <a href="mailto:support@yourname.com">support@yourname.com</a></li>
						</ul>
					</div>

				</div>

			</div>

			<a class="slidetop-toggle" href="#"><!-- toggle button --></a>

		</div>
		<!-- /SLIDE TOP -->


		<!-- wrapper -->
		<div id="wrapper">

			<!-- Top Bar -->
			<div id="topBar">
				<div class="container">

					<!-- right -->
					<ul class="top-links list-inline pull-right">
					<li class="text-welcome hidden-xs"><i class="fa fa-user hidden-xs"></i> Icon 1</li>
					<li class="text-welcome hidden-xs"><i class="fa fa-user hidden-xs"></i> Icon 2</li>
					<li class="text-welcome hidden-xs no-text-underline"><i class="fa fa-user hidden-xs"></i> Icon 3</li>
						<li>
							<a class="dropdown-toggle no-text-underline"  href="#"><i class="fa fa-user hidden-xs"></i> Icon 2</a>
							
						</li>
					</ul>

					<!-- left -->
					<ul class="top-links list-inline">
						<li class="hidden-xs"><a href="page-contact-1.html">CONTACTO</a></li>
						<li>
							<a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"> TALLER DE SERVICIO</a>
							
						</li>
						<li>
							<a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#">BOLSA DE TRABAJO</a>
							
						</li>
					</ul>

				</div>
			</div>
			<!-- /Top Bar -->


			<!-- 
				AVAILABLE HEADER CLASSES

				Default nav height: 96px
				.header-md 		= 70px nav height
				.header-sm 		= 60px nav height

				.noborder 		= remove bottom border (only with transparent use)
				.transparent	= transparent header
				.translucent	= translucent header
				.sticky			= sticky header
				.static			= static header
				.dark			= dark header
				.bottom			= header on bottom
				
				shadow-before-1 = shadow 1 header top
				shadow-after-1 	= shadow 1 header bottom
				shadow-before-2 = shadow 2 header top
				shadow-after-2 	= shadow 2 header bottom
				shadow-before-3 = shadow 3 header top
				shadow-after-3 	= shadow 3 header bottom

				.clearfix		= required for mobile menu, do not remove!

				Example Usage:  class="clearfix sticky header-sm transparent noborder"
			-->
			<div id="header" class="sticky  clearfix">

				<?php include('partials/nav.php') ?>

			</div>