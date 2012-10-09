<?php global $va_options; ?>
<div class="tags">::<?php the_listing_tags( '<span>' . __('', APP_TD, ',' ) . '</span> ' ); ?></div>
<?php appthemes_before_post_title( VA_LISTING_PTYPE ); ?>
<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
<?php appthemes_after_post_title( VA_LISTING_PTYPE ); ?>

<p><?php echo esc_html( get_post_meta( get_the_ID(), 'phone', true ) ); ?></p>
<p><?php the_listing_address(); ?></p>
<p><strong><?php _e( 'Description:', APP_TD ); ?></strong> <?php the_excerpt(); ?> 
<?php echo html_link( get_permalink(), __( 'Mer informasjon', APP_TD ) ); ?></p>