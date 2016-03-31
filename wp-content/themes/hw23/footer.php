<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hw23
 */

?>
<footer id="footer">
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="footer-top-area">
						<a class="footer-logo" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" alt="Logo"></a>
						<div class="footer-social">
							<a class="facebook" href="#"><span class="fa fa-facebook"></span></a>
							<a class="twitter" href="#"><span class="fa fa-twitter"></span></a>
							<a class="google-plus" href="#"><span class="fa fa-google-plus"></span></a>
							<a class="youtube" href="#"><span class="fa fa-youtube"></span></a>
							<a class="linkedin" href="#"><span class="fa fa-linkedin"></span></a>
							<a class="dribbble" href="#"><span class="fa fa-dribbble"></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<p>Designed by <a href="http://www.markups.io/">MarkUps.io</a></p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>