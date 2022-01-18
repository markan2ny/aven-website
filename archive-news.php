<?php
/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="archive-wrapper">
	<?php echo do_shortcode( '[fl_builder_insert_layout id="218"]' )?>
	<div class="<?php echo esc_attr( $container ); ?>" id="archive-content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php
				if ( have_posts() ) {
					// Start the loop.
                    $counter = 1;
					while ( have_posts() ) {
						the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						?>
                        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-12 d-flex justify-content-center flex-column <?php echo ($counter % 2 == 0) ? "order-md-last order-lg-last" : "order-md-first order-lg-first"; ?>">
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
                                        the_content( );
                                        understrap_link_pages();
                                        ?>

                                        <footer class="entry-footer">

                                        <?php understrap_edit_post_link(); ?>

                                        </footer><!-- .entry-footer -->

                                    </div><!-- .entry-content -->
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <?php
                                        if( has_post_thumbnail( $post->ID )) {
                                            echo get_the_post_thumbnail( $post->ID, 'large' );
                                        }
                                        else {
                                            ?>
                                            <img src="https://via.placeholder.com/540x338" alt="">
                                            <?php
                                        }
                                    ?>
                                    

                                </div>
                            
                            </div>	
                        </article><!-- #post-## -->
                        <?php
                        $counter++;
					}
				} else {
					get_template_part( 'loop-templates/content', 'none' );
				}
				?>

			</main><!-- #main -->

			<?php
			// Display the pagination component.
			understrap_pagination();
			// Do the right sidebar check.
			?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #archive-wrapper -->

<?php
get_footer();
