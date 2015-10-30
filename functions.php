<?php 
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
add_theme_support( 'sidebars' );

show_admin_bar( false );

require get_template_directory() . '/inc/javascripts.php';
require get_template_directory() . '/inc/stylesheets.php';

$locations = array(
	'primary_menu' => 'Displayed as default main nav'
);

register_nav_menus( $locations );


$args = array(
	'name' => 'Main',
	'id' => 'sidebar-main'
);

register_sidebar( $args );


function fadeLeftIn($distance){
	echo 'data-bottom-top="opacity: 0; left: -' . $distance . 'px"
				data-center="opacity: 1; left: 0px"';
}

function fadeDownIn($distance = 40, $offset = 200){
	if( !wp_is_mobile() ){
		echo 'data--' . $offset . '-bottom-top="opacity: 0; top[swing]: -' . $distance . 'px"
					data-center="opacity: 1; top: 0px"';
	}
}

function getAsset($name){
	echo get_template_directory_uri() . '/assets/' . $name;
}


