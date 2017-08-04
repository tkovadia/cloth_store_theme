<form  id="searchform" role="search" method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	
		<input type="search" class="search-field search-query form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'flash' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" />
	
	<button type="submit" class="search-submit btn search-btn btn_search"><i class="fa fa-search"></i></button>
</form>

 