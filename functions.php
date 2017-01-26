<?php


	function sparky_theme_setup(){
		add_theme_support('post-thumbnails');

		register_nav_menus(array(
			'primary'	=> __('Primary Menu')
		));
	}
	add_action('after_setup_theme', 'sparky_theme_setup');


	//Customizer File
	require get_template_directory() . '/inc/php/customizer.php';

	//Widget Locations
	function sparky_init_widgets($id){
		register_sidebar(array(
			'name'				=> 'Sidebar Slot 1',
			'id' 				=> 'slot1',
			'before_widget'		=> '<div class="module">',
			'after_widget'		=> '</div>',
			'before_title'		=> '<h2 class="sparky-widget-title">',
			'after_title'		=> '</h2>'
		));
		register_sidebar(array(
			'name'				=> 'Sidebar Slot 2',
			'id' 				=> 'slot2',
			'before_widget'		=> '<div class="module">',
			'after_widget'		=> '</div>',
			'before_title'		=> '<h2 class="sparky-widget-title">',
			'after_title'		=> '</h2>'
		));
		register_sidebar(array(
			'name'				=> 'Sidebar Slot 3',
			'id' 				=> 'slot3',
			'before_widget'		=> '<div class="module">',
			'after_widget'		=> '</div>',
			'before_title'		=> '<h2 class="sparky-widget-title">',
			'after_title'		=> '</h2>'
		));						
	}
	add_action('widgets_init', 'sparky_init_widgets');



	function add_theme_scripts() {
	 	
	 	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/inc/css/bootstrap.min.css', array(), '1.1', 'all');

	  	wp_enqueue_style( 'style', get_stylesheet_uri() );
	 	 
	 	wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/inc/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
	 
	}
	add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );	