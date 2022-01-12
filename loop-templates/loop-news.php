<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$args = array(
    'post_type' => 'news',
    'posts_per_page' => 3,
);

$loop = new WP_Query($args);
        
if($loop->have_posts()):
    while($loop->have_posts(  )): $loop->the_post(); 
?>
<div class="col-lg-4 col-md-4">
    <div class="news__grid">
        <div class="news__grid-img">
            <?php if( has_post_thumbnail( )):?>
                <img src="<?= the_post_thumbnail_url( );?>" alt="">
            <?php else:?>
                <img src="https://via.placeholder.com/330x250" alt="">
            <?php endif;?>
            <div class="news__grid-box">
                <h1><?php the_time( 'j' ); ?></h1>
                <p><?php the_time( 'M' ); ?></p>
            </div>
        </div>
        <div class="news__grid-txt">
            <span>Announcement</span>
            <h2><?php the_title(); ?></h2>
            <ul>
                <li><i class="fa fa-calendar"></i> <?php the_time( 'M j, Y' ); ?></li>
                <li><i class="fa fa-user" aria-hidden="true"></i> <?php the_author(); ?></li>
            </ul>
            <?php the_excerpt(  ); ?>
            <!-- <a href="#">Read More</a> -->
        </div>
    </div> 
</div>
<?php 
endwhile;
    wp_reset_postdata(  );
else:
?>
    <div class="col-lg-4 col-md-4 col-sm-12 offset-md-4">

<?php
    echo '<h1 class="text-muted text-center mt-5">NO NEWS FOUND!</h1>';
?>
    </div>
<?php
endif;
    