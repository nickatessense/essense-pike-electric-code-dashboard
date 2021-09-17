<?php
	// Global Variables, will be available throughout header, footer, and page template files
	$current_user = wp_get_current_user();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

	<!-- Force IE to use the latest rendering engine available -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

	<nav id="mobile-nav">
		<div class="row align-center space-between padding-1">
			<h1 class="title font-fira-code">electric <span>code</span></h1>
			<span class="dashicons dashicons-menu"></span>
		</div>
	</nav>

	<div id="page-container" >

		<header id="main-sidebar" class="sidebar">

			<div class="sidebar-content">
				<h1 class="title font-fira-code">electric <span>code</span></h1>

				<img class="profile-img-circle" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">

				<h6 class="text-white">John Doe</h6>
				<p class="text-light-grey">johndoe@pike.com</p>

				<?php

				if (in_array('supervisor', $current_user->roles)) {
					wp_nav_menu([ 'menu' => 'supervisor-menu']);
				}else if (in_array('worker', $current_user->roles)) {
					wp_nav_menu([ 'menu' => 'worker-menu']);
				}

				?>

				</div>
		</header>