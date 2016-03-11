<?php 

	// Hide Wordpress Version
	remove_action('wp_head', 'wp_generator');

	add_theme_support( "title-tag" );
	// add_theme_support( "custom-header", $args );
	// add_theme_support( "custom-background", $args );
	add_editor_style();

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Remove Blockquote P
	// remove_filter('the_content', 'wpautop');

  // Add Main Menu
	add_theme_support( 'menus' );

  function register_theme_menus() {
  	register_nav_menus(

  		array(
  			'main-menu' => _( 'Main Menu' )
  		)

  	);
  }

  add_action( 'init', 'register_theme_menus' );

  // Add CSS Files
	function wpt_theme_styles() {
		wp_enqueue_style( 'google_font', 'http://fonts.googleapis.com/css?family=Cabin:400,600|Lato:400,600' );
		wp_enqueue_style( 'style.css', get_template_directory_uri() . '/style.css' );

	}

	add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

	// Add JS Files
	function wpt_theme_js() {

		wp_enqueue_script( 'modernizr_min_js', get_template_directory_uri() . '/js/vendor/modernizr.min.js', '', '', false );	
		wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );
		// wp_enqueue_script( 'jquery-masonry', array('jquery'), '', true );

	}

	add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );


	// Remove Image Attributes
	add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
	add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

	function remove_width_attribute( $html ) {
	   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
	   return $html;
	}

	// Featured Image
	add_theme_support( 'post-thumbnails' ); 
	set_post_thumbnail_size( 960, 400, array('top', 'center') ); // 50 pixels wide by 50 pixels tall, crop mode
	// add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

	// function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
	//     $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
	//     return $html;
	// }

	// Excerpt Length
	// function custom_excerpt_length( $length ) {
	// 	return 25;
	// }
	// add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

	// Register widget area
	function bytebubble_widgets_init() {
		register_sidebar( array(
			'name'          => __( 'Widget Area', 'bytebubble' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your sidebar.', 'bytebubble' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		) );

		register_sidebar( array(
			'name'          => __( 'Widget Area', 'bytebubble' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Add widgets here to appear in your sidebar.', 'bytebubble' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		) );

		register_sidebar( array(
			'name'          => __( 'Widget Area', 'bytebubble' ),
			'id'            => 'sidebar-3',
			'description'   => __( 'Add widgets here to appear in your sidebar.', 'bytebubble' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		) );

		register_sidebar( array(
			'name'          => __( 'Widget Area', 'bytebubble' ),
			'id'            => 'sidebar-4',
			'description'   => __( 'Add widgets here to appear in your sidebar.', 'bytebubble' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		) );
	}
	add_action( 'widgets_init', 'bytebubble_widgets_init' );

 ?>