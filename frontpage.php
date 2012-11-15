<?php
/*
Template Name: Frontpage
*/
?>
<div id="main">	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


		<section id="overview">

			<?php appthemes_before_page_content(); ?>
			<?php dynamic_sidebar( 'header' ); ?>
			<?php the_content(); ?>

			<?php appthemes_after_page_content(); ?>

		</section>
	<?php edit_post_link( __( 'Edit', APP_TD ), '<span class="edit-link">', '</span>' ); ?>
	</article>

</div><!-- /#main -->