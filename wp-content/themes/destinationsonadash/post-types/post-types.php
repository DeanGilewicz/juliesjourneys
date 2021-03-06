<?php // create custom post types here

	// change default "post" to "stays"

	function change_post_label_to_where_i_stay() {
	    global $menu;
	    global $submenu;
	    $menu[5][0] = 'Where I Stay';
	    $submenu['edit.php'][5][0] = 'All Stays';
	    $submenu['edit.php'][10][0] = 'Add Stays';
	    $submenu['edit.php'][16][0] = 'Tags';
	    echo '';
	}

	add_action( 'admin_menu', 'change_post_label_to_where_i_stay' );


	function change_post_object_to_where_i_stay() {
	    global $wp_post_types;
	    $labels = &$wp_post_types['post']->labels;
	    $labels->name = 'Stays';
	    $labels->singular_name = 'Stay';
	    $labels->add_new = 'Add Stay';
	    $labels->add_new_item = 'Add Stay';
	    $labels->edit_item = 'Edit Stay';
	    $labels->new_item = 'Stay';
	    $labels->view_item = 'View Stay';
	    $labels->search_items = 'Search Stays';
	    $labels->not_found = 'No Stays found';
	    $labels->not_found_in_trash = 'No Stays found in Trash';
	    $labels->all_items = 'All Stays';
	    $labels->menu_name = 'Stays';
	    $labels->name_admin_bar = 'Stays';

	    // $wp_post_types['post']->rewrite = array('slug' => 'banana');

	    // echo '<pre>';
	    // print_r($wp_post_types);
	    // echo '</pre>';
	}

	add_action( 'init', 'change_post_object_to_where_i_stay' );


	// create eating ethnic custom post type

	function destinationsonadash_create_eating_ethnic_custom_post_type() {
		register_post_type('eating_ethnic', array(
		        'labels' => array(
		            'name' => 'Eating Ethnic',
		            'singular_name' => 'Eating Ethnic',
		            'add_new' => 'Add Food',
		            'edit_item' => 'Edit Food',
		            'new_item' => 'New Food',
		            'view_item' => 'View Food',
		            'search_items' => 'Search Foods',
		            'not_found' => 'No Foods found',
		            'not_found_in_trash' => 'No Foods found in Trash',
		            'all_items' => 'All Foods',
					'menu_name' => 'Eating Ethnic',
					'name_admin_bar' => 'Eating Ethnic'
		        ),
		        'taxonomies' => array('category', 'post_tag', 'continents', 'destinations'),
		        'public' => true,
		        'menu_position' => 6,
				'rewrite' => array('slug' => 'eating-ethnic'),
		        'supports' => array(
		            'title',
		            'editor',
		            'excerpt',
		            'custom-fields',
		            'revisions',
		            'thumbnail',
		            'comments'
		        ),
		        'has_archive' => true
		    )
		);
	}

	add_action('init', 'destinationsonadash_create_eating_ethnic_custom_post_type');


	// create insights custom post type

	// function destinationsonadash_create_insights_custom_post_type() {
	// 	register_post_type('insights', array(
	// 	        'labels' => array(
	// 	            'name' => 'Insights',
	// 	            'singular_name' => 'Insight',
	// 	            'add_new' => 'Add Insights',
	// 	            'edit_item' => 'Edit Insight',
	// 	            'new_item' => 'New Insight',
	// 	            'view_item' => 'View Insight',
	// 	            'search_items' => 'Search Insights',
	// 	            'not_found' => 'No Insights found',
	// 	            'not_found_in_trash' => 'No Insights found in Trash',
	// 	            'all_items' => 'All Insights',
	// 				'menu_name' => 'Insights',
	// 				'name_admin_bar' => 'Insights'
	// 	        ),
	// 	        'taxonomies' => array('category', 'post_tag', 'continents', 'destinations'),
	// 	        'public' => true,
	// 	        'menu_position' => 7,
	// 	        // 		'rewrite' => array('slug' => 'blog'),
	// 	        'supports' => array(
	// 	            'title',
	// 	            'editor',
	// 	            'excerpt',
	// 	            'custom-fields',
	// 	            'revisions',
	// 	            'thumbnail',
	// 	            'comments'
	// 	        ),
	// 	        'has_archive' => true
	// 	    )
	// 	);
	// }

	// add_action('init', 'destinationsonadash_create_insights_custom_post_type');


	// create quotes custom post type

	function destinationsonadash_create_quotes_custom_post_type() {
		register_post_type('quotes', array(
		        'labels' => array(
		            'name' => 'Quotes',
		            'singular_name' => 'Quote',
		            'add_new' => 'Add new Quote',
		            'edit_item' => 'Edit Quote',
		            'new_item' => 'New Quote',
		            'view_item' => 'View Quote',
		            'search_items' => 'Search Quotes',
		            'not_found' => 'No Quotes found',
		            'not_found_in_trash' => 'No Quotes found in Trash',
		            'all_items' => 'All Quotes',
					'menu_name' => 'Quotes',
					'name_admin_bar' => 'Quotes'
		        ),
		        // 'taxonomies' => array('category', 'post_tag', 'continents'),
		        'public' => true,
		        'menu_position' => 9,
		        // 		'rewrite' => array('slug' => 'blog'),
		        'supports' => array(
		            'title',
		            'editor',
		            'excerpt',
		            'custom-fields',
		            'revisions',
		            'thumbnail'
		        ),
		        'has_archive' => true
		    )
		);
	}

	add_action('init', 'destinationsonadash_create_quotes_custom_post_type');



	// create itineraries custom post type

	// function destinationsonadash_create_itineraries_custom_post_type() {
	// 	register_post_type('itineraries', array(
	// 	        'labels' => array(
	// 	            'name' => 'Itineraries',
	// 	            'singular_name' => 'Itinerary',
	// 	            'add_new' => 'Add Itinerary',
	// 	            'edit_item' => 'Edit Itinerary',
	// 	            'new_item' => 'New Itinerary',
	// 	            'view_item' => 'View Itinerary',
	// 	            'search_items' => 'Search Itineraries',
	// 	            'not_found' => 'No Itineraries found',
	// 	            'not_found_in_trash' => 'No Itineraries found in Trash',
	// 	            'all_items' => 'All Itineraries',
	// 				'menu_name' => 'Itineraries',
	// 				'name_admin_bar' => 'Itineraries'
	// 	        ),
	// 	        'taxonomies' => array('category', 'post_tag', 'continents', 'destinations'),
	// 	        'public' => true,
	// 	        'menu_position' => 8,
	// 	        'supports' => array(
	// 	            'title',
	// 	            'editor',
	// 	            'excerpt',
	// 	            'custom-fields',
	// 	            'revisions',
	// 	            'thumbnail',
	// 	            'comments'
	// 	        ),
	// 	        'has_archive' => true
	// 	    )
	// 	);
	// }

	// add_action('init', 'destinationsonadash_create_itineraries_custom_post_type');

?>
