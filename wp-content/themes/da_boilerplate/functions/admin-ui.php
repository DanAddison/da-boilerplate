<?php 
// add options page for website settings eg. footer details

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}

/**
 * Removes some menus by page.
 */
function da_boilerplate_remove_menus(){

    if( !user_has_role( 'administrator' ) ) {
        remove_menu_page( 'edit-comments.php' ); //Comments
		remove_menu_page( 'tools.php' ); //Tools
	}

}
add_action( 'admin_menu', 'da_boilerplate_remove_menus' );