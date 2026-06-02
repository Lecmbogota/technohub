<?php
/**
 * Title: Primary Header (T1S1)
 * Slug: gadgetry/header-type-1-style-1
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Header with 2 Rows: Header with logo, search, buttons and primary menu with icons
 *
 * @package gadgetry
 */

?>

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16"},"blockGap":"var:preset|spacing|16"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16)">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
			<div class="wp-block-group">
				<!-- wp:site-logo /-->
				
				<!-- wp:site-title {"level":0,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-500"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary-500","fontSize":"small"} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search products…","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"query":{"post_type":"product"},"className":"is-style-gadgetry-search-type-1-style-1","style":{"layout":{"selfStretch":"fill","flexSize":null}},"namespace":"woocommerce/product-search"} /-->
			
			<!-- wp:buttons {"className":"hide-on-mobile","style":{"spacing":{"blockGap":"var:preset|spacing|16"}}} -->
			<div class="wp-block-buttons hide-on-mobile">

					<!-- wp:button {"className":"is-style-gadgetry-button-iconleft-type-1-style-1"} -->
					<div class="wp-block-button is-style-gadgetry-button-iconleft-type-1-style-1">
						<a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Become a Seller', 'gadgetry' ); ?></a>
					</div>
					<!-- /wp:button -->

					<!-- wp:button {"className":"is-style-gadgetry-button-iconleft-type-1-style-2"} -->
					<div class="wp-block-button is-style-gadgetry-button-iconleft-type-1-style-2">
						<a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Customer Care', 'gadgetry' ); ?></a>
					</div>
					<!-- /wp:button -->

			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","backgroundColor":"primary-500","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide has-primary-500-background-color has-background">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--12);padding-bottom:var(--wp--preset--spacing--12)">
			<!-- wp:navigation {"ref":4,"textColor":"gray-100","overlayTextColor":"gray-900","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"fontSize":"xxx-small"} /-->
			
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconStyle":"line","textColor":"gray-100","style":{"spacing":{"margin":{"left":"0.5em"}},"elements":{"link":{"color":{"text":"var:preset|color|gray-100"}}}}} /-->

				<!-- wp:woocommerce/mini-cart {"priceColor":{"color":"#FFFFFF","name":"Gray 100","slug":"gray-100","class":"has-gray-100-price-color"},"iconColor":{"color":"#FFFFFF","name":"Gray 100","slug":"gray-100","class":"has-gray-100-price-color"}} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
