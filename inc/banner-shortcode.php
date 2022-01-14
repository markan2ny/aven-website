<?php

function other_post($atts){

ob_start();
?>
<?php 
$param = shortcode_atts(array(
'post_type'=> 'news'
),$atts);

$placeholder = get_field('place_holder','option');

$post_id = get_the_id();
$args = array(
'post_type' => $param['post_type'],
'posts_per_page' => 5
);
$pt = get_post_type_object( $param['post_type'] );


// This one holds the post type name in singular.
$post_name = $pt->labels->singular_name;

$query = new WP_Query( $args );
if ( $query->have_posts() ) :
?>
<div class="recent_post">
	<div class="recent_title">
		<h3> Recent <?php echo $post_name; ?> </h3>
	</div>
	<?php 
	while ( $query->have_posts() ) : $query->the_post();
		$postID = get_the_ID();
		$posttitle = get_the_title();
		$postdate = get_the_date();
		$postthumb = get_the_post_thumbnail_url($postID,'thumbnail');
		$postexcerpt = get_the_excerpt();
		$postcontent = get_the_content();
		$postlink = get_permalink($postID);
		?>
		<?php if ($post_id != $postID) : ?>
			<div class="row other-tip-row">
				<div class="col-4 postthumb">
					<a href="<?php echo esc_url($postlink); ?>">
						<?php if ($postthumb) : ?>
							<?php 
							echo '<img src="'.$postthumb.' " alt="post-'.$posttitle.' ?>" class="img-fluid">';
							?>
							<?php else : ?>
								<?php 
								echo '<img src="'.$placeholder['url'].' " alt="post-'.$posttitle.' ?>" class="img-fluid">';
								?>
							<?php endif;  ?>
						</a>
					</div>
					<div class="col-8 post_title_date">
						<a href="<?php echo esc_url($postlink); ?>">
							<p class="stitle"><?php echo esc_html($posttitle); ?></p>
							<p class="sdate"><?php echo esc_html($postdate); ?></p>
						</a>
					</div>
				</div>
			<?php endif;  ?>
			<?php 
		endwhile;
		?>
		<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
	<?php else: ?>
		<h1>No posts found</h1>
	<?php endif; ?>   
	<?php
	return ob_get_clean();

}
add_shortcode( 'other_post', 'other_post' );