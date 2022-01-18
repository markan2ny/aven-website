<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="row ">
		<div class="col-lg-6 col-md-6 col-12">
			<header class="entry-header">

				<?php
				the_title(
					sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
					'</a></h2>'
				);
				?>
				
				<?php if ( 'post' === get_post_type() ) : ?>

					<div class="entry-meta">
						<?php understrap_posted_on(); ?>
					</div><!-- .entry-meta -->

				<?php endif; ?>

			</header><!-- .entry-header -->


			<div class="entry-content">

				<?php
				the_content();
				understrap_link_pages();
				?>

				<footer class="entry-footer">

				<?php understrap_edit_post_link(); ?>

				</footer><!-- .entry-footer -->

			</div><!-- .entry-content -->
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
		</div>
	
	</div>	
</article><!-- #post-## -->
