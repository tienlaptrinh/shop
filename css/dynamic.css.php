<?php
/**
 * Own Shop Lite: Dynamic CSS stylesheet
 * 
 */


function own_shop_lite_dynamic_css_stylesheet() {
    
    $layout= (OWN_SHOP_LITE_CONTAINER_CLASS=='os-container') ? '1350px' : '1170px';
    $primary_color= sanitize_hex_color(get_theme_mod( 'own_shop_site_primary_color','#333333' ));
    $secondary_color= sanitize_hex_color(get_theme_mod( 'own_shop_site_secondary_color','#000000' ));
    $menu_bg_color= sanitize_hex_color(get_theme_mod( 'own_shop_lite_site_menu_bg_color','#0f0f0f' ));
    $cat_menu_bg_color= sanitize_hex_color(get_theme_mod( 'own_shop_lite_site_cat_menu_bg_color','#303030' ));


    $css = '

        .wp-block-cover.alignwide,
        .wp-block-columns.alignwide,
        .wc-block-grid__products,
        .wp-block-cover-image .wp-block-cover__inner-container, 
        .wp-block-cover .wp-block-cover__inner-container {
             padding: 0 15px;
        }

        h1, h2, h3, h4, h5, h6,
        .single h1.entry-title a {
            color: #000;
        }

        .style1 #header-main .menu-row {
            background: '.$menu_bg_color.';
        }

        .header-product-custom-menu {
            background: '.$cat_menu_bg_color.';
        }

        .top-menu .navigation >li.current-menu-item  a {
            color: '.$primary_color.';
        }

        header button[type="submit"] {
            font-size: 0 !important;
        }

        header {
            border: none;
        }

        footer#footer, footer#footer .footer-widgets-wrapper {
            clear: both;
        }

        .wp-block-button__link,
        .wc-block-grid__product-onsale,
        .wp-block-search .wp-block-search__button {
            background: '.$primary_color.' !important;
            color: #fff !important; 
            border: none;
        }

	';

    //CSS when layout width changes
    if('container'===esc_html(get_theme_mod('own_shop_layout_content_width_ratio','os-container'))) :
        $css .='
           @media only screen and (min-width: 1400px) and (max-width: 1921px) {
                header button[type=submit] i {
                    left: 465px;
                }
            }

            @media (max-width: 767px) {
                .has-blocks h1:not(h1.site-title):not(.blog h1):not(.single h1):not(.archive h1):not(.wp-block-cover__inner-container h1), 
                .has-blocks h2:not(.blog h2):not(.single h2):not(.archive h2):not(.wp-block-cover__inner-container h2), 
                .has-blocks h3:not(.blog h3):not(.single h3):not(.archive h3):not(.wp-block-cover__inner-container h3), 
                .has-blocks h4:not(.blog h4):not(.single h4):not(.archive h4):not(footer h4):not(.wp-block-cover__inner-container h4), 
                .has-blocks h5:not(.blog h5):not(.single h5):not(.archive h5):not(.wp-block-cover__inner-container h5), 
                .has-blocks h6:not(.blog h6):not(.single h6):not(.archive h6):not(.wp-block-cover__inner-container h6),
                .has-blocks p:not(blockquote p):not(.container p):not(p.site-title):not(p.site-description),
                .has-blocks blockquote,
                .has-blocks table,
                .has-blocks dl,
                .has-blocks ul:not(ul.header-woo-cart):not(ul.site-header-cart):not(ul.wishlist-icon-container-mobile):not(ul.breadcrumbs-wrapper),
                .has-blocks ol,
                .has-blocks address,
                .has-blocks pre,
                .has-blocks .wp-block-cover.alignwide,
                .has-blocks .wp-block-columns.alignwide,
                .has-blocks .wc-block-grid__products,
                .has-blocks .wp-block-cover-image .wp-block-cover__inner-container, 
                .has-blocks .wp-block-cover .wp-block-cover__inner-container {
                    padding-left: 15px;
                    padding-right: 15px;
                }

                .has-blocks figure.alignleft > p {
                    padding-left: 15px;
                    padding-right: 15px;
                }
            }

            @media (min-width: 768px) {
                .has-blocks h1:not(h1.site-title):not(.blog h1):not(.single h1):not(.archive h1):not(.wp-block-cover__inner-container h1), 
                .has-blocks h2:not(.blog h2):not(.single h2):not(.archive h2):not(.wp-block-cover__inner-container h2), 
                .has-blocks h3:not(.blog h3):not(.single h3):not(.archive h3):not(.wp-block-cover__inner-container h3), 
                .has-blocks h4:not(.blog h4):not(.single h4):not(.archive h4):not(footer h4):not(.wp-block-cover__inner-container h4), 
                .has-blocks h5:not(.blog h5):not(.single h5):not(.archive h5):not(.wp-block-cover__inner-container h5), 
                .has-blocks h6:not(.blog h6):not(.single h6):not(.archive h6):not(.wp-block-cover__inner-container h6),
                .has-blocks p:not(blockquote p):not(.container p):not(p.site-title):not(p.site-description),
                .has-blocks blockquote,
                .has-blocks table,
                .has-blocks dl,
                .has-blocks ul:not(ul.header-woo-cart):not(ul.site-header-cart):not(ul.wishlist-icon-container-mobile):not(ul.breadcrumbs-wrapper),
                .has-blocks ol,
                .has-blocks address,
                .has-blocks pre,
                .has-blocks .wp-block-cover.alignwide,
                .has-blocks .wp-block-columns.alignwide,
                .has-blocks .wc-block-grid__products,
                .has-blocks .wp-block-cover-image .wp-block-cover__inner-container, 
                .has-blocks .wp-block-cover .wp-block-cover__inner-container {
                    max-width: 750px;
                    margin: 0 auto;
                }

                .has-blocks figure.alignleft > p {
                    width: 750px;
                }
            }

            @media (min-width: 992px) {
                .has-blocks h1:not(h1.site-title):not(.blog h1):not(.single h1):not(.archive h1):not(.wp-block-cover__inner-container h1), 
                .has-blocks h2:not(.blog h2):not(.single h2):not(.archive h2):not(.wp-block-cover__inner-container h2), 
                .has-blocks h3:not(.blog h3):not(.single h3):not(.archive h3):not(.wp-block-cover__inner-container h3), 
                .has-blocks h4:not(.blog h4):not(.single h4):not(.archive h4):not(footer h4):not(.wp-block-cover__inner-container h4), 
                .has-blocks h5:not(.blog h5):not(.single h5):not(.archive h5):not(.wp-block-cover__inner-container h5), 
                .has-blocks h6:not(.blog h6):not(.single h6):not(.archive h6):not(.wp-block-cover__inner-container h6),
                .has-blocks p:not(blockquote p):not(.container p):not(p.site-title):not(p.site-description),
                .has-blocks blockquote,
                .has-blocks table,
                .has-blocks dl,
                .has-blocks ul:not(ul.header-woo-cart):not(ul.site-header-cart):not(ul.wishlist-icon-container-mobile):not(ul.breadcrumbs-wrapper),
                .has-blocks ol,
                .has-blocks address,
                .has-blocks pre,
                .has-blocks .wp-block-cover.alignwide,
                .has-blocks .wp-block-columns.alignwide,
                .has-blocks .wc-block-grid__products,
                .has-blocks .wp-block-cover-image .wp-block-cover__inner-container, 
                .has-blocks .wp-block-cover .wp-block-cover__inner-container {
                    max-width: 970px;
                    margin: 0 auto;
                }

                .has-blocks figure.alignleft > p {
                    width: 970px;
                }
            }

            @media (min-width: 1200px) {
                .has-blocks h1:not(h1.site-title):not(.blog h1):not(.single h1):not(.archive h1):not(.wp-block-cover__inner-container h1), 
                .has-blocks h2:not(.blog h2):not(.single h2):not(.archive h2):not(.wp-block-cover__inner-container h2), 
                .has-blocks h3:not(.blog h3):not(.single h3):not(.archive h3):not(.wp-block-cover__inner-container h3), 
                .has-blocks h4:not(.blog h4):not(.single h4):not(.archive h4):not(footer h4):not(.wp-block-cover__inner-container h4),
                .has-blocks h5:not(.blog h5):not(.single h5):not(.archive h5):not(.wp-block-cover__inner-container h5), 
                .has-blocks h6:not(.blog h6):not(.single h6):not(.archive h6):not(.wp-block-cover__inner-container h6),
                .has-blocks p:not(blockquote p):not(.container p):not(p.site-title):not(p.site-description),
                .has-blocks blockquote,
                .has-blocks table,
                .has-blocks dl,
                .has-blocks ul:not(ul.header-woo-cart):not(ul.site-header-cart):not(ul.wishlist-icon-container-mobile):not(ul.breadcrumbs-wrapper),
                .has-blocks ol,
                .has-blocks address,
                .has-blocks pre,
                .has-blocks .wp-block-cover.alignwide,
                .has-blocks .wp-block-columns.alignwide,
                .has-blocks .wc-block-grid__products,
                .has-blocks .wp-block-cover-image .wp-block-cover__inner-container, 
                .has-blocks .wp-block-cover .wp-block-cover__inner-container {
                    max-width: '.$layout.';
                    margin: 0 auto;
                }

                .has-blocks figure.alignleft > p {
                    width: '.$layout.';
                }
            }
        ';
    else:
        $css .='

             @media (min-width: 1200px) {
                .has-blocks h1:not(h1.site-title):not(.blog h1):not(.single h1):not(.archive h1):not(.wp-block-cover__inner-container h1), 
                .has-blocks h2:not(.blog h2):not(.single h2):not(.archive h2):not(.wp-block-cover__inner-container h2), 
                .has-blocks h3:not(.blog h3):not(.single h3):not(.archive h3):not(.wp-block-cover__inner-container h3), 
                .has-blocks h4:not(.blog h4):not(.single h4):not(.archive h4):not(footer h4):not(.wp-block-cover__inner-container h4),
                .has-blocks h5:not(.blog h5):not(.single h5):not(.archive h5):not(.wp-block-cover__inner-container h5), 
                .has-blocks h6:not(.blog h6):not(.single h6):not(.archive h6):not(.wp-block-cover__inner-container h6),
                .has-blocks p:not(blockquote p):not(.container p):not(p.site-title):not(p.site-description),
                .has-blocks blockquote,
                .has-blocks table,
                .has-blocks dl,
                .has-blocks ul:not(ul.header-woo-cart):not(ul.site-header-cart):not(ul.wishlist-icon-container-mobile):not(ul.breadcrumbs-wrapper),
                .has-blocks ol,
                .has-blocks address,
                .has-blocks pre,
                .has-blocks .wp-block-cover.alignwide,
                .has-blocks .wp-block-columns.alignwide,
                .has-blocks .wc-block-grid__products,
                .has-blocks .wp-block-cover-image .wp-block-cover__inner-container, 
                .has-blocks .wp-block-cover .wp-block-cover__inner-container {
                    max-width: '.$layout.';
                    margin: 0 auto;
                }

                .has-blocks figure.alignleft > p {
                    max-width: '.$layout.';
                    margin: 0 auto;
                }
            }

             @media (max-width: 1200px) {
                .has-blocks h1:not(h1.site-title):not(.blog h1):not(.single h1):not(.archive h1):not(.wp-block-cover__inner-container h1), 
                .has-blocks h2:not(.blog h2):not(.single h2):not(.archive h2):not(.wp-block-cover__inner-container h2), 
                .has-blocks h3:not(.blog h3):not(.single h3):not(.archive h3):not(.wp-block-cover__inner-container h3), 
                .has-blocks h4:not(.blog h4):not(.single h4):not(.archive h4):not(footer h4):not(.wp-block-cover__inner-container h4),
                .has-blocks h5:not(.blog h5):not(.single h5):not(.archive h5):not(.wp-block-cover__inner-container h5), 
                .has-blocks h6:not(.blog h6):not(.single h6):not(.archive h6):not(.wp-block-cover__inner-container h6),
                .has-blocks p:not(blockquote p):not(.container p):not(p.site-title):not(p.site-description),
                .has-blocks blockquote,
                .has-blocks table,
                .has-blocks dl,
                .has-blocks ul:not(ul.header-woo-cart):not(ul.site-header-cart):not(ul.wishlist-icon-container-mobile):not(ul.breadcrumbs-wrapper),
                .has-blocks ol,
                .has-blocks address,
                .has-blocks pre,
                .has-blocks .wp-block-cover.alignwide,
                .has-blocks .wp-block-columns.alignwide,
                .has-blocks .wc-block-grid__products,
                .has-blocks .wp-block-cover-image .wp-block-cover__inner-container, 
                .has-blocks .wp-block-cover .wp-block-cover__inner-container {
                    width: 99%;
                    padding-left: 15px;
                    padding-right: 15px;
                }

                .has-blocks figure.alignleft > p {
                    width: 99%;
                    padding-left: 15px;
                    padding-right: 15px;
                }
            }
        ';
    endif;

    if(is_rtl()) :
        $css .='
            @media (min-width: 992px) {
                .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9 {
                    float: right;
                }
            }
        ';
    endif;
	
	return apply_filters( 'own_shop_lite_dynamic_css_stylesheet', own_shop_lite_minimize_css($css));
}