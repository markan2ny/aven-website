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
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12">
                <div class="aboutus">
                    <h1>AVEN <span>FASHION</span></h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi adipisci alias et nulla harum debitis enim quia suscipit ducimus accusantium!</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi adipisci alias et nulla harum debitis enim quia suscipit ducimus accusantium!</p>
                    <ul class="sci">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-12">
                <div class="quicklinks">
                    <h1>Quick <span>Links</span></h1>
                    <?php
                        $menu_args = array(
                        'menu_class' => 'footer_menu',
                        'menu_id' => 'footer_menu',
                        'theme_location' => 'footer'
                        );
                        wp_nav_menu( $menu_args );
                    ?>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="contact">
                    <h1>Contact <span>Us</span></h1>
                    <ul class="info">
                        <li>
                            <span><i class="fa fa-map-marker" aria-hidden="true"></i> </span>
                            <span> 1072 JP. Rizal St. Sta. Barbara <br>Baliuag, Bulacan</span>
                        </li>
                        <li>
                            <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                            <span><a href="mailto: hrdepartment@avenfashion.com.ph">hrdepartment@avenfashion.com.ph</a></span>
                        </li>
                        <li>
                            <span><i class="fa fa-phone-square" aria-hidden="true"></i></span>
                            <span><a href="tel:(044)7665536">(044) 766 5536</a></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-12">
                <div class="maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3854.8760745778113!2d120.8898361510491!3d14.943996072522676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33965530fccdd007%3A0xd3fde8cef83be6eb!2sAven%20Fashion%20Manufacturing%2C%20Inc.!5e0!3m2!1sen!2sph!4v1642659094730!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyrightTxt">
    <p>Copyright &copy; 2022 AVEN FASHION MANUFACTURING INC. All Rights Reserved.</p>
</div>

<?php wp_footer(); ?>

</body>

</html>

