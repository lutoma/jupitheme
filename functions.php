<?php
// Register the menus
add_action( 'init', 'register_menus' );
 
function register_menus() {
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu' ),
		)
	);
}
?>