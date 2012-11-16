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

function showalltags() {
 
	$tags = get_tags();
	$html;
	foreach ($tags as $tag){
		$tag_link = get_tag_link($tag->term_id);
 
		$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
		$html .= "{$tag->name}</a>";
	}
	echo $html;
 
}

add_filter( 'wp_get_attachment_link', 'sant_prettyadd');
 
function sant_prettyadd ($content) {
	$content = preg_replace("/<a/","<a rel=\"prettyPhoto[slides]\"",$content,1);
	return $content;
}

?>