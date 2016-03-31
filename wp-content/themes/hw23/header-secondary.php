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

	<!-- Start menu section -->
	<section id="menu-area">
		<div class="navbar navbar-default main-navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
					        aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- LOGO -->
					<?php
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title">
							<a class="navbar-brand logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img
									src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" alt="logo"></a>
						</h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img
									src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" alt="logo"></a>
						</p>
						<?php
					endif;
					?>

				</div>
				<div id="navbar" class="navbar-collapse collapse">

					<?php wp_nav_menu( array(
						'theme_location' => 'blog',
						'menu_id'        => ' ',
						'items_wrap'     => '<ul id="top-menu" class="nav navbar-nav menu-scroll">%3$s</ul>',
					) ); ?>
				</div>

				<div class="search-area">
					<form action="">
						<input id="search" name="search" type="text" placeholder="What're you looking for ?">
						<input id="search_submit" value="Rechercher" type="submit">
					</form>
				</div>
			</div>
			</nav>
		</div>
	</section>