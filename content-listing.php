<?php global $va_options; ?>


<?php appthemes_before_post_title( VA_LISTING_PTYPE ); ?>
<h2 class="listing-heading"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
<?php appthemes_after_post_title( VA_LISTING_PTYPE ); ?>
<div class="tags">::<?php the_listing_tags( '<span>' . __('', APP_TD, ',' ) . '</span> ' ); ?></div>
<div class="content-listing">
<?php the_listing_thumbnail(); ?>
<?php the_listing_fields(); ?>
<?php $website = get_post_meta( get_the_ID(), 'website', true ); ?>
<p class="address">Adresse: <?php the_listing_address(); ?></p>
<p class="phone">Telefon:<strong><?php echo esc_html( get_post_meta( get_the_ID(), 'phone', true ) ); ?></strong></p>
<?php if ( $website ) : ?>
		<p class="listing-website">Web:<a href="<?php echo esc_url( 'http://' . $website ); ?>" title="<?php _e( 'Website', APP_TD ); ?>" target="_blank"><?php echo esc_html( $website ); ?></a></p>
<?php endif; ?>
<p class="more-info"><?php echo html_link( get_permalink(), __( 'Mer informasjon', APP_TD ) ); ?></p>
</div>