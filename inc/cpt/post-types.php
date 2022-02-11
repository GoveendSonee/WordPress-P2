<?php
add_action('init', 'goveendsonee_portfolio_post_type_init');
function goveendsonee_portfolio_post_type_init() {

	/**
	 * Portfolio Post Type
	 */

	register_post_type( 'portfolios', array(
		'labels'             => [
			'name'               => _x( 'Portfolio', 'post type general name', 'goveend-sonee' ),
			'singular_name'      => _x( 'Portfolio', 'post type singular name', 'goveend-sonee' ),
			'menu_name'          => _x( 'Portfolios', 'admin menu', 'goveend-sonee' ),
			'name_admin_bar'     => _x( 'Portfolio', 'add new on admin bar', 'goveend-sonee' ),
			'add_new'            => _x( 'Add New', 'Portfolio', 'goveend-sonee' ),
			'add_new_item'       => __( 'Add New Portfolio', 'goveend-sonee' ),
			'new_item'           => __( 'New Portfolio', 'goveend-sonee' ),
			'edit_item'          => __( 'Edit Portfolio', 'goveend-sonee' ),
			'view_item'          => __( 'View Portfolio', 'goveend-sonee' ),
			'all_items'          => __( 'All Portfolios', 'goveend-sonee' ),
			'search_items'       => __( 'Search Portfolios', 'goveend-sonee' ),
			'parent_item_colon'  => __( 'Parent Portfolios:', 'goveend-sonee' ),
			'not_found'          => __( 'No Portfolios found.', 'goveend-sonee' ),
			'not_found_in_trash' => __( 'No Portfolios found in Trash.', 'goveend-sonee' )
		],
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_icon'          => 'dashicons-cart',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolios' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'exclude_from_search' => false,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail' ),
		// 'supports'           => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		
		/**This is where we add taxonomies to our CPT */
        // 'taxonomies'          => array( 'category','post_tag' )
        'taxonomies'          => array( 'category' )
    ) );
}

//  $custom_fields = get_post_custom();
 
//   $custom_fields = get_post_custom(72);
//   $my_custom_field = $custom_fields['my_custom_field'];
//   foreach ( $my_custom_field as $key => $value ) {
//     echo $key . " => " . $value . "<br />";
//   }