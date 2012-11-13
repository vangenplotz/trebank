<?php global $va_options; ?>
<div class="content-listing">
<?php appthemes_before_post_title( VA_LISTING_PTYPE ); ?>
<a href="<?php the_permalink(); ?>" rel="bookmark"><h2><?php the_title(); ?></h2>
<p><?php the_listing_address(); ?></p></a>
<?php appthemes_after_post_title( VA_LISTING_PTYPE ); ?>

</div>