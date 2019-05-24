<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );

function my_inhabitent_login_logo() {
	echo '<style type="text/css">                                                                   
		h1 a { background-image:url('.get_stylesheet_directory_uri().'/assets/images/logos/inhabitent-logo-text-dark.svg) !important; 
		height: 50px !important; width: 410px !important;background-size: contain!important; width: 300px !important;}                            
	</style>';
}
add_action('login_head', 'my_inhabitent_login_logo');

function the_url( $url ) {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'the_url' );

//below code adds extra body class//
function inhabitent_body_class_for_pages( $classes ) {
    if ( is_singular( 'page' ) ) {
        global $post;
        $classes[] = 'page-' . $post->post_name;
    }
    return $classes;
}
add_filter( 'body_class', 'inhabitent_body_class_for_pages' );