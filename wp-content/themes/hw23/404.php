<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package hw23
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- Start error page -->
			<section id="error-page">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="error-page-area">
								<div class="error-no-area">
									<div class="error-no">
										<h2>404 Error</h2>
										<p>Sorry</p>
									</div>
								</div>
							</div>
							<div class="error-message">
								<h4>Woops! Something gone wrong</h4>
								<p>Sorry, the page you have requested has either been moved,or does not exist, Return to our <a href="index.html">homepage</a>.</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End error page -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
