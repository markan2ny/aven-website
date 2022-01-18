<?php
/**
 * Search results partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="search-per-result">
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
		
		<div class="entry-summary">

			<?php the_excerpt(); ?>

		</div><!-- .entry-summary -->
		
	</div>
</article><!-- #post-## -->
