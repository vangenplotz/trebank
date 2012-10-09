<?php global $va_options; ?>
<div class="tags">::<?php the_listing_tags( '<span>' . __('', APP_TD, ',' ) . '</span> ' ); ?></div>
<?php appthemes_before_post_title( VA_LISTING_PTYPE ); ?>
<h2 class="listing-heading"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
<?php appthemes_after_post_title( VA_LISTING_PTYPE ); ?>
<div class="content-listing">
<ul>
		<li class="address"><?php the_listing_address(); ?></li>
		<li class="phone"><strong><?php echo esc_html( get_post_meta( get_the_ID(), 'phone', true ) ); ?></strong></li>
	<?php if ( $website ) : ?>
		<li id="listing-website"><a href="<?php echo esc_url( 'http://' . $website ); ?>" title="<?php _e( 'Website', APP_TD ); ?>" target="_blank"><?php echo esc_html( $website ); ?></a></li>
	<?php endif; ?>
	</ul>
<p><strong><?php _e( 'Description:', APP_TD ); ?></strong> <?php the_excerpt(); ?></p>

<p><?php echo html_link( get_permalink(), __( 'Mer informasjon', APP_TD ) ); ?></p>
</div>