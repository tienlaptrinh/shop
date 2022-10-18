<?php

/**
 * Function to return the array of starter content for the theme.
 *
 * Passes it through the `own_shop_lite_starter_content` filter before returning.
 *
 *
 * @return array A filtered array of args for the starter_content.
 */
function own_shop_lite_get_starter_content() {

	// Define and register starter content to showcase the theme on new sites.
	$starter_content = array(

		// Specify the core-defined pages to create and add custom thumbnails to some of them.
		'posts'     => array(
			'front' => array(
				'post_type'    => 'page',
				'post_title'   => esc_html__( 'Gutenberg Home', 'own-shop-lite' ),
				'post_content' => '
									<!-- wp:cover {"url":"' . esc_url( get_stylesheet_directory_uri() ) .'/img/bg-image.jpg","id":299,"dimRatio":50,"overlayColor":"black","focalPoint":{"x":"0.49","y":"0.05"},"minHeight":550,"isDark":false,"align":"full","style":{"color":{}}} -->
									<div class="wp-block-cover alignfull is-light" style="min-height:550px"><span aria-hidden="true" class="has-black-background-color wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-299" alt="'. esc_attr_x('home-featured','Theme starter content','own-shop-lite'). '" src="' . esc_url( get_stylesheet_directory_uri() ) . '/img/bg-image.jpg" style="object-position:49% 5%" data-object-fit="cover" data-object-position="49% 5%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"50px","fontStyle":"normal","fontWeight":"700"}},"textColor":"white"} -->
									<p class="has-text-align-center has-white-color has-text-color" style="font-size:50px;font-style:normal;font-weight:700"><strong>' . esc_html_x( '20% OFF', 'Theme starter content', 'own-shop-lite' ) . '</strong></p>
									<!-- /wp:paragraph -->

									<!-- wp:spacer {"height":30} -->
									<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"25px"}},"textColor":"white"} -->
									<h2 class="has-text-align-center has-white-color has-text-color" id="best-deals-and-prices-guaranteed" style="font-size:25px">' . esc_html_x( 'BEST DEALS AND PRICES GUARANTEED', 'Theme starter content', 'own-shop-lite' ) . '</h2>
									<!-- /wp:heading -->

									<!-- wp:spacer {"height":30} -->
									<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:buttons -->
									<div class="wp-block-buttons"><!-- wp:button {"width":25,"align":"center","className":"is-style-fill","fontSize":"normal"} -->
									<div class="wp-block-button aligncenter has-custom-width wp-block-button__width-25 has-custom-font-size is-style-fill has-normal-font-size"><a class="wp-block-button__link" href="#">' . esc_html_x( 'START SHOPPING', 'Theme starter content', 'own-shop-lite' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div></div>
									<!-- /wp:cover -->

									<!-- wp:spacer {"height":60} -->
									<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#f18544"}},"fontSize":"normal"} -->
									<p class="has-text-align-center has-text-color has-normal-font-size" style="color:#f18544">' . esc_html_x( 'Newest Trends', 'Theme starter content', 'own-shop-lite' ) . '</p>
									<!-- /wp:paragraph -->

									<!-- wp:heading {"textAlign":"center","textColor":"black","fontSize":"large"} -->
									<h2 class="has-text-align-center has-black-color has-text-color has-large-font-size" id="category-collection">' . esc_html_x( 'CATEGORY COLLECTION', 'Theme starter content', 'own-shop-lite' ) . '</h2>
									<!-- /wp:heading -->

									<!-- wp:spacer {"height":70} -->
									<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:columns {"align":"wide"} -->
									<div class="wp-block-columns alignwide"><!-- wp:column {"width":"35%"} -->
									<div class="wp-block-column" style="flex-basis:35%"><!-- wp:cover {"url":"' . esc_url( get_stylesheet_directory_uri() ) . '/img/img-1.jpg","id":416,"dimRatio":70,"overlayColor":"white","focalPoint":{"x":"0.48","y":0},"isDark":false} -->
									<div class="wp-block-cover is-light"><span aria-hidden="true" class="has-white-background-color has-background-dim-70 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-416" alt="'. esc_attr_x('Image 1','Theme starter content','own-shop-lite'). '" src="' . esc_url( get_stylesheet_directory_uri() ) . '/img/img-1.jpg" style="object-position:48% 0%" data-object-fit="cover" data-object-position="48% 0%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"23px"}},"textColor":"black"} -->
									<p class="has-text-align-center has-black-color has-text-color" style="font-size:23px"><strong>All Accessories</strong></p>
									<!-- /wp:paragraph -->

									<!-- wp:spacer {"height":50} -->
									<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:buttons {"align":"wide","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
									<div class="wp-block-buttons alignwide"><!-- wp:button -->
									<div class="wp-block-button"><a class="wp-block-button__link" href="#">' . esc_html_x( 'SHOP NOW', 'Theme starter content', 'own-shop-lite' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons -->

									<!-- wp:paragraph -->
									<p></p>
									<!-- /wp:paragraph --></div></div>
									<!-- /wp:cover --></div>
									<!-- /wp:column -->

									<!-- wp:column {"width":"30%"} -->
									<div class="wp-block-column" style="flex-basis:30%"><!-- wp:cover {"url":"' . esc_url( get_stylesheet_directory_uri() ) . '/img/img-2.jpg","id":417,"dimRatio":50,"overlayColor":"white","focalPoint":{"x":"0.38","y":"0.07"},"isDark":false} -->
									<div class="wp-block-cover is-light"><span aria-hidden="true" class="has-white-background-color wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-417" alt="'. esc_attr_x('Image 2','Theme starter content','own-shop-lite'). '" src="' . esc_url( get_stylesheet_directory_uri() ) . '/img/img-2.jpg" style="object-position:38% 7%" data-object-fit="cover" data-object-position="38% 7%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"23px"}}} -->
									<p class="has-text-align-center" style="font-size:23px"><strong>' . esc_html_x( 'Electronics', 'Theme starter content', 'own-shop-lite' ) . '</strong></p>
									<!-- /wp:paragraph -->

									<!-- wp:spacer {"height":50} -->
									<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:buttons {"align":"wide","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
									<div class="wp-block-buttons alignwide"><!-- wp:button -->
									<div class="wp-block-button"><a class="wp-block-button__link" href="#">' . esc_html_x( 'SHOP NOW', 'Theme starter content', 'own-shop-lite' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div></div>
									<!-- /wp:cover --></div>
									<!-- /wp:column -->

									<!-- wp:column {"width":"35%"} -->
									<div class="wp-block-column" style="flex-basis:35%"><!-- wp:cover {"url":"' . esc_url( get_stylesheet_directory_uri() ) . '/img/img-3.jpg","id":432,"dimRatio":40,"overlayColor":"white","focalPoint":{"x":"0.00","y":"0.41"},"isDark":false} -->
									<div class="wp-block-cover is-light"><span aria-hidden="true" class="has-white-background-color has-background-dim-40 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-432" alt="'. esc_attr_x('Image 3','Theme starter content','own-shop-lite'). '" src="' . esc_url( get_stylesheet_directory_uri() ) . '/img/img-3.jpg" style="object-position:0% 41%" data-object-fit="cover" data-object-position="0% 41%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"23px"}},"textColor":"black"} -->
									<p class="has-text-align-center has-black-color has-text-color" style="font-size:23px"><strong>' . esc_html_x( 'Shoes', 'Theme starter content', 'own-shop-lite' ) . '</strong></p>
									<!-- /wp:paragraph -->

									<!-- wp:spacer {"height":50} -->
									<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
									<div class="wp-block-buttons"><!-- wp:button -->
									<div class="wp-block-button"><a class="wp-block-button__link">' . esc_html_x( 'SHOP NOW', 'Theme starter content', 'own-shop-lite' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div></div>
									<!-- /wp:cover --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns -->

									<!-- wp:spacer -->
									<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#f18544"}},"fontSize":"normal"} -->
									<p class="has-text-align-center has-text-color has-normal-font-size" style="color:#f18544">' . esc_html_x( 'New Launches', 'Theme starter content', 'own-shop-lite' ) . '</p>
									<!-- /wp:paragraph -->

									<!-- wp:heading {"textAlign":"center","textColor":"black","fontSize":"large"} -->
									<h2 class="has-text-align-center has-black-color has-text-color has-large-font-size" id="category-collection">' . esc_html_x( 'FASHION COLLECTION', 'Theme starter content', 'own-shop-lite' ) . '</h2>
									<!-- /wp:heading -->

									<!-- wp:spacer {"height":30} -->
									<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#555555"}},"fontSize":"normal"} -->
									<p class="has-text-align-center has-text-color has-normal-font-size" style="color:#555555">' . esc_html_x( 'This is a demo products list. Install WooCommerce Plugin ', 'Theme starter content', 'own-shop-lite' ) . '</p>
									<!-- /wp:paragraph -->

									<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#555555"}},"fontSize":"normal"} -->
									<p class="has-text-align-center has-text-color has-normal-font-size" style="color:#555555">' . esc_html_x( '&amp; Add WooCommerce Product Blocks here', 'Theme starter content', 'own-shop-lite' ) . '</p>
									<!-- /wp:paragraph -->

									<!-- wp:spacer {"height":50} -->
									<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:columns -->
									<div class="wp-block-columns"><!-- wp:column -->
									<div class="wp-block-column"><!-- wp:columns {"align":"wide"} -->
									<div class="wp-block-columns alignwide"><!-- wp:column -->
									<div class="wp-block-column"><!-- wp:cover {"overlayColor":"cyan-bluish-gray","minHeight":306,"minHeightUnit":"px","isDark":false} -->
									<div class="wp-block-cover is-light" style="min-height:306px"><span aria-hidden="true" class="has-cyan-bluish-gray-background-color has-background-dim-100 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…"} -->
									<p class="has-text-align-center">' . esc_html_x( 'Demo Product', 'Theme starter content', 'own-shop-lite' ) . '</p>
									<!-- /wp:paragraph --></div></div>
									<!-- /wp:cover -->

									<!-- wp:heading {"textAlign":"center","fontSize":"medium"} -->
									<h2 class="has-text-align-center has-medium-font-size" id="product-1">' . esc_html_x( 'Product 1', 'Theme starter content', 'own-shop-lite' ) . '</h2>
									<!-- /wp:heading -->

									<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"normal"} -->
									<h3 class="has-text-align-center has-normal-font-size" id="100">' . esc_html_x( '$100', 'Theme starter content', 'own-shop-lite' ) . '</h3>
									<!-- /wp:heading -->

									<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
									<div class="wp-block-buttons"><!-- wp:button -->
									<div class="wp-block-button"><a class="wp-block-button__link">' . esc_html_x( 'Add to Cart', 'Theme starter content', 'own-shop-lite' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div>
									<!-- /wp:column -->

									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:cover {"overlayColor":"luminous-vivid-amber","minHeight":306,"minHeightUnit":"px","isDark":false} -->
									<div class="wp-block-cover is-light" style="min-height:306px"><span aria-hidden="true" class="has-luminous-vivid-amber-background-color has-background-dim-100 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…"} -->
									<p class="has-text-align-center">' . esc_html_x( 'Demo Product', 'Theme starter content', 'own-shop-lite' ) . '</p>
									<!-- /wp:paragraph --></div></div>
									<!-- /wp:cover -->

									<!-- wp:heading {"textAlign":"center","fontSize":"medium"} -->
									<h2 class="has-text-align-center has-medium-font-size" id="product-2">' . esc_html_x( 'Product 2', 'Theme starter content', 'own-shop-lite' ) . '</h2>
									<!-- /wp:heading -->

									<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"normal"} -->
									<h3 class="has-text-align-center has-normal-font-size" id="89">' . esc_html_x( '$89', 'Theme starter content', 'own-shop-lite' ) . '</h3>
									<!-- /wp:heading -->

									<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
									<div class="wp-block-buttons"><!-- wp:button -->
									<div class="wp-block-button"><a class="wp-block-button__link">' . esc_html_x( 'Add to Cart', 'Theme starter content', 'own-shop-lite' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns --></div>
									<!-- /wp:column -->

									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:columns {"align":"wide"} -->
									<div class="wp-block-columns alignwide"><!-- wp:column -->
									<div class="wp-block-column"><!-- wp:cover {"overlayColor":"light-green-cyan","minHeight":305,"minHeightUnit":"px","isDark":false} -->
									<div class="wp-block-cover is-light" style="min-height:305px"><span aria-hidden="true" class="has-light-green-cyan-background-color has-background-dim-100 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…"} -->
									<p class="has-text-align-center">' . esc_html_x( 'Demo Product', 'Theme starter content', 'own-shop-lite' ) . '</p>
									<!-- /wp:paragraph --></div></div>
									<!-- /wp:cover -->

									<!-- wp:heading {"textAlign":"center","fontSize":"medium"} -->
									<h2 class="has-text-align-center has-medium-font-size" id="product-3">' . esc_html_x( 'Product 3', 'Theme starter content', 'own-shop-lite' ) . '</h2>
									<!-- /wp:heading -->

									<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"normal"} -->
									<h3 class="has-text-align-center has-normal-font-size" id="149-100"><s>' . esc_html_x( '$149', 'Theme starter content', 'own-shop-lite' ) . '</s> $100</h3>
									<!-- /wp:heading -->

									<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
									<div class="wp-block-buttons"><!-- wp:button -->
									<div class="wp-block-button"><a class="wp-block-button__link">' . esc_html_x( 'Add to Cart', 'Theme starter content', 'own-shop-lite' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div>
									<!-- /wp:column -->

									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:cover {"overlayColor":"pale-cyan-blue","minHeight":303,"minHeightUnit":"px","isDark":false} -->
									<div class="wp-block-cover is-light" style="min-height:303px"><span aria-hidden="true" class="has-pale-cyan-blue-background-color has-background-dim-100 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…"} -->
									<p class="has-text-align-center">' . esc_html_x( 'Demo Product', 'Theme starter content', 'own-shop-lite' ) . '</p>
									<!-- /wp:paragraph --></div></div>
									<!-- /wp:cover -->

									<!-- wp:heading {"textAlign":"center","fontSize":"medium"} -->
									<h2 class="has-text-align-center has-medium-font-size" id="product-4">' . esc_html_x( 'Product 4', 'Theme starter content', 'own-shop-lite' ) . '</h2>
									<!-- /wp:heading -->

									<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"normal"} -->
									<h3 class="has-text-align-center has-normal-font-size" id="79">' . esc_html_x( '$79', 'Theme starter content', 'own-shop-lite' ) . '</h3>
									<!-- /wp:heading -->

									<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
									<div class="wp-block-buttons"><!-- wp:button -->
									<div class="wp-block-button"><a class="wp-block-button__link">' . esc_html_x( 'Add to Cart', 'Theme starter content', 'own-shop-lite' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns -->

									<!-- wp:spacer {"height":60} -->
									<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:cover {"url":"' . esc_url( get_stylesheet_directory_uri() ) .'/img/img-4.jpg","id":532,"dimRatio":0,"isDark":false} -->
									<div class="wp-block-cover is-light"><span aria-hidden="true" class="has-background-dim-0 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-532" alt="'. esc_attr_x('ctc-bg','Theme starter content','own-shop-lite'). '" src="' . esc_url( get_stylesheet_directory_uri() ) . '/img/img-4.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"left","placeholder":"Write title…","fontSize":"x-large"} -->
									<p class="has-text-align-left has-x-large-font-size"><strong>' . esc_html_x( 'Winter', 'Theme starter content', 'own-shop-lite' ) . '</strong></p>
									<!-- /wp:paragraph -->

									<!-- wp:spacer {"height":30} -->
									<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:paragraph {"align":"left","placeholder":"Write title…","style":{"typography":{"fontSize":"65px"}}} -->
									<p class="has-text-align-left" style="font-size:65px"><strong>' . esc_html_x( 'Season Sale', 'Theme starter content', 'own-shop-lite' ) . '</strong></p>
									<!-- /wp:paragraph -->

									<!-- wp:spacer {"height":30} -->
									<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:paragraph -->
									<p>' . esc_html_x( 'Upto 50 % OFF HURRY UP', 'Theme starter content', 'own-shop-lite' ) . '</p>
									<!-- /wp:paragraph --></div></div>
									<!-- /wp:cover -->

									<!-- wp:spacer {"height":60} -->
									<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#f18544"}},"fontSize":"normal"} -->
									<p class="has-text-align-center has-text-color has-normal-font-size" style="color:#f18544">' . esc_html_x( 'New Launches', 'Theme starter content', 'own-shop-lite' ) . '</p>
									<!-- /wp:paragraph -->

									<!-- wp:heading {"textAlign":"center","textColor":"black","fontSize":"huge"} -->
									<h2 class="has-text-align-center has-black-color has-text-color has-huge-font-size" id="trendy-products">' . esc_html_x( 'Trendy Products', 'Theme starter content', 'own-shop-lite' ) . '</h2>
									<!-- /wp:heading -->

									<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#555555"}},"fontSize":"normal"} -->
									<p class="has-text-align-center has-text-color has-normal-font-size" style="color:#555555">' . esc_html_x( 'This is a demo products list. Install WooCommerce Plugin', 'Theme starter content', 'own-shop-lite' ) . '</p>
									<!-- /wp:paragraph -->

									<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#555555"}},"fontSize":"normal"} -->
									<p class="has-text-align-center has-text-color has-normal-font-size" style="color:#555555">' . esc_html_x( '&amp; Add WooCommerce Product Blocks', 'Theme starter content', 'own-shop-lite' ) . '</p>
									<!-- /wp:paragraph -->

									<!-- wp:spacer {"height":80} -->
									<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:paragraph -->
									<p></p>
									<!-- /wp:paragraph -->

									<!-- wp:columns -->
									<div class="wp-block-columns"><!-- wp:column -->
									<div class="wp-block-column"><!-- wp:columns {"align":"wide"} -->
									<div class="wp-block-columns alignwide"><!-- wp:column -->
									<div class="wp-block-column"><!-- wp:cover {"overlayColor":"cyan-bluish-gray","minHeight":306,"minHeightUnit":"px","isDark":false} -->
									<div class="wp-block-cover is-light" style="min-height:306px"><span aria-hidden="true" class="has-cyan-bluish-gray-background-color has-background-dim-100 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…"} -->
									<p class="has-text-align-center">' . esc_html_x( 'Demo Product', 'Theme starter content', 'own-shop-lite' ) . '</p>
									<!-- /wp:paragraph --></div></div>
									<!-- /wp:cover -->

									<!-- wp:heading {"textAlign":"center","fontSize":"medium"} -->
									<h2 class="has-text-align-center has-medium-font-size" id="product-1">' . esc_html_x( 'Product 1', 'Theme starter content', 'own-shop-lite' ) . '</h2>
									<!-- /wp:heading -->

									<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"normal"} -->
									<h3 class="has-text-align-center has-normal-font-size" id="100">' . esc_html_x( '$100', 'Theme starter content', 'own-shop-lite' ) . '</h3>
									<!-- /wp:heading -->

									<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
									<div class="wp-block-buttons"><!-- wp:button -->
									<div class="wp-block-button"><a class="wp-block-button__link">' . esc_html_x( 'Add to Cart', 'Theme starter content', 'own-shop-lite' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div>
									<!-- /wp:column -->

									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:cover {"overlayColor":"luminous-vivid-amber","minHeight":306,"minHeightUnit":"px","isDark":false} -->
									<div class="wp-block-cover is-light" style="min-height:306px"><span aria-hidden="true" class="has-luminous-vivid-amber-background-color has-background-dim-100 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…"} -->
									<p class="has-text-align-center">' . esc_html_x( 'Demo Product', 'Theme starter content', 'own-shop-lite' ) . '</p>
									<!-- /wp:paragraph --></div></div>
									<!-- /wp:cover -->

									<!-- wp:heading {"textAlign":"center","fontSize":"medium"} -->
									<h2 class="has-text-align-center has-medium-font-size" id="product-2">' . esc_html_x( 'Product 2', 'Theme starter content', 'own-shop-lite' ) . '</h2>
									<!-- /wp:heading -->

									<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"normal"} -->
									<h3 class="has-text-align-center has-normal-font-size" id="89">' . esc_html_x( '$89', 'Theme starter content', 'own-shop-lite' ) . '</h3>
									<!-- /wp:heading -->

									<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
									<div class="wp-block-buttons"><!-- wp:button -->
									<div class="wp-block-button"><a class="wp-block-button__link">' . esc_html_x( 'Add to Cart', 'Theme starter content', 'own-shop-lite' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns --></div>
									<!-- /wp:column -->

									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:columns {"align":"wide"} -->
									<div class="wp-block-columns alignwide"><!-- wp:column -->
									<div class="wp-block-column"><!-- wp:cover {"overlayColor":"light-green-cyan","minHeight":305,"minHeightUnit":"px","isDark":false} -->
									<div class="wp-block-cover is-light" style="min-height:305px"><span aria-hidden="true" class="has-light-green-cyan-background-color has-background-dim-100 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…"} -->
									<p class="has-text-align-center">' . esc_html_x( 'Demo Product', 'Theme starter content', 'own-shop-lite' ) . '</p>
									<!-- /wp:paragraph --></div></div>
									<!-- /wp:cover -->

									<!-- wp:heading {"textAlign":"center","fontSize":"medium"} -->
									<h2 class="has-text-align-center has-medium-font-size" id="product-3">' . esc_html_x( 'Product 3', 'Theme starter content', 'own-shop-lite' ) . '</h2>
									<!-- /wp:heading -->

									<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"normal"} -->
									<h3 class="has-text-align-center has-normal-font-size" id="149-100"><s>' . esc_html_x( '$149', 'Theme starter content', 'own-shop-lite' ) . '</s> $100</h3>
									<!-- /wp:heading -->

									<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
									<div class="wp-block-buttons"><!-- wp:button -->
									<div class="wp-block-button"><a class="wp-block-button__link">' . esc_html_x( 'Add to Cart', 'Theme starter content', 'own-shop-lite' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div>
									<!-- /wp:column -->

									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:cover {"overlayColor":"pale-cyan-blue","minHeight":303,"minHeightUnit":"px","isDark":false} -->
									<div class="wp-block-cover is-light" style="min-height:303px"><span aria-hidden="true" class="has-pale-cyan-blue-background-color has-background-dim-100 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…"} -->
									<p class="has-text-align-center">' . esc_html_x( 'Demo Product', 'Theme starter content', 'own-shop-lite' ) . '</p>
									<!-- /wp:paragraph --></div></div>
									<!-- /wp:cover -->

									<!-- wp:heading {"textAlign":"center","fontSize":"medium"} -->
									<h2 class="has-text-align-center has-medium-font-size" id="product-4">' . esc_html_x( 'Product 4', 'Theme starter content', 'own-shop-lite' ) . '</h2>
									<!-- /wp:heading -->

									<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"normal"} -->
									<h3 class="has-text-align-center has-normal-font-size" id="79">' . esc_html_x( '$79', 'Theme starter content', 'own-shop-lite' ) . '</h3>
									<!-- /wp:heading -->

									<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
									<div class="wp-block-buttons"><!-- wp:button -->
									<div class="wp-block-button"><a class="wp-block-button__link">' . esc_html_x( 'Add to Cart', 'Theme starter content', 'own-shop-lite' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns -->

									<!-- wp:spacer {"height":50} -->
									<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:columns {"style":{"color":{"background":"#eeeeee"}}} -->
									<div class="wp-block-columns has-background" style="background-color:#eeeeee"><!-- wp:column {"verticalAlignment":"center"} -->
									<div class="wp-block-column is-vertically-aligned-center"><!-- wp:spacer {"height":70} -->
									<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:heading {"textAlign":"center","textColor":"black","fontSize":"medium"} -->
									<h2 class="has-text-align-center has-black-color has-text-color has-medium-font-size" id="doorstep-within-1-hour"> ' . esc_html_x( 'Doorstep within 1 hour', 'Theme starter content', 'own-shop-lite' ) . '</h2>
									<!-- /wp:heading -->

									<!-- wp:paragraph {"align":"center"} -->
									<p class="has-text-align-center">' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id elementum orci.&nbsp;', 'Theme starter content', 'own-shop-lite' ) . '</p>
									<!-- /wp:paragraph -->

									<!-- wp:spacer {"height":70} -->
									<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer --></div>
									<!-- /wp:column -->

									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:spacer {"height":70} -->
									<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:heading {"textAlign":"center","textColor":"black","fontSize":"medium"} -->
									<h2 class="has-text-align-center has-black-color has-text-color has-medium-font-size" id="guaranteed-satisfaction">' . esc_html_x( 'Guaranteed Satisfaction', 'Theme starter content', 'own-shop-lite' ) . '</h2>
									<!-- /wp:heading -->

									<!-- wp:paragraph {"align":"center"} -->
									<p class="has-text-align-center">' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id elementum orci.&nbsp;', 'Theme starter content', 'own-shop-lite' ) . '</p>
									<!-- /wp:paragraph -->

									<!-- wp:spacer {"height":70} -->
									<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer --></div>
									<!-- /wp:column -->

									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:spacer {"height":70} -->
									<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:heading {"textAlign":"center","textColor":"black","fontSize":"medium"} -->
									<h2 class="has-text-align-center has-black-color has-text-color has-medium-font-size" id="great-discounts">' . esc_html_x( 'Great Discounts', 'Theme starter content', 'own-shop-lite' ) . '</h2>
									<!-- /wp:heading -->

									<!-- wp:paragraph {"align":"center"} -->
									<p class="has-text-align-center">' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id elementum orci.&nbsp;', 'Theme starter content', 'own-shop-lite' ) . '</p>
									<!-- /wp:paragraph -->

									<!-- wp:spacer {"height":70} -->
									<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer --></div>
									<!-- /wp:column -->

									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:spacer {"height":70} -->
									<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:heading {"textAlign":"center","textColor":"black","fontSize":"medium"} -->
									<h2 class="has-text-align-center has-black-color has-text-color has-medium-font-size" id="best-price">' . esc_html_x( 'Best Price', 'Theme starter content', 'own-shop-lite' ) . '</h2>
									<!-- /wp:heading -->

									<!-- wp:paragraph {"align":"center"} -->
									<p class="has-text-align-center">' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id elementum orci.&nbsp;', 'Theme starter content', 'own-shop-lite' ) . '</p>
									<!-- /wp:paragraph -->

									<!-- wp:spacer {"height":70} -->
									<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns -->

									<!-- wp:paragraph -->
									<p></p>
									<!-- /wp:paragraph -->
								',
			),
			'blog',
			'contact' => array(
				'post_type'    => 'page',
				'post_title'   => esc_html__( 'Contact', 'own-shop-lite' ),
				'post_content' => '
									<!-- wp:spacer {"height":50} -->
									<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:columns {"align":"wide"} -->
									<div class="wp-block-columns alignwide"><!-- wp:column -->
									<div class="wp-block-column"><!-- wp:heading {"fontSize":"medium"} -->
									<h2 class="has-medium-font-size" id="email-us">' . esc_html_x( 'Email Us', 'Theme starter content', 'own-shop-lite' ) . '</h2>
									<!-- /wp:heading -->

									<!-- wp:paragraph {"fontSize":"normal"} -->
									<p class="has-normal-font-size">' . esc_html_x( 'support@spiraclethemes.com', 'Theme starter content', 'own-shop-lite' ) . '</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column -->

									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:heading {"fontSize":"medium"} -->
									<h2 class="has-medium-font-size" id="phone">' . esc_html_x( 'Phone', 'Theme starter content', 'own-shop-lite' ) . '</h2>
									<!-- /wp:heading -->

									<!-- wp:paragraph {"fontSize":"normal"} -->
									<p class="has-normal-font-size">' . esc_html_x( '123-456-7890', 'Theme starter content', 'own-shop-lite' ) . '</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column -->

									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:heading {"fontSize":"medium"} -->
									<h2 class="has-medium-font-size" id="address">' . esc_html_x( 'Address', 'Theme starter content', 'own-shop-lite' ) . '</h2>
									<!-- /wp:heading -->

									<!-- wp:paragraph {"fontSize":"normal"} -->
									<p class="has-normal-font-size">' . esc_html_x( '123, Upper Street New York, US', 'Theme starter content', 'own-shop-lite' ) . '</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns -->

									<!-- wp:spacer -->
									<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:columns {"align":"wide"} -->
									<div class="wp-block-columns alignwide"><!-- wp:column -->
									<div class="wp-block-column"><!-- wp:contact-form-7/contact-form-selector -->
									<div class="wp-block-contact-form-7-contact-form-selector">[contact-form-7 id="" title=""]</div>
									<!-- /wp:contact-form-7/contact-form-selector -->

									<!-- wp:spacer {"height":50} -->
									<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:paragraph {"textColor":"black"} -->
									<p class="has-black-color has-text-color">' . esc_html_x( 'Add the Contact Form 7 Shortcode above', 'Theme starter content', 'own-shop-lite' ) . '</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column -->

									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:image {"id":507,"sizeSlug":"full","linkDestination":"none"} -->
									<figure class="wp-block-image size-full"><img src="' . esc_url( get_stylesheet_directory_uri() ) . '/img/img-5.jpg" alt="Contact Us" class="wp-image-507"/></figure>
									<!-- /wp:image --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns -->

									<!-- wp:spacer -->
									<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:paragraph -->
									<p></p>
									<!-- /wp:paragraph -->
								',
			),
		),

		// Default to a static front page and assign the front and posts pages.
		'options'   => array(
			'show_on_front'  => 'page',
			'page_on_front'  => '{{front}}',
			'page_for_posts' => '{{blog}}',
			'blogdescription' => esc_html__( 'WooCommerce WordPress theme', 'own-shop-lite' ),
			'blogname' => 'Own Shop Lite',
		),
		'theme_mods'  => array(
			'own_shop_lite_enable_header_category_menu'  => true,
			'own_shop_site_primary_color'  => '#f18544',
			'own_shop_site_secondary_color'  => '#d86b3c',
		),

		'widgets' => array(
			'topsidebar' => array(
				'text_world' => array(
			       	'text',
			        array(
			        	'text'  => '<p>Free Shipping all orders above $99. <button>Shop Now</button></p>',
			        )
			    ),
			),
			'footer-1' => array(
				'text_world' => array(
			       	'text',
			        array(
			        	'title'  => esc_html__( 'Quick Links', 'own-shop-lite' ),
			        	'text'  => '<ul>
										<li><a href="#">' . esc_html__( 'About Us', 'own-shop-lite' ) . '</a></li>
										<li><a href="#">' . esc_html__( 'Why Own Shop Lite', 'own-shop-lite' ) . '</a></li>
										<li><a href="#">' . esc_html__( 'Customer Reviews', 'own-shop-lite' ) . '</a></li>
										<li><a href="#">' . esc_html__( 'Support', 'own-shop-lite' ) . '</a></li>
										<li><a href="#">' . esc_html__( 'Privacy Policy', 'own-shop-lite' ) . '</a></li>
										<li><a href="#">' . esc_html__( 'Terms & Conditions', 'own-shop-lite' ) . '</a></li>
									</ul>',
			        )
			    ),
			),
			'footer-2' => array(
				'archives'
			),
			'footer-3' => array(
				'text_world' => array(
			       	'text',
			        array(
			        	'text'  => '<img src="' . esc_url( get_stylesheet_directory_uri() ) . '/img/logo.png" alt="' . esc_attr__( 'footer logo', 'own-shop-lite' ) . '" width="150px"><br/><br/>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras urna sem, imperdiet in leo et, fermentum luctus ipsum. Integer ut orci justo. Curabitur posuere rutrum condimentum. In porttitor ligula vel bibendum dictum<br/><br/><br/>',
			        )
			    ),
			),
		),
		
		// Set up nav menus for each of the two areas registered in the theme.
		'nav_menus' => array(
			// Assign a menu to the "primary" location.
			'primary' => array(
				'name'  => esc_html__( 'Primary', 'own-shop-lite' ),
				'items' => array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					'page_blog',
					'page_contact',
				),
			),
			'categorymenu' => array(
				'name'  => esc_html__( 'Category Menu', 'own-shop-lite' ),
				'items' => array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					'page_blog',
					'page_contact',
				),
			),
		),
	);

	/**
	 * Filters the array of starter content.
	 *
	 *
	 * @param array $starter_content Array of starter content.
	 */
	return apply_filters( 'own_shop_lite_starter_content', $starter_content );
}
