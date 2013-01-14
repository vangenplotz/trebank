<div id="main">

<?php get_sidebar( 'single-listing' ); ?>
<?php the_listing_image_gallery(); ?>

<?php the_post(); ?>

<?php do_action( 'appthemes_notices' ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php appthemes_before_post_title( VA_LISTING_PTYPE ); ?>
	<h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
<!--	<p class="author"><?php printf( __( 'Added by %s', APP_TD ), va_get_the_author_listings_link() ); ?> </p> -->
	<?php appthemes_after_post_title( VA_LISTING_PTYPE ); ?>

	<?php $website = get_post_meta( get_the_ID(), 'website', true ); ?>
	<?php $facebook = get_post_meta( get_the_ID(), 'facebook', true ); ?>
	<?php $twitter = get_post_meta( get_the_ID(), 'twitter', true ); ?>

	<ul>
		<li class="address"><?php the_listing_address(); ?></li>
		<li class="phone"><strong><?php echo esc_html( get_post_meta( get_the_ID(), 'phone', true ) ); ?></strong></li>
	<?php if ( $website ) : ?>
		<li id="listing-website"><a href="<?php echo esc_url( 'http://' . $website ); ?>" title="<?php _e( 'Website', APP_TD ); ?>" target="_blank"><?php echo esc_html( $website ); ?></a></li>
	<?php endif; ?>
	</ul>

	<?php if ( $facebook or $twitter ) : ?>
		<div id="listing-follow">
			<p><?php _e( 'Follow:', APP_TD ); ?></p>
			<?php if ( $facebook ) : ?>
			<a href="<?php echo esc_url( 'http://facebook.com/' . $facebook ); ?>" title="<?php _e( 'Facebook', APP_TD ); ?>" target="_blank"><div class="facebook-icon">Facebook</div></a>
			<?php endif; ?>
			<?php if ( $twitter ) : ?>
			<a href="<?php echo esc_url( 'http://twitter.com/' . $twitter ); ?>" title="<?php _e( 'Twitter', APP_TD ); ?>" target="_blank"><div class="twitter-icon">Twitter -</div> <span class="twitter-handle">@<?php echo esc_html( $twitter ); ?></span></a>
			<?php endif; ?>
		</div>
	<?php endif; ?>

	<div class="listing-fields">
		<?php the_listing_fields(); ?>
	</div>

	<div class="pdf_nedlastning">
		<?php the_content(); ?>
	</div>

	<div class="listing-actions">
		<?php the_listing_edit_link(); ?>
	</div>

	<hr />
	<div class="tags"><?php the_listing_tags( '<span>' . __( 'Tjenester:', APP_TD ) . '</span> ' ); ?></div>

	<?php the_listing_files(); ?>

</article>

</div><!-- /#main -->