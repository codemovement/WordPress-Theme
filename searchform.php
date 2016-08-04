<?php
/**
 * Search Form Template
 *
 * @package Masonry_PK
 */
?>

<form method="get" class="form-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="row">
		<div class="col-lg-12">
			<input type="text" class="form-control search-query floating-label" name="s" placeholder="<?php esc_attr_e('Search', 'masonry-pk'); ?>" />
		</div>
	</div>
</form>

