<?php
// Register the menus
add_action('init', 'register_menus');
 
function register_menus() {
	register_nav_menus(
		array(
			'primary' => __('Primary Menu'),
		)
	);
}

// Sidebar
if (function_exists('register_sidebar'))
	register_sidebar(array(
		'before_widget' => '<div class="box">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 750, 120, true ); // Normal post thumbnails
?>
