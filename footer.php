<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$container = get_theme_mod( 'understrap_container_type' );

?>

<footer class="footer">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <div class="aboutus">
                <h1>AVEN <span>FASHION</span></h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi adipisci alias et nulla harum debitis enim quia suscipit ducimus accusantium!</p>
                <ul class="sci">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <div class="quicklinks">
                <h1>Quick <span>Links</span></h1>
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location'  => 'primary',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id'    => 'navbarNavDropdown',
                            'menu_class'      => 'navbar-nav ml-auto',
                            'fallback_cb'     => '',
                            'menu_id'         => 'main-menu',
                            'depth'           => 2,
                            'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                        )
                    );
				?>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <div class="aboutus">
                <h1>SAMPLE</h1>
            </div>
        </div>
    </div>
     
</footer>


<?php wp_footer(); ?>

</body>

</html>

