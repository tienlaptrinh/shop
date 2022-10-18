<?php
/**
 * Custom template hooks for this theme.
 *
 *
 * @package own-shop-lite
 */


/**
 * wishlist hook
 */
if ( ! function_exists( 'own_shop_lite_action_header_wishlist' ) ) :
function own_shop_lite_action_header_wishlist() {
	do_action('own_shop_lite_action_header_wishlist');
}
endif;


/**
 * wishlist mobile hook
 */
if ( ! function_exists( 'own_shop_lite_action_header_mobile_wishlist' ) ) :
function own_shop_lite_action_header_mobile_wishlist() {
    do_action('own_shop_lite_action_header_mobile_wishlist');
}
endif;

