<?php
// do_shortcode( $content:string, $ignore_html:boolean )
// add_shortcode( $tag:string, $callback:callable )

function banner_shortcode( $atts ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'title' => 'null',
            'subtitle' => 'null'
		),
		$atts
	);

    // return "title = {$atts['title'] }";

}
add_shortcode( 'prod_banner', 'banner_shortcode' );
