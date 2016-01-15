<?php
	
	function my_scripts(){
		wp_enqueue_script('jquery');
		// named handle for reference within wordpress, path to JS file, dependencies, version number, in_footer = set to true to output in get_footer()
			// vendor
			wp_enqueue_script( 'bootstrap_JS', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );
			wp_enqueue_script( 'velocity_JS', get_template_directory_uri() . '/js/velocity.min.js', array('jquery'), '', true );
			wp_enqueue_script( 'velocity_ui_JS', get_template_directory_uri() . '/js/velocity.ui.min.js', array('velocity_js'), '', true );
			wp_enqueue_script( 'skrollr_JS', get_template_directory_uri() . '/js/skrollr.min.js', array(), '', true );
			wp_enqueue_script( 'typed_JS', get_template_directory_uri() . '/js/typed.min.js', array('jquery'), '', true );

			// custom
			wp_enqueue_script( 'main_JS', get_template_directory_uri() . '/js/main.js', array(), '', true );
			
	}

	add_action( 'wp_enqueue_scripts', 'my_scripts' );