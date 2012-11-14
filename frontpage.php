<?php
/*
Template Name: Frontpage
*/
?>
<div id="primary">
			<div id="content" role="main">
				<?php dynamic_sidebar( 'header' ); ?>
					<?php get_template_part( 'content', 'page' ); ?>
			</div><!-- #content -->
</div><!-- #primary -->