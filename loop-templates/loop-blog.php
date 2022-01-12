<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

    $args = array(
        'post_type' => 'blog',
        'posts_per_page' => 4,
    );

    $loop = new WP_Query($args);
        
    if($loop->have_posts()):
        while($loop->have_posts(  )): $loop->the_post(); 
?>
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-">
        <a href="<?= the_permalink(  );?>">
            <div class="card blog__card--container">
                <div class="card-header blog__card--header">
                    <div class="blog__img--box">
                    <?php if( has_post_thumbnail( )):?>
                        <img src="<?= the_post_thumbnail_url( );?>" alt="">
                    <?php else:?>
                        <img src="https://via.placeholder.com/330x250" alt="">
                    <?php endif;?>
                    </div>
                </div>
                <div class="card-body blog__card--body">
                    <div class="blog__info">
                        <span class="blog__author"><?php the_author(); ?></span>
                        | Posted on
                        <span class="blog__time"><?php the_time( 'F j, Y' ); ?></span>
                        | 
                        <?php comment_counter(); ?>
                    </div>
                    <div class="blog__title">
                        <?php the_title();?>
                    </div>
                    <div class="blog__content--filter">
                        <?php the_excerpt(  );?>
                    </div>
                </div>
                
            </div>
        </a>
    </div>
<?php 
        endwhile;
        wp_reset_postdata(  );
    else:
        echo "NO DATA";
    endif;
   