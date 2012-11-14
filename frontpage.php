<?php
/*
Template Name: Frontpage
*/
get_header(); ?>
		<div id="primary">
			<div id="content" role="main">
				<?php dynamic_sidebar( 'header' ); ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>
				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
</div><!-- #primary -->