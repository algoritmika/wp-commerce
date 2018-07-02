<?php
/**
 * Enqueue scripts and styles.
 */
function wp_commerce_scripts() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.1.0' );
		wp_enqueue_style( 'fontawesome-css', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.7.0' );
	wp_enqueue_style( 'woo-commerce-style', get_stylesheet_uri() );

	wp_enqueue_style( 'fontawesome-css', get_template_directory_uri() . '/assets/css/jquery.smartmenus.bootstrap-4.css', array(), '4.1.0' );

	wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i', array());

	wp_enqueue_style( 'google-font-1', 'https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700', array());
  	
  	wp_enqueue_style( 'google-font-2', 'https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i', array());

	wp_enqueue_style( 'jquery-ui-css',  get_template_directory_uri() . '/assets/css/jquery-ui.min.css', array(),'1.12.1');

	wp_enqueue_style( 'slick-css',  get_template_directory_uri() . '/assets/css/slick.css', array());  	
  	
  	wp_enqueue_style( 'slick-theme-css',  get_template_directory_uri() . '/assets/css/slick-theme.css', array());
  	wp_enqueue_style( 'slick-theme-css',  get_template_directory_uri() . '/assets/css/slick-theme.css', array()); 

	wp_enqueue_style( 'woocommerce-style', get_stylesheet_uri() );
	
	wp_enqueue_script("jquery-ui-core"); 

   	wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '3.3.1', true ); 

   	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '3.3.1', true );

   	wp_enqueue_script( 'jquery-smartmenus-js', get_template_directory_uri() . '/assets/js/jquery.smartmenus.min.js', array('jquery'), '3.3.1', true );

    wp_enqueue_script( 'jquery-smartmenu-bootstrap4-js', get_template_directory_uri() . '/assets/js/jquery.smartmenus.bootstrap-4.min.js', array('jquery'), '3.3.1', true );

    wp_enqueue_script( 'jquery-zoom-js', get_template_directory_uri() . '/assets/js/jquery.zoom.min.js', array('jquery'), '1.7.21', true );
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '3.3.1', true );

    wp_enqueue_script( 'woo-commerce-main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '3.3.1', true );

	wp_enqueue_script( 'woo-commerce-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'woo-commerce-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_commerce_scripts' );