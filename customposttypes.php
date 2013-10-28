<?php

// Register Custom Post Type for Portfolio
function portfolio_init() {

	$labels = array(
		'name'                => 'Portfolio Pieces',
		'singular_name'       => 'Portfolio Piece',
		'menu_name'           => 'Portfolio',
		'parent_item_colon'   => 'Parent Portfolio Piece:',
		'all_items'           => 'All Portfolio Pieces',
		'view_item'           => 'View Portfolio Pieces',
		'add_new_item'        => 'Add New Portfolio Piece',
		'add_new'             => 'New Portfolio Piece',
		'edit_item'           => 'Edit Portfolio Piece',
		'update_item'         => 'Update Portfolio Piece',
		'search_items'        => 'Search Portfolio Pieces',
		'not_found'           => 'No Portfolio Pieces found',
		'not_found_in_trash'  => 'No Portfolio Pieces found in Trash',
	);
	$rewrite = array(
		'slug'                => 'portfolio',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => 'portfoliopiece',
		'description'         => 'Portfolio Pieces',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'          => array( 'web', 'print', 'video', 'misc' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => get_bloginfo('template_directory') . '/img/palette-paint-brush.png',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'query_var'           => 'portfoliopiece',
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
	);
	register_post_type( 'portfoliopiece', $args );

}

// Hook into the 'init' action
add_action( 'init', 'portfolio_init', 0 );



// Register Custom Taxonomy
function portfolio_taxonomies()  {

	$labels = array(
		'name'                       => 'Genres',
		'singular_name'              => 'Genre',
		'menu_name'                  => 'Genre',
		'all_items'                  => 'All Genres',
		'parent_item'                => 'Parent Genre',
		'parent_item_colon'          => 'Parent Genre:',
		'new_item_name'              => 'New Genre Name',
		'add_new_item'               => 'Add New Genre',
		'edit_item'                  => 'Edit Genre',
		'update_item'                => 'Update Genre',
		'separate_items_with_commas' => 'Separate genres with commas',
		'search_items'               => 'Search genres',
		'add_or_remove_items'        => 'Add or remove genres',
		'choose_from_most_used'      => 'Choose from the most used genres',
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
	register_taxonomy( 'genre', 'portfoliopiece', $args );

}

// Hook into the 'init' action
add_action( 'init', 'portfolio_taxonomies', 0 );