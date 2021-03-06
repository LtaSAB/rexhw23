<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hw23
 */
//
//if ( ! is_active_sidebar( 'sidebar-1' ) ) {
//	return;
//}
//?>

<!--	--><?php //dynamic_sidebar( 'sidebar-1' ); ?>
	<div class="col-lg-4 col-md-5 col-sm-12">
		<aside class="blog-right">
			<!-- Start Sidebar Single widget -->
			<div class="single-widget">
				<h2>Search</h2>
				<form class="blog-search">
					<input type="text">
					<button class="button button-default" data-text="Search" type="submit"><span>Search</span></button>
				</form>
			</div>
			<!-- End Sidebar Single widget -->
			<!-- Start Sidebar Single widget -->
			<div class="single-widget">
				<h2>Follow us on</h2>
				<div class="follow-us">
					<a class="facebook" href="#"><span class="fa fa-facebook"></span></a>
					<a class="twitter" href="#"><span class="fa fa-twitter"></span></a>
					<a class="google-plus" href="#"><span class="fa fa-google-plus"></span></a>
					<a class="youtube" href="#"><span class="fa fa-youtube"></span></a>
					<a class="linkedin" href="#"><span class="fa fa-linkedin"></span></a>
					<a class="dribbble" href="#"><span class="fa fa-dribbble"></span></a>
				</div>
			</div>
			<!-- End Sidebar Single widget -->
			<!-- Start Sidebar Single widget -->
			<div class="single-widget">
				<h2>Popular post</h2>
				<div class="popular-post-widget">
					<div class="media">
						<div class="media-left">
							<a href="blog-single.html">
								<img class="media-object" src="<?php echo get_template_directory_uri( ); ?>/images/popular-post-img.jpg" alt="img">
							</a>
						</div>
						<div class="media-body">
							<h4 class="media-heading"><a href="blog-single.html">A lonely flower</a></h4>
							<p>Sed ut perspiciatis omnis natus error sit voluptatem accusantium done.</p>
						</div>
					</div>
					<div class="media">
						<div class="media-left">
							<a href="blog-single.html">
								<img class="media-object" src="<?php echo get_template_directory_uri( ); ?>/images/popular-post-img.jpg" alt="img">
							</a>
						</div>
						<div class="media-body">
							<h4 class="media-heading"><a href="blog-single.html">A lonely flower</a></h4>
							<p>Sed ut perspiciatis omnis natus error sit voluptatem accusantium done.</p>
						</div>
					</div>
					<div class="media">
						<div class="media-left">
							<a href="blog-single.html">
								<img class="media-object" src="<?php echo get_template_directory_uri( ); ?>/images/popular-post-img.jpg" alt="img">
							</a>
						</div>
						<div class="media-body">
							<h4 class="media-heading"><a href="blog-single.html">A lonely flower</a></h4>
							<p>Sed ut perspiciatis omnis natus error sit voluptatem accusantium done.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- End Sidebar Single widget -->
			<!-- Start Sidebar Single widget -->
			<div class="single-widget">
				<h2>Instagram feed</h2>
				<div class="instagram-feed">
					<div class="single-instagram-feed">
						<img src="<?php echo get_template_directory_uri( ); ?>/images/instagram-feed-img.jpg" alt="img">
					</div>
					<div class="single-instagram-feed">
						<img src="<?php echo get_template_directory_uri( ); ?>/images/instagram-feed-img.jpg" alt="img">
					</div>
					<div class="single-instagram-feed">
						<img src="<?php echo get_template_directory_uri( ); ?>/images/instagram-feed-img.jpg" alt="img">
					</div>
				</div>
			</div>
			<!-- End Sidebar Single widget -->
			<!-- Start Sidebar Single widget -->
			<div class="single-widget">
				<h2>Subscribe to newslater</h2>
				<form class="blog-search">
					<input type="text">
					<button class="button button-default" data-text="Subscribe" type="submit"><span>Subscribe</span></button>
				</form>
			</div>
			<!-- End Sidebar Single widget -->
		</aside>
	</div><!-- #secondary -->
