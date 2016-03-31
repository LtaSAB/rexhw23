<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hw23
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Rex : Home</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!-- BEGAIN PRELOADER -->
	<div id="preloader">
		<div class="loader">&nbsp;</div>
	</div>
	<!-- END PRELOADER -->

	<!-- SCROLL TOP BUTTON -->
	<a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
	<!-- END SCROLL TOP BUTTON -->
	<!-- Start header section -->
	<header id="header">
		<div class="header-inner">
			<!-- Header image -->
			<img src="<?php echo get_template_directory_uri()?>/images/header-bg.jpg" alt="img">
			<div class="header-overlay">
				<div class="header-content">
					<!-- Start header content slider -->
					<h2 class="header-slide">WE GENERATE
						<span>MOST CREATIVE</span>
						<span>MOST Design</span>
						<span>MOST Valuable</span>
						IDEA</h2>
					<!-- End header content slider -->
					<!-- Header btn area -->
					<div class="header-btn-area">
						<a class="knowmore-btn" href="#">KNOW MORE</a>
						<a class="download-btn" href="#">DOWNLOAD Theme</a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Start menu section -->
	<section id="menu-area">
		<nav class="navbar navbar-default main-navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- LOGO -->
					<?php
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title">
							<a class="navbar-brand logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri();?>/images/logo.jpg" alt="logo"></a>
						</h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri();?>/images/logo.jpg" alt="logo"></a></p>
						<?php
					endif;
					?>

				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#about">ABOUT</a></li>
						<li><a href="#team">TEAM</a></li>
						<li><a href="#service">SERVICE</a></li>
						<li><a href="#portfolio">PORTFOLIO</a></li>
						<li><a href="#pricing-table">PRICE </a></li>
						<li><a href="#from-blog">BLOG </a></li>
						<li><a href="#contact">CONTACT</a></li>
					</ul>
				</div><!--/.nav-collapse -->
				<div class="search-area">
					<form action="">
						<input id="search" name="search" type="text" placeholder="What're you looking for ?">
						<input id="search_submit" value="Rechercher" type="submit">
					</form>
				</div>
			</div>
		</nav>
	</section>
	<!-- End menu section -->
	<!-- End header section -->
<!--	<header id="header" class="site-header" role="banner">-->
<!--		<nav id="site-navigation" class="main-navigation" role="navigation">-->
<!--			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">--><?php //esc_html_e( 'Primary Menu', 'hw23' ); ?><!--</button>-->
<!--			--><?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
<!--		</nav><!-- #site-navigation -->
<!--	</header><!-- #masthead -->

	<div id="content" class="site-content">
