<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package hw23
 */

get_header('secondary');
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="blog-left blog-details">
				<section id="blog-banner">
					<img src="<?php echo get_template_directory_uri( ); ?>/images/blog-banner.jpg" alt="img">
					<div class="blog-overlay">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="blog-banner-area">
										<h2>Blog Single</h2>
										<ol class="breadcrumb">
											<li><a href="index.html">Home</a></li>
											<li class="active">Blog Single</li>
										</ol>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section id="blog">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="blog-area">
									<div class="row">
										<div class="col-lg-8 col-md-7 col-sm-12">
											<div class="blog-left blog-details">
												<!-- Start single blog post -->
												<article class="single-from-blog">
													<?php
													while ( have_posts() ) : the_post();

														get_template_part( 'template-parts/content', 'single' );


														// If comments are open or we have at least one comment, load up the comment template.
														if ( comments_open() || get_comments_number() ) :
															comments_template();
														endif;

													endwhile; // End of the loop.
													?>
											</div>
										</div>
										<?php get_sidebar(); ?>
									</div>

								</div>

							</div>

						</div>
				</section>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
