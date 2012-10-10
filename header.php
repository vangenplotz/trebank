<div class="row header">
<div id="masthead">
		<hgroup>
			<a href="/"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo-trebank.png" \></a>
		</hgroup>
</div>
<div class="green">
<form id="main-search" action="/" method="get">
    <fieldset>
        <label for="search">S&Oslash;K  </label>
        <label class="info">(f.eks overflatebehandling, limtredrager, h&oslash;vleri)</label>
        <input class="text" type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
        <input class="sbutton" type="image" alt="Search" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/search.png" />
    </fieldset>
</form>
<div class="tags-header">
	<?php dynamic_sidebar( 'header' ); ?>
</div>
</div>
</div>

