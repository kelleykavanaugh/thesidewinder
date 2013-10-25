<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );
/**
 * Register our sidebars and widgetized areas.
 *
 */

if (function_exists("register_sidebar")) {
  register_sidebar(array(
    'name' => 'sidebar',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));
}
if (function_exists("register_sidebar")) {
  register_sidebar(array(
    'name' => 'widget-footer',
	'before_widget' => '<div class="span4">',
	'after_widget'  => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
));
}
/* custom header */
$args = array(
	'width'         => 1200,
	'flex-height'    => true,
	'height'        => 220,
	'default-image' => get_template_directory_uri() . '/images/header.jpg',
	'uploads'       => true,
);
add_theme_support( 'custom-header', $args );
/* end custom header */
?>