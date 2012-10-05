<div class="row">
<div id="masthead">
		<hgroup>
			<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo-trebank.png" \>
		</hgroup>
</div>
<div class="green">
				<?php if ( !is_page_template( 'create-listing.php' ) ) : ?>
				<form method="get" action="<?php bloginfo( 'url' ); ?>">
					<div id="main-search">
							<label for="search-text">
								<span class="search-title"><?php _e( 'Search For ', APP_TD ); ?></span><span class="search-help"><?php _e( '(e.g. restaurant, web designer, florist)', APP_TD ); ?></span>
							</label>

									<input type="text" name="ls" id="search-text" class="text" value="<?php va_show_search_query_var( 'ls' ); ?>" />
						</div>

						<div class="search-button">
							<!-- <input type="image" src="<?php echo get_bloginfo('template_directory'); ?>/images/search-button.png" value="<?php _e( 'Search', APP_TD ); ?>" /> -->
							<button type="submit" id="search-submit"></button>
						</div>
					</div>
					<?php if ( '' != $orderby = va_get_search_query_var( 'orderby' )){ ?>
					<input type="hidden" name="orderby" value="<?php echo $orderby; ?>" />
					<?php } ?>
					<?php if ( '' != $radius = va_get_search_query_var( 'radius' )){ ?>
					<input type="hidden" name="radius" value="<?php echo $radius; ?>" />
					<?php } ?>
					<?php if ( isset( $_GET['listing_cat'] ) ){ ?>
						<?php foreach ( $_GET['listing_cat'] as $k=>$listing_cat ) { ?>
							<input type="hidden" name="listing_cat[]" value="<?php echo $listing_cat; ?>" />
						<?php } ?>
					<?php } ?>
				</form>
				<?php endif; ?>
</div>
</div>
	<div class="clear"></div>
