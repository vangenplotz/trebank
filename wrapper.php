<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<title><?php wp_title(''); ?></title>
	<link rel="icon" type="image/png" href="http://trebank.vangenplotz.no/wp-content/themes/trebank/favicon.png">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<?php wp_head(); ?>
	<script> 
		jQuery(document).ready(function ($) {
		$(".tjenester").click(function(){
	    $(".tags_listing").slideToggle('slow');
	  });
	});
	</script>
	<!--[if lte IE 9]><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/ie.css" type="text/css" media="screen" /><![endif]-->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

</head>

<body <?php body_class(); ?>>

	<?php appthemes_before(); ?>
<div class="row">
	<div id="sidebar">
	<?php appthemes_before_header(); ?>
	<?php get_header( app_template_base() ); ?>
	<?php appthemes_after_header(); ?>
		<?php wp_nav_menu( array( 'theme_location' => 'sidebar-menu' ) ); ?>
		<?php dynamic_sidebar( 'main' ); ?>
		
		<a href="#"><div class="tjenester">Tjenester</div></a>
		<div class="tags_listing">
			<?php 
			  $args = array(
			    'taxonomy'  => array('post_tag','listing_tag'), 
			   ); 
			   
			   wp_tag_cloud($args);
			   ?>
		</div>


	</div>
	<div id="content">
				<?php include app_template_path(); ?>
				<div class="clear"></div>

	</div> <!-- /content -->
	<div class="clear"></div>
</div>
	<?php appthemes_before_footer(); ?>
	<?php get_footer( app_template_base() ); ?>
	<?php appthemes_after_footer(); ?>

	<?php appthemes_after(); ?>

	<?php wp_footer();?>

</body>
</html>
