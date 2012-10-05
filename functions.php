<?php
/*
   URL: trebank.com | @trebank
*/
$imagepath = STYLESHEETPATH .'/images/';
$imageurl = get_bloginfo('stylesheet_directory') .'/images/';
if (file_exists(STYLESHEETPATH. '/theme-options.php')) include_once ( STYLESHEETPATH . '/theme-options.php' );

// Register Navigation
	function register_trebank_menu()
	{
	    register_nav_menus(array( // Using array to specify more menus if needed
	        'sidebar-menu' => __('Sidebar Menu', 'trebank'), // Sidebar Navigation
	        'extra-menu' => __('Extra Menu', 'trebank') // Extra Navigation if needed (duplicate as many as you need!)
	    ));
	}
add_action( 'init', 'register_trebank_menu' );

?>