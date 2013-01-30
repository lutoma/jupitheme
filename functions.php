<?php
// Register the menus & admin options
add_action('init', 'register_menus');
add_action('admin_init', 'register_theme_options');
add_action('admin_menu', 'theme_options_add_page');
 
function register_menus() {
	register_nav_menus(
		array(
			'primary' => __('Primary Menu'),
		)
	);
}

function register_theme_options(){
	register_setting( 'kb_options', 'kb_theme_options', 'kb_validate_options' );
}

function theme_options_add_page() {
	add_theme_page('Theme-Optionen', 'Theme-Optionen', 'edit_theme_options', 'theme-options', 'kb_theme_options_page');
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

// Theme options page
function kb_theme_options_page() {
	global $select_options, $radio_options;
	if (!isset($_REQUEST['settings-updated']))
		$_REQUEST['settings-updated'] = false; ?>

		<div class="wrap"> 
		<?php screen_icon(); ?><h2>Theme-Optionen für Jupisnova ?></h2> 

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?> 
		<div class="updated fade">
			<p><strong>Einstellungen gespeichert!</strong></p>
		</div>
	<?php endif; ?>

	  <form method="post" action="options.php">
		<?php settings_fields( 'kb_options' ); ?>
	    <?php $options = get_option( 'kb_theme_options' ); ?>

	    <table class="form-table">
	      <tr valign="top">
	        <th scope="row">Seitentitel (z.B. JuPis &lt;span class="bold"&gt;Berlin&lt;/span&gt;)</th>
	        <td><input id="kb_theme_options[title]" class="regular-text" type="text" name="kb_theme_options[title]" value="<?php esc_attr_e( $options['title'] ); ?>" /></td>
	      </tr>
	    </table>
	    
	    <!-- submit -->
	    <p class="submit"><input type="submit" class="button-primary" value="Einstellungen speichern" /></p>
	  </form>
	</div>
	<?php }

	function kb_validate_options( $input ) {
		return $input;
}
?>
