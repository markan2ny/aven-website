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

?>

<div class="footer">
    <div class="footer__container container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <div class="footer__company--details">
                <img src="<?php echo bloginfo( 'template_directory' )."/img/1.png"?>" alt="">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero recusandae</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-6">
            <div class="footer__subsidiary">
                <h3>Subsidiary</h3>
                <ul>
                    <li>TELADEORO</li>
                    <li>TELADEORO</li>
                    <li>STA. ROSTA</li>
                    <li>STA. ROSTA</li>
                    <li>PEACH</li>
                    <li>PEACH</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-6">
            <div class="footer__company--address">
                <h3>Address</h3>
                <ul>
                    <li><i class="fa fa-location-arrow" aria-hidden="true"></i> 127 Rizal Street</li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i> +6399 999 9999</li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Baliwag, Bulacan</li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    <div class="footer__IT--Mark">
        <p>Design and Develop by <span>AVEN | I.T DEPARTMENT</span>. All right reserved 2022</p>
    </div>
</div>


<?php wp_footer(); ?>

</body>

</html>

