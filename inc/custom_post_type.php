<?php

// Register Post Type
function webt_post_type()
{
    // Change variables base on post type you are registering
    // $labels = array(
	// 	'name'               => __( 'Plural Name', 'web' ),
	// 	'singular_name'      => __( 'Singular Name', 'web' ),
	// 	'add_new'            => _x( 'Add New Singular Name', 'web', 'web' ),
	// 	'add_new_item'       => __( 'Add New Singular Name', 'web' ),
	// 	'edit_item'          => __( 'Edit Singular Name', 'web' ),
	// 	'new_item'           => __( 'New Singular Name', 'web' ),
	// 	'view_item'          => __( 'View Singular Name', 'web' ),
	// 	'search_items'       => __( 'Search Plural Name', 'web' ),
	// 	'not_found'          => __( 'No Plural Name found', 'web' ),
	// 	'not_found_in_trash' => __( 'No Plural Name found in Trash', 'web' ),
	// 	'parent_item_colon'  => __( 'Parent Singular Name:', 'web' ),
	// 	'menu_name'          => __( 'Plural Name', 'web' ),
	// );

	// $args = array(
	// 	'labels'              => $labels,
	// 	'hierarchical'        => false,
	// 	'description'         => 'description',
	// 	'taxonomies'          => array(),
	// 	'public'              => true,
	// 	'show_ui'             => true,
	// 	'show_in_menu'        => true,
	// 	'show_in_admin_bar'   => true,
	// 	'menu_position'       => null,
	// 	'menu_icon'           => null,
	// 	'show_in_nav_menus'   => true,
	// 	'publicly_queryable'  => true,
	// 	'exclude_from_search' => false,
	// 	'has_archive'         => true,
	// 	'query_var'           => true,
	// 	'can_export'          => true,
	// 	'rewrite'             => true,
	// 	'capability_type'     => 'post',
	// 	'supports'            => array(
	// 		'title',
	// 		'editor',
	// 		'author',
	// 		'thumbnail',
	// 		'excerpt',
	// 		'custom-fields',
	// 		'trackbacks',
	// 		'comments',
	// 		'revisions',
	// 		'page-attributes',
	// 		'post-formats',
	// 	),
	// );
	// register_post_type( 'slug', $args );






	/* Products */
	// $products_labels = array(
	// 	'name'               => __( 'Products', 'web' ),
	// 	'singular_name'      => __( 'Products', 'web' ),
	// 	'add_new'            => _x( 'Add New Product', 'web', 'web' ),
	// 	'add_new_item'       => __( 'Add New Product', 'web' ),
	// 	'edit_item'          => __( 'Edit Product', 'web' ),
	// 	'new_item'           => __( 'New Product', 'web' ),
	// 	'view_item'          => __( 'View Products', 'web' ),
	// 	'search_items'       => __( 'Search Products', 'web' ),
	// 	'not_found'          => __( 'No Products found', 'web' ),
	// 	'not_found_in_trash' => __( 'No Products found in Trash', 'web' ),
	// 	'parent_item_colon'  => __( 'Parent Products:', 'web' ),
	// 	'menu_name'          => __( 'Products', 'web' ),
	// );

	// $products_slug = array(
	// 	'labels'              => $products_labels,
	// 	'hierarchical'        => false,
	// 	'description'         => 'description',
	// 	'taxonomies'          => array(),
	// 	'public'              => true,
	// 	'show_ui'             => true,
	// 	'show_in_menu'        => true,
	// 	'show_in_admin_bar'   => true,
	// 	'menu_position'       => null,
	// 	'menu_icon'           => 'dashicons-products',
	// 	'show_in_nav_menus'   => true,
	// 	'publicly_queryable'  => true,
	// 	'exclude_from_search' => false,
	// 	'has_archive'         => true,
	// 	'query_var'           => true,
	// 	'can_export'          => true,
	// 	'rewrite'             => true,
	// 	'capability_type'     => 'post',
	// 	// 'register_meta_box_cb'=> 'web_add_metabox', //add metabox
	// 	'supports'            => array(
	// 		'title',
	// 		'editor',
	// 		'author',
	// 		'thumbnail',
	// 		'excerpt',
	// 		'revisions',
	// 	),
	// );
	// register_post_type( 'products', $products_slug );




	/*  Careers */
	$clinical_trials_labels = array(
		'name'               => __( 'News', 'web' ),
		'singular_name'      => __( 'News', 'web' ),
		'add_new'            => _x( 'Add New News', 'web', 'web' ),
		'add_new_item'       => __( 'Add New News', 'web' ),
		'edit_item'          => __( 'Edit News', 'web' ),
		'new_item'           => __( 'New News', 'web' ),
		'view_item'          => __( 'View News', 'web' ),
		'search_items'       => __( 'Search News', 'web' ),
		'not_found'          => __( 'No News found', 'web' ),
		'not_found_in_trash' => __( 'No News found in Trash', 'web' ),
		'parent_item_colon'  => __( 'Parent News:', 'web' ),
		'menu_name'          => __( 'News', 'web' ),
	);

	$clinical_trials_slug = array(
		'labels'              => $clinical_trials_labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-book-alt',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'           => array( 'slug' => 'clinical-trial' ),
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			'author',
			'thumbnail',
			'excerpt',
			'revisions',
		),
	);
	register_post_type( 'clinical_trials', $clinical_trials_slug);





	/*  Careers */
	$news_labels = array(
		'name'               => __( 'News', 'web' ),
		'singular_name'      => __( 'News', 'web' ),
		'add_new'            => _x( 'Add News', 'web', 'web' ),
		'add_new_item'       => __( 'Add News', 'web' ),
		'edit_item'          => __( 'Edit News', 'web' ),
		'new_item'           => __( 'New News', 'web' ),
		'view_item'          => __( 'View News', 'web' ),
		'search_items'       => __( 'Search News', 'web' ),
		'not_found'          => __( 'No News found', 'web' ),
		'not_found_in_trash' => __( 'No News found in Trash', 'web' ),
		'parent_item_colon'  => __( 'Parent News:', 'web' ),
		'menu_name'          => __( 'News', 'web' ),
	);

	$news_slug = array(
		'labels'              => $news_labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-book-alt',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'           => array( 'slug' => 'news_list' ),
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			'author',
			'thumbnail',
			'excerpt',
			'revisions',
		),
	);
	register_post_type( 'news', $news_slug);






	/*  Careers */
	$careers_labels = array(
		'name'               => __( 'Careers', 'web' ),
		'singular_name'      => __( 'Career', 'web' ),
		'add_new'            => _x( 'Add New Career', 'web', 'web' ),
		'add_new_item'       => __( 'Add New Career', 'web' ),
		'edit_item'          => __( 'Edit Career', 'web' ),
		'new_item'           => __( 'New Career', 'web' ),
		'view_item'          => __( 'View Careers', 'web' ),
		'search_items'       => __( 'Search Careers', 'web' ),
		'not_found'          => __( 'No Careers found', 'web' ),
		'not_found_in_trash' => __( 'No Careers found in Trash', 'web' ),
		'parent_item_colon'  => __( 'Parent Careers:', 'web' ),
		'menu_name'          => __( 'Careers', 'web' ),
	);

	$careers_slug = array(
		'labels'              => $careers_labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-book-alt',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'           => array( 'slug' => 'career_list' ),
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			// 'editor',
			'author',
			// 'thumbnail',
			// 'excerpt',
			'revisions',
		),
	);
	register_post_type( 'careers', $careers_slug);




	/*  Partner Sites */
	$partner_labels = array(
		'name'               => __( 'Partner Sites', 'web' ),
		'singular_name'      => __( 'Partner Site', 'web' ),
		'add_new'            => _x( 'Add New Partner Site', 'web', 'web' ),
		'add_new_item'       => __( 'Add New Partner Site', 'web' ),
		'edit_item'          => __( 'Edit Partner Site', 'web' ),
		'new_item'           => __( 'New Partner Site', 'web' ),
		'view_item'          => __( 'View Partner Sites', 'web' ),
		'search_items'       => __( 'Search Partner Sites', 'web' ),
		'not_found'          => __( 'No Partner Sites found', 'web' ),
		'not_found_in_trash' => __( 'No Partner Sites found in Trash', 'web' ),
		'parent_item_colon'  => __( 'Parent Partner Sites:', 'web' ),
		'menu_name'          => __( 'Partner Site', 'web' ),
	);

	$partner_slug = array(
		'labels'              => $partner_labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-book-alt',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		// 'rewrite'           => array( 'slug' => 'career_list' ),
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			'author',
			'thumbnail',
			'excerpt',
			'revisions',
		),
	);
	register_post_type( 'partner-site', $partner_slug);


}
add_action( 'init', 'webt_post_type' );






