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

				<article id="post-<?php the_ID(); ?>" class="single-from-blog">
					<header class="entry-header">

						<div class="blog-title">
							<?php
							the_title( '<h2 class="entry-title">', '</h2>' );
							if ( 'post' === get_post_type() ) : ?>
								<div class="entry-meta">
									<p>Posted by <?php the_author_posts_link(); ?> on <span
											class="blog-date"><?php echo get_the_date(); ?></span></p>
								</div><!-- .entry-meta -->
								<?php
							endif; ?>
						</div>
						<figure>
							<a href="<?php the_post_thumbnail_url(); ?>"><?php the_post_thumbnail(); ?></a>
						</figure>

					</header><!-- .entry-header -->

					<div class="blog-details-content">
						<?php if ( is_single() ) { ?>
							<p><?php the_content(); ?> </p>
						<?php } else { ?>
							<p> <?php the_excerpt(); ?></p>
						<?php } ?>
					</div><!-- .entry-content -->

					<footer class="entry-footer">
						<div class="blog-footer">
						</div>
					</footer><!-- .entry-footer -->
				</article><!-- #post-## -->
	