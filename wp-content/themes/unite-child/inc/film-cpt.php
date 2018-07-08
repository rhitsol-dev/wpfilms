<?php

// Register Films Custom Post Type
if ( ! function_exists('film_custom_post_type') ) {

	function film_custom_post_type() {

		$labels = array(
			'name'                  => _x( 'Films', 'Post Type General Name', 'unite-child' ),
			'singular_name'         => _x( 'Film', 'Post Type Singular Name', 'unite-child' ),
			'menu_name'             => __( 'Films', 'unite-child' ),
			'name_admin_bar'        => __( 'Films', 'unite-child' ),
			'archives'              => __( 'Item Archives', 'unite-child' ),
			'attributes'            => __( 'Item Attributes', 'unite-child' ),
			'parent_item_colon'     => __( 'Parent Item:', 'unite-child' ),
			'all_items'             => __( 'All Films', 'unite-child' ),
			'add_new_item'          => __( 'Add New Film', 'unite-child' ),
			'add_new'               => __( 'Add New', 'unite-child' ),
			'new_item'              => __( 'New Item', 'unite-child' ),
			'edit_item'             => __( 'Edit Item', 'unite-child' ),
			'update_item'           => __( 'Update Item', 'unite-child' ),
			'view_item'             => __( 'View Item', 'unite-child' ),
			'view_items'            => __( 'View Items', 'unite-child' ),
			'search_items'          => __( 'Search Item', 'unite-child' ),
			'not_found'             => __( 'Not found', 'unite-child' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'unite-child' ),
			'featured_image'        => __( 'Featured Image', 'unite-child' ),
			'set_featured_image'    => __( 'Set featured image', 'unite-child' ),
			'remove_featured_image' => __( 'Remove featured image', 'unite-child' ),
			'use_featured_image'    => __( 'Use as featured image', 'unite-child' ),
			'insert_into_item'      => __( 'Insert into item', 'unite-child' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'unite-child' ),
			'items_list'            => __( 'Items list', 'unite-child' ),
			'items_list_navigation' => __( 'Items list navigation', 'unite-child' ),
			'filter_items_list'     => __( 'Filter items list', 'unite-child' ),
		);
		$args = array(
			'label'                 => __( 'Film', 'unite-child' ),
			'description'           => __( 'Films Post Type', 'unite-child' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail' ),
			'taxonomies'            => array( 'genre', 'country', 'year', 'actors' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-video-alt',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'films', $args );

	}
	add_action( 'init', 'film_custom_post_type', 0 );

}

// Register Genres Custom Taxonomy
if ( ! function_exists('genre_custom_taxonomy') ) {
	
	function genre_custom_taxonomy() {

		$labels = array(
			'name'                       => _x( 'Genres', 'Taxonomy General Name', 'unite-child' ),
			'singular_name'              => _x( 'Genre', 'Taxonomy Singular Name', 'unite-child' ),
			'menu_name'                  => __( 'Genre', 'unite-child' ),
			'all_items'                  => __( 'All Genres', 'unite-child' ),
			'parent_item'                => __( 'Parent Item', 'unite-child' ),
			'parent_item_colon'          => __( 'Parent Item:', 'unite-child' ),
			'new_item_name'              => __( 'New Genre Name', 'unite-child' ),
			'add_new_item'               => __( 'Add New Genre', 'unite-child' ),
			'edit_item'                  => __( 'Edit Item', 'unite-child' ),
			'update_item'                => __( 'Update Item', 'unite-child' ),
			'view_item'                  => __( 'View Item', 'unite-child' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'unite-child' ),
			'add_or_remove_items'        => __( 'Add or remove items', 'unite-child' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'unite-child' ),
			'popular_items'              => __( 'Popular Items', 'unite-child' ),
			'search_items'               => __( 'Search Items', 'unite-child' ),
			'not_found'                  => __( 'Not Found', 'unite-child' ),
			'no_terms'                   => __( 'No items', 'unite-child' ),
			'items_list'                 => __( 'Items list', 'unite-child' ),
			'items_list_navigation'      => __( 'Items list navigation', 'unite-child' ),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
		);
		register_taxonomy( 'genre', array( 'films' ), $args );

	}
	add_action( 'init', 'genre_custom_taxonomy', 0 );
}

// Register Country Custom Taxonomy
if ( ! function_exists('country_custom_taxonomy') ) {
	
	function country_custom_taxonomy() {

		$labels = array(
			'name'                       => _x( 'Countries', 'Taxonomy General Name', 'unite-child' ),
			'singular_name'              => _x( 'Country', 'Taxonomy Singular Name', 'unite-child' ),
			'menu_name'                  => __( 'Country', 'unite-child' ),
			'all_items'                  => __( 'All Countries', 'unite-child' ),
			'parent_item'                => __( 'Parent Country', 'unite-child' ),
			'parent_item_colon'          => __( 'Parent Country:', 'unite-child' ),
			'new_item_name'              => __( 'New Country Name', 'unite-child' ),
			'add_new_item'               => __( 'Add New Country', 'unite-child' ),
			'edit_item'                  => __( 'Edit Item', 'unite-child' ),
			'update_item'                => __( 'Update Item', 'unite-child' ),
			'view_item'                  => __( 'View Item', 'unite-child' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'unite-child' ),
			'add_or_remove_items'        => __( 'Add or remove items', 'unite-child' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'unite-child' ),
			'popular_items'              => __( 'Popular Items', 'unite-child' ),
			'search_items'               => __( 'Search Items', 'unite-child' ),
			'not_found'                  => __( 'Not Found', 'unite-child' ),
			'no_terms'                   => __( 'No items', 'unite-child' ),
			'items_list'                 => __( 'Items list', 'unite-child' ),
			'items_list_navigation'      => __( 'Items list navigation', 'unite-child' ),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
		);
		register_taxonomy( 'country', array( 'films' ), $args );

	}
	add_action( 'init', 'country_custom_taxonomy', 0 );	
}

// Register Year Custom Taxonomy
if ( ! function_exists('year_custom_taxonomy') ) {
	
	function year_custom_taxonomy() {

		$labels = array(
			'name'                       => _x( 'Years', 'Taxonomy General Name', 'unite-child' ),
			'singular_name'              => _x( 'Year', 'Taxonomy Singular Name', 'unite-child' ),
			'menu_name'                  => __( 'Year', 'unite-child' ),
			'all_items'                  => __( 'All Years', 'unite-child' ),
			'parent_item'                => __( 'Parent Year', 'unite-child' ),
			'parent_item_colon'          => __( 'Parent Year:', 'unite-child' ),
			'new_item_name'              => __( 'New YearName', 'unite-child' ),
			'add_new_item'               => __( 'Add New Year', 'unite-child' ),
			'edit_item'                  => __( 'Edit Item', 'unite-child' ),
			'update_item'                => __( 'Update Item', 'unite-child' ),
			'view_item'                  => __( 'View Item', 'unite-child' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'unite-child' ),
			'add_or_remove_items'        => __( 'Add or remove items', 'unite-child' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'unite-child' ),
			'popular_items'              => __( 'Popular Items', 'unite-child' ),
			'search_items'               => __( 'Search Items', 'unite-child' ),
			'not_found'                  => __( 'Not Found', 'unite-child' ),
			'no_terms'                   => __( 'No items', 'unite-child' ),
			'items_list'                 => __( 'Items list', 'unite-child' ),
			'items_list_navigation'      => __( 'Items list navigation', 'unite-child' ),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
		);
		register_taxonomy( 'year', array( 'films' ), $args );

	}
	add_action( 'init', 'year_custom_taxonomy', 0 );
}

// Register Actors Custom Taxonomy
if ( ! function_exists('') ) {
	
	function actors_custom_taxonomy() {

		$labels = array(
			'name'                       => _x( 'Actors', 'Taxonomy General Name', 'unite-child' ),
			'singular_name'              => _x( 'Actor', 'Taxonomy Singular Name', 'unite-child' ),
			'menu_name'                  => __( 'Actors', 'unite-child' ),
			'all_items'                  => __( 'All Actors', 'unite-child' ),
			'parent_item'                => __( 'Parent Actor', 'unite-child' ),
			'parent_item_colon'          => __( 'Parent Actor:', 'unite-child' ),
			'new_item_name'              => __( 'New Actor Name', 'unite-child' ),
			'add_new_item'               => __( 'Add New Actor', 'unite-child' ),
			'edit_item'                  => __( 'Edit Item', 'unite-child' ),
			'update_item'                => __( 'Update Item', 'unite-child' ),
			'view_item'                  => __( 'View Item', 'unite-child' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'unite-child' ),
			'add_or_remove_items'        => __( 'Add or remove items', 'unite-child' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'unite-child' ),
			'popular_items'              => __( 'Popular Items', 'unite-child' ),
			'search_items'               => __( 'Search Items', 'unite-child' ),
			'not_found'                  => __( 'Not Found', 'unite-child' ),
			'no_terms'                   => __( 'No items', 'unite-child' ),
			'items_list'                 => __( 'Items list', 'unite-child' ),
			'items_list_navigation'      => __( 'Items list navigation', 'unite-child' ),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
		);
		register_taxonomy( 'actors', array( 'films' ), $args );

	}
	add_action( 'init', 'actors_custom_taxonomy', 0 );	
}