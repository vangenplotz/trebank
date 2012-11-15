<?php
/*
Template Name: Frontpage
*/
?>
<div id="main">	
<?php
if( function_exists('FA_display_slider') ){
    FA_display_slider(421);
}
?>
	<?php appthemes_before_page_loop(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

	<?php appthemes_before_page(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<section id="overview">

			<?php appthemes_before_page_content(); ?>

			<?php the_content(); ?>

			<?php appthemes_after_page_content(); ?>

		</section>
	<?php edit_post_link( __( 'Edit', APP_TD ), '<span class="edit-link">', '</span>' ); ?>
	</article>

	<?php appthemes_after_page(); ?>

	<?php endwhile; ?>

	<?php appthemes_after_page_loop(); ?>

</div><!-- /#main -->

<div id="sidebar" class="threecol last">
	<?php get_sidebar( app_template_base() ); ?>
</div>	