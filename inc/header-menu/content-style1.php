<?php
/**
 * Template part for displaying header menu
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package own-shop-lite
 */

?>

<?php
	$page_val = is_front_page() ? 'home' : 'page' ;
?>
<header id="<?php echo esc_attr($page_val); ?>-inner" class="elementor-menu-anchor theme-menu-wrapper full-width-menu style1 own-shop-lite-header page" role="banner">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'own-shop-lite' ); ?></a>
	<?php
		if(true===get_theme_mod('own_shop_enable_header_topbar',true)) :
			/**
	        * Hook - own_shop_lite_action_topbar_sidebar
	        *
	        * @hooked own_shop_lite_topbar_sidebar - 10
	        */
	        do_action( 'own_shop_lite_action_topbar_sidebar' );
		endif;
	?>
	<div id="header-main" class="header-wrapper">
		<div class="<?php echo esc_attr(OWN_SHOP_LITE_CONTAINER_CLASS) ?>">
			<div class="clearfix"></div>
			<div class="logo">
       			<?php 
       				if (has_custom_logo()) :
	                	own_shop_custom_logo();
	                endif;               		                	
                ?>
                <?php 
                    $alt_logo=esc_url(get_theme_mod( 'own_shop_sticky_logo' ));
                	if(!empty($alt_logo)) :
	                	?>
	                		<a id="logo-alt" class="logo-alt" href="<?php echo esc_url(home_url( '/' )); ?>"><img src="<?php echo esc_url( get_theme_mod( 'own_shop_sticky_logo' ) ); ?>" alt="<?php esc_attr__( 'logo', 'own-shop-lite' ) ?>"></a>
	                	<?php
	                endif;
	            ?>
	            <?php
	                $show_title   = ( true === get_theme_mod( 'own_shop_display_site_title_tagline', true ) );
					$header_class = $show_title ? 'site-title' : 'screen-reader-text';
					if(!empty(get_bloginfo( 'name' ))) {
						if ( is_front_page() || is_home() ) {
					        ?>
	                			<h1 class="<?php echo esc_attr( $header_class ); ?>">
							        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html(bloginfo( 'name' )); ?></a>
							    </h1>

							<?php

							if(true === get_theme_mod( 'own_shop_display_site_title_tagline', true )) {
								$description = esc_html(get_bloginfo( 'description', 'display' ));
						        if ( $description || is_customize_preview() ) { 
						            ?>
						                <p class="site-description"><?php echo $description; ?></p>
						            <?php 
						        }
							}
						}
						else {
							?>
								<p class="<?php echo esc_attr( $header_class ); ?>">
							        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html(bloginfo( 'name' )); ?></a>
							    </p>
							<?php

							if(true === get_theme_mod( 'own_shop_display_site_title_tagline', true )) {
								$description = esc_html(get_bloginfo( 'description', 'display' ));
						        if ( $description || is_customize_preview() ) { 
						            ?>
						                <p class="site-description"><?php echo $description; ?></p>
						            <?php 
						        }
							}
						}
					}
                ?>
			</div>
			<div class="responsive-nav hidden-lg hidden-md hidden-sm">
				<div class="top-menu-wrapper">
					<nav class="top-menu" role="navigation" aria-label="<?php esc_attr_e( 'primary', 'own-shop-lite' ); ?>">
						<div class="menu-header">
							<?php 
								if ( own_shop_is_active_woocommerce() ) :
									do_action( 'own_shop_action_header_menucart' );
									do_action( 'own_shop_lite_action_header_mobile_wishlist' );
								endif;
							 ?>
							<span><?php esc_html_e('MENU','own-shop-lite'); ?> </span>
					     	<button type="button" class="hd-bar-opener navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
						       	<span class="sr-only"><?php esc_html_e( 'Toggle navigation', 'own-shop-lite' ); ?></span>
						      	<span class="icon-bar"></span>
						       	<span class="icon-bar"></span>
						       	<span class="icon-bar"></span>
					     	</button>
					   	</div>
						<div class="navbar-collapse collapse clearfix" id="navbar-collapse-1">
					   		<?php
				                wp_nav_menu( array(			                  	
				                  	'theme_location'    => 'primary',
				                  	'depth'             => 3,
				                  	'container'         => 'ul',
				                  	'container_class'   => 'navigation',
				                  	'container_id'      => 'menu-primary',
				                  	'menu_class'        => 'navigation',
				                  	)
				                );
			             	?>
			             	<div class="woo-menu-links">
				             	<?php
					            	/**
							        * Hook - own_shop_action_header_login_register_links
							        *
							        * @hooked own_shop_header_login_register_links - 10
							        */
							        do_action( 'own_shop_action_header_login_register_links' );
				             	?>
				             	
				             	<?php
				             		/**
							        * Hook - own_shop_action_header_menucart
							        *
							        * @hooked own_shop_header_menucart - 10
							        */
							        do_action( 'own_shop_action_header_menucart' );
					            ?>
				            </div>
					   	</div>
					</nav>
		        </div>
			</div>
			<div class="product-search hidden-xs">
				<?php
			    	/**
			        * Hook - own_shop_lite_action_header_product_search
			        *
			        * @hooked own_shop_lite_header_product_search - 10
			        */
			        do_action( 'own_shop_lite_action_header_product_search' );
			    ?>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="menu-row clearfix">
			<div class="<?php echo esc_attr(OWN_SHOP_LITE_CONTAINER_CLASS) ?>">
				<?php
					if(true===get_theme_mod( 'own_shop_lite_enable_header_category_menu',false)) :
						?>
							<div class="col-md-3 hidden-xs header-product-menu">
								<?php
									/**
									* Hook - own_shop_lite_action_header_product_custom_menu
									*
									* @hooked own_shop_lite_header_product_custom_menu
									*/
									do_action( 'own_shop_lite_action_header_product_custom_menu' );
								?>
							</div>
							<div class="col-md-9 hidden-xs">
								<div class="top-menu-wrapper">
									<nav class="top-menu" role="navigation" aria-label="<?php esc_attr_e( 'primary', 'own-shop-lite' ); ?>">
										<div class="menu-header">
											<?php 
												if ( own_shop_is_active_woocommerce() ) :
													do_action( 'own_shop_action_header_menucart' );							
												endif;
											?>
											<span><?php esc_html_e('MENU','own-shop-lite'); ?> </span>
											<button type="button" class="hd-bar-opener navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
												<span class="sr-only"><?php esc_html_e( 'Toggle navigation', 'own-shop-lite' ); ?></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>
										<div class="navbar-collapse collapse clearfix" id="navbar-collapse-1">
											<?php
												wp_nav_menu( array(			                  	
													'theme_location'    => 'primary',
													'depth'             => 3,
													'container'         => 'ul',
													'container_class'   => 'navigation',
													'container_id'      => 'menu-primary',
													'menu_class'        => 'navigation',
													)
												);
											?>
											
										</div>
									</nav>
								</div>
							</div>
						<?php
					else:
						?>
							<div class="col-md-12 hidden-xs">
								<div class="top-menu-wrapper">
									<nav class="top-menu" role="navigation" aria-label="<?php esc_attr_e( 'primary', 'own-shop-lite' ); ?>">
										<div class="menu-header">
											<?php 
												if ( own_shop_is_active_woocommerce() ) :
													do_action( 'own_shop_action_header_menucart' );							
												endif;
											?>
											<span><?php esc_html_e('MENU','own-shop-lite'); ?> </span>
											<button type="button" class="hd-bar-opener navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
												<span class="sr-only"><?php esc_html_e( 'Toggle navigation', 'own-shop-lite' ); ?></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>
										<div class="navbar-collapse collapse clearfix" id="navbar-collapse-1">
											<?php
												wp_nav_menu( array(			                  	
													'theme_location'    => 'primary',
													'depth'             => 3,
													'container'         => 'ul',
													'container_class'   => 'navigation',
													'container_id'      => 'menu-primary',
													'menu_class'        => 'navigation',
													)
												);
											?>
											
										</div>
									</nav>
								</div>
							</div>
						<?php
					endif;
				?>
			</div>
		</div>
    </div>
    <div class="clearfix"></div>
