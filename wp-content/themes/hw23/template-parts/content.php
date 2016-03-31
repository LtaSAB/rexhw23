<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hw23
 */

?>
	<!--</article>-->
	<div class="col-md-4">
		<article id="post-<?php the_ID(); ?>" class="single-from-blog">
			<header class="entry-header">
				<figure>
					<a href="<?php the_post_thumbnail_url(); ?>"><?php the_post_thumbnail(); ?></a>
				</figure>
				<div class="blog-title">
					<?php
					if ( is_single() ) {
						the_title( '<h2 class="entry-title">', '</h2>' );
					} else {
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					}

					if ( 'post' === get_post_type() ) : ?>
						<div class="entry-meta">
							<p>Posted by <?php the_author_posts_link(); ?> on <span
									class="blog-date"><?php echo get_the_date(); ?></span></p>
						</div><!-- .entry-meta -->
						<?php
					endif; ?>
				</div>

			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php if ( is_single() ) { ?>
					<p><?php the_content(); ?> </p>
				<?php } else { ?>
					<p> <?php the_excerpt(); ?></p>
				<?php } ?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<div class="blog-footer">
					<a href="<?php the_permalink() ?>#comments"><span class="fa fa-comment"></span><?php comments_number( __( '0 Comments' ), __( '1 Comment' ), __( '% Comments' ) ); ?></a>
					<a href="#"><span class="fa fa-thumbs-o-up"></span>35 Likes</a>
				</div>
			</footer><!-- .entry-footer -->
		</article><!-- #post-## -->
	</div>