// Register Taxonomy
function webt_taxonomy()
{
	// Taxonomy
	// $labels = array(
	// 	'name'                  => _x( 'Plural Name', 'Taxonomy plural name', 'text-domain' ),
	// 	'singular_name'         => _x( 'Singular Name', 'Taxonomy singular name', 'text-domain' ),
	// 	'search_items'          => __( 'Search Plural Name', 'text-domain' ),
	// 	'popular_items'         => __( 'Popular Plural Name', 'text-domain' ),
	// 	'all_items'             => __( 'All Plural Name', 'text-domain' ),
	// 	'parent_item'           => __( 'Parent Singular Name', 'text-domain' ),
	// 	'parent_item_colon'     => __( 'Parent Singular Name', 'text-domain' ),
	// 	'edit_item'             => __( 'Edit Singular Name', 'text-domain' ),
	// 	'update_item'           => __( 'Update Singular Name', 'text-domain' ),
	// 	'add_new_item'          => __( 'Add New Singular Name', 'text-domain' ),
	// 	'new_item_name'         => __( 'New Singular Name Name', 'text-domain' ),
	// 	'add_or_remove_items'   => __( 'Add or remove Plural Name', 'text-domain' ),
	// 	'choose_from_most_used' => __( 'Choose from most used Plural Name', 'text-domain' ),
	// 	'menu_name'             => __( 'Singular Name', 'text-domain' ),
	// );
	
	// $args = array(
	// 	'labels'            => $labels,
	// 	'public'            => true,
	// 	'show_in_nav_menus' => true,
	// 	'show_admin_column' => false,
	// 	'hierarchical'      => false,
	// 	'show_tagcloud'     => true,
	// 	'show_ui'           => true,
	// 	'query_var'         => true,
	// 	'rewrite'           => true,
	// 	'query_var'         => true,
	// 	'capabilities'      => array(),
	// );

	// register_taxonomy( 'taxonomy-slug', array( 'post' ), $args );

	

	/* Default label */
	$event_cat_labels = array(
		'name'              => _x( 'Categories', 'taxonomy general name', 'web' ),
		'singular_name'     => _x( 'Category', 'taxonomy singular name', 'web' ),
		'search_items'      => __( 'Search Categories', 'web' ),
		'all_items'         => __( 'All Categories', 'web' ),
		'parent_item'       => __( 'Parent Category', 'web' ),
		'parent_item_colon' => __( 'Parent Category:', 'web' ),
		'edit_item'         => __( 'Edit Category', 'web' ),
		'update_item'       => __( 'Update Category', 'web' ),
		'add_new_item'      => __( 'Add New Category', 'web' ),
		'new_item_name'     => __( 'New Category Name', 'web' ),
		'menu_name'         => __( 'Categories', 'web' ),
	);


	/* News And Events Taxonomy */
	$events_cat_args = array(
		'hierarchical'      => true,
		'labels'            => $event_cat_labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'events-category' ),
	);
	register_taxonomy( 'events-category', array( 'events' ), $events_cat_args );



	/* Default label */
	$clinical_cat_labels = array(
		'name'              => _x( 'Clinical Trials Category ', 'taxonomy general name', 'web' ),
		'singular_name'     => _x( 'Clinical Trials Category', 'taxonomy singular name', 'web' ),
		'search_items'      => __( 'Search Clinical Trials Categories', 'web' ),
		'all_items'         => __( 'All Clinical Trials Categories', 'web' ),
		'parent_item'       => __( 'Parent Clinical Trials Category', 'web' ),
		'parent_item_colon' => __( 'Parent Clinical Trials Category:', 'web' ),
		'edit_item'         => __( 'Edit Clinical Trials Category', 'web' ),
		'update_item'       => __( 'Update Clinical Trials Category', 'web' ),
		'add_new_item'      => __( 'Add New Clinical Trials Category', 'web' ),
		'new_item_name'     => __( 'New Clinical Trials Category Name', 'web' ),
		'menu_name'         => __( 'Clinical Trials Categories', 'web' ),
	);


	/* News And Events Taxonomy */
	$clinical_cat_args = array(
		'hierarchical'      => true,
		'labels'            => $clinical_cat_labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		// 'rewrite'           => array( 'slug' => 'events-category' ),
	);
	register_taxonomy( 'clinical-category', array( 'clinical_trials' ), $clinical_cat_args );


	/* Products Taxonomy */
	// $products_args = array(
	// 	'hierarchical'      => true,
	// 	'labels'            => $labels,
	// 	'show_ui'           => true,
	// 	'show_admin_column' => true,
	// 	'query_var'         => true,
	// 	'rewrite'           => array( 'slug' => 'products-category' ),
	// );
	// register_taxonomy( 'products-category', array( 'products' ), $products_args );
	



	/* Applications Taxonomy */
	// $applications_args = array(
	// 	'hierarchical'      => true,
	// 	'labels'            => $labels,
	// 	'show_ui'           => true,
	// 	'show_admin_column' => true,
	// 	'query_var'         => true,
	// 	'rewrite'           => array( 'slug' => 'applications-category' ),
	// );
	// register_taxonomy( 'applications-category', array( 'applications' ), $applications_args );




}
add_action( 'init', 'webt_taxonomy');