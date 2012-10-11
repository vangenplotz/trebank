<?php global $va_options; ?>


<?php appthemes_before_post_title( VA_LISTING_PTYPE ); ?>
<h2 class="listing-heading"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
<?php appthemes_after_post_title( VA_LISTING_PTYPE ); ?>
<div class="tags">::<?php the_listing_tags( '<span>' . __('', APP_TD, ',' ) . '</span> ' ); ?></div>
<div class="content-listing">
<?php the_listing_thumbnail(); ?>
<?php the_listing_fields(); ?>
<?php $website = get_post_meta( get_the_ID(), 'website', true ); ?>
<p class="address"><span class="custom-field-label">Adresse</span>: <?php the_listing_address(); ?></p>
<p class="phone"><span class="custom-field-label">Telefon</span>: <strong><?php echo esc_html( get_post_meta( get_the_ID(), 'phone', true ) ); ?></strong></p>
<?php if ( $website ) : ?>
		<p class="listing-website"><span class="custom-field-label">Web</span>: <a href="<?php echo esc_url( 'http://' . $website ); ?>" title="<?php _e( 'Website', APP_TD ); ?>" target="_blank"><?php echo esc_html( $website ); ?></a></p>
<?php endif; ?>
<p class="more-info"><a href="<?php the_permalink(); ?>" rel="bookmark">Mer informasjon</a></p>
</div>