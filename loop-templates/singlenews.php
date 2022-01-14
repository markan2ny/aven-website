<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<article class="single-post-article" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    

<?php

        $img =  get_the_post_thumbnail( $post->ID, 'large' ); 

        if($img) {
            echo $img;
        }
        else {

            echo "<img src='https://via.placeholder.com/1000x700'/>";

        }

?>

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">

			<?php understrap_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->


	<div class="entry-content">

		<?php
		the_content();
		understrap_link_pages();
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer>
    <!-- .entry-footer -->

</article><!-- #post-## -->
