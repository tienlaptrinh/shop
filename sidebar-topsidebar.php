<?php
/**
 *
 * @package own-shop-lite
 */


if ( ! is_active_sidebar( 'topsidebar' ) ) :
	return;
endif;

?>

<div id="topsidebar" class="widget-area">
	<?php dynamic_sidebar( 'topsidebar' ); ?>
</div>

