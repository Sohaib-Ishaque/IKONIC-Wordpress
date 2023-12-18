<?php 
	

	add_action('after_setup_theme', 'custom_theme_setup');

	function custom_theme_setup() {
	    add_action('init', 'redirect_user_by_ip');
	}



	// Enqueuing Scripts Files


	function custom_ajax_scripts() {
	    wp_enqueue_script('jquery');
	}
	add_action('init', 'custom_ajax_scripts');



	function IKONIC_enqueue_scripts() {
	    wp_enqueue_script('custom-ajax', get_template_directory_uri() . '/assets/custom-ajax.js', array('jquery'), '3.5.1', true);
	    wp_localize_script('custom-ajax', 'ajax_object', array(
	        'ajaxurl' => admin_url('admin-ajax.php'),
	        'ajax_nonce' => wp_create_nonce('my_nonce_action'),
	    ));
	}
	add_action('wp_enqueue_scripts', 'IKONIC_enqueue_scripts');




	// Registering Post-Type Hero Slider
	

	
	 function create_hero_slider_posttype() {
        register_post_type( 'slider',
            array(
                'labels' => array(
                    'name' => __( 'Hero Slider' ),
                    'singular_name' => __( 'hero slider' )
                ),
                'public' => true,
                'has_archive' => true,
                'rewrite' => array('slug' => 'slider'),
                'show_in_rest' => true,
      
            )
        );
    }

    add_action( 'init', 'create_hero_slider_posttype' );
    function custom_post_type() 
    {
  
        $labels = array(
            'name'                => _x( 'slider', 'Post Type General Name', 'IKONIC' ),
            'singular_name'       => _x( 'slide', 'Post Type Singular Name', 'IKONIC' ),
            'menu_name'           => __( 'slider', 'IKONIC' ),
            'parent_item_colon'   => __( 'Parent slide', 'IKONIC' ),
            'all_items'           => __( 'All slider', 'IKONIC' ),
            'view_item'           => __( 'View slider', 'IKONIC' ),
            'add_new_item'        => __( 'Add New slide', 'IKONIC' ),
            'add_new'             => __( 'Add New', 'IKONIC' ),
            'edit_item'           => __( 'Edit slide', 'IKONIC' ),
            'update_item'         => __( 'Update slide', 'IKONIC' ),
            'search_items'        => __( 'Search slide', 'IKONIC' ),
            'not_found'           => __( 'Not Found', 'IKONIC' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'IKONIC' ),
        );
          
        $args = array(
            'label'               => __( 'slider', 'IKONIC' ),
            'description'         => __( 'slider comments and reviews', 'IKONIC' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'taxonomies'          => array( 'genres' ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
      
        );
	}


	add_action( 'init', 'custom_projects_post_type', 0 );



	function custom_projects_post_type() {
	  
	    $labels = array(
	        'name'                => _x( 'Projects', 'Post Type General Name', 'IKONIC' ),
	        'singular_name'       => _x( 'projects', 'Post Type Singular Name', 'IKONIC' ),
	        'menu_name'           => __( 'Projects', 'IKONIC' ),
	        'parent_item_colon'   => __( 'Parent Projects', 'IKONIC' ),
	        'all_items'           => __( 'All Projects', 'IKONIC' ),
	        'view_item'           => __( 'View Projects', 'IKONIC' ),
	        'add_new_item'        => __( 'Add New Project', 'IKONIC' ),
	        'add_new'             => __( 'Add New', 'IKONIC' ),
	        'edit_item'           => __( 'Edit Project', 'IKONIC' ),
	        'update_item'         => __( 'Update Project', 'IKONIC' ),
	        'search_items'        => __( 'Search Project', 'IKONIC' ),
	        'not_found'           => __( 'Not Found', 'IKONIC' ),
	        'not_found_in_trash'  => __( 'Not found in Trash', 'IKONIC' ),
	    );
	      
	      
	    $args = array(
	        'label'               => __( 'Projects', 'IKONIC' ),
	        'description'         => __( 'Projects will on user dashboard', 'IKONIC' ),
	        'labels'              => $labels,
	        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
	       
	        'hierarchical'        => false,
	        'public'              => true,
	        'show_ui'             => true,
	        'show_in_menu'        => true,
	        'show_in_nav_menus'   => true,
	        'show_in_admin_bar'   => true,
	        'menu_position'       => 6,
	        'can_export'          => true,
	        'has_archive'         => false,
	        'exclude_from_search' => false,
	        'publicly_queryable'  => true,
	        'capability_type'     => 'post',
	        'show_in_rest' => true,
	  
	    );
	      


	    // Registering Custom Post Type  Projects


	    register_post_type( 'projects', $args );




	      $labels = array(
	        'name' => _x( 'Project Type', 'taxonomy general name' ),
	        'singular_name' => _x( 'project type', 'taxonomy singular name' ),
	        'search_items' =>  __( 'Search Project Types' ),
	        'all_items' => __( 'All Project Types' ),
	        'parent_item' => __( 'Parent Project Types' ),
	        'parent_item_colon' => __( 'Parent Projects Type' ),
	        'edit_item' => __( 'Edit Project Type' ), 
	        'update_item' => __( 'Update Project Type' ),
	        'add_new_item' => __( 'Add New Project Type' ),
	        'new_item_name' => __( 'New Project Type ' ),
	        'menu_name' => __( 'Project Type' ),
	      );    
	     


	    // Register the taxonomy of Projects Post-Type



	      register_taxonomy('project type',array('projects'), array(
	        'hierarchical' => true,
	        'labels' => $labels,
	        'show_ui' => true,
	        'show_in_rest' => true,
	        'show_admin_column' => true,
	        'query_var' => true,
	        'rewrite' => array( 'slug' => 'project_type' ),
	      ));
	  
	}


	// Check User is logged in or not


	function is_user_logged_in_global() {
	    return is_user_logged_in();
	}




	// Setting Session against user login




	function set_user_login_session() {
	    session_start();
	    $is_user_logged_in = is_user_logged_in();
	    $_SESSION['is_user_logged_in'] = $is_user_logged_in;
	}

	add_action('init', 'set_user_login_session');






	// Custom AJAX End Point








	add_action( 'rest_api_init', 'register_last_projects_route' );

	function register_last_projects_route() {
	    register_rest_route( 'IKONIC', '/last-projects', array(
	        'methods' => 'GET',
	        'callback' => 'get_last_projects',
	    ) );
	}

	function get_last_projects( $request ) {


	    $response = array(
	        'success' => false,
	        'data' => array(),
	    );



	    session_start();

	    $is_user_logged_in = isset( $_SESSION['is_user_logged_in'] ) ? $_SESSION['is_user_logged_in'] : false;

	    

	    if ($is_user_logged_in == false){
	    	 $args = array(
		        'post_type' => 'projects',
		        'post_status' => 'publish',
		        'tax_query' => array(
		            array(
		                'taxonomy' => 'project type',
		                'field' => 'slug',
		                'terms' => 'architecture',
		            ),
		        ),
		        'orderby' => 'date',
		        'order' => 'DESC',
		        'posts_per_page' => 3,
		    );    
	    }	
	    else{
	    	 $args = array(
		        'post_type' => 'projects',
		        'post_status' => 'publish',
		        'tax_query' => array(
		            array(
		                'taxonomy' => 'project type',
		                'field' => 'slug',
		                'terms' => 'architecture',
		            ),
		        ),
		        'orderby' => 'date',
		        'order' => 'DESC',
		        'posts_per_page' => 6,
		    );  
	    }



	    $query = new WP_Query( $args );

	    if ( $query->have_posts() ) {
	        while ( $query->have_posts() ) {
	            $query->the_post();
	            $thumbnail_id = get_post_thumbnail_id();
	            $thumbnail_url = wp_get_attachment_image_url( $thumbnail_id, 'full' );

	            $object = array(
	                'id' => get_the_ID(),
	                'title' => get_the_title(),
	                'link' => get_the_permalink(),
	    			'excerpt' => get_the_excerpt(),
	    			'publish_date' => get_the_date(),
	                'taxonomy' => 'architecture',
	                'thumbnail' => $thumbnail_url,
	            );

	            array_push( $response['data'], $object );
	        }

	        wp_reset_postdata();

	        $response['success'] = true;
	    }

	    return $response;
	}

	
	// echo esc_url_raw( rest_url( 'IKONIC/last-projects' ) );
	// exit;


	



	// Give Me Coffee from API






	function hs_give_me_coffee() {
	  $url = 'https://random-coffee-api.herokuapp.com/api/v1/coffee';
	  $response = wp_remote_get($url);

	  if (is_wp_error($response)) {
	    return array(
	      'success' => false,
	      'message' => 'Error fetching coffee: ' . $response->get_error_message(),
	    );
	  }

	  $body = json_decode(wp_remote_retrieve_body($response), true);

	  if (!is_array($body) || !isset($body['title']) || !isset($body['image']) || !isset($body['link'])) {
	    return array(
	      'success' => false,
	      'message' => 'Invalid coffee data returned.',
	    );
	  }

	  return array(
	    'success' => true,
	    'data' => array(
	      array(
	        'id' => 1,
	        'title' => $body['title'],
	        'link' => $body['link'],
	        'image' => $body['image'],
	      ),
	    ),
	  );
	}







	// Fetching Quotes From API







	function fetch_kanye_quotes() {

	    $quotes = array();
	    $i = 0;

	    while ($i < 5) {
	        $response = wp_remote_get('https://api.kanye.rest/');

	        if (is_wp_error($response)) {
	            $error_message = $response->get_error_message();
	            return "Something went wrong: $error_message";
	        }

	        $quote = json_decode(wp_remote_retrieve_body($response));
	        $quote = $quote->quote;

	        if (!in_array($quote, $quotes)) {
	            $quotes[] = $quote;
	            $i++;
	        }
	    }

	    $count = 0;
	    $output = '<div class="box-container mt-10">';
	    foreach ($quotes as $quote) {
	    	$count++;
	        $output .= "<div class='box qoutes-box'><h1>$count</h1><p>$quote</p></div>";
	    }
	    $output .= '</div>';

	    return $output;
	}
	add_shortcode('kanye_quotes', 'fetch_kanye_quotes');









	// Post Thumbnail 






	add_theme_support('post-thumbnails');
	function setup_types() {
	    register_post_type('mytype', array(
	        'label' => __('My type'),
	        'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' ),
	        'show_ui' => true,
	    ));
	}
	add_action('init', 'setup_types');









	// Redirect if IP Starts with 77.29.






	function redirect_user_by_ip() {
	    $user_ip = $_SERVER['REMOTE_ADDR'];

	    if (strpos($user_ip, '77.29') === 0) {
	        wp_redirect('https://www.google.com', 301); 
	        exit;
	    }
	    else{
	    }
	}
	add_action('init', 'redirect_user_by_ip');



?>