</header>

<!-- Side Bar -->
<section id="hd-left-bar" class="hd-bar left-align mCustomScrollbar" data-mcs-theme="dark">
    <div class="hd-bar-closer">
        <button><span class="qb-close-button"></span></button>
    </div>
    <div class="hd-bar-wrapper">
        <div class="side-menu">
        	<?php
		    	/**
		        * Hook - own_shop_action_sidebar_product_search_content
		        *
		        * @hooked own_shop_sidebar_product_search_content - 10
		        */
		        do_action( 'own_shop_action_sidebar_product_search_content' );
		    ?>
        	<nav role="navigation">
	            <div class="side-navigation clearfix" id="navbar-collapse-2">
			   		<?php
		                wp_nav_menu( array(			                  	
		                  	'theme_location'    => 'primary',
		                  	'depth'             => 3,
		                  	'container'         => 'ul',
		                  	'container_class'   => 'navigation',
		                  	'container_id'      => 'menu-primary-mobile',
		                  	'menu_class'        => 'navigation',
		                  	)
		                );
	             	?>						
			   	</div>
			</nav>
			<?php
            	/**
		        * Hook - own_shop_action_header_login_register_links
		        *
		        * @hooked own_shop_header_login_register_links - 10
		        */
		        do_action( 'own_shop_action_header_login_register_links' );
         	?>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<div id="content" class="elementor-menu-anchor"></div>