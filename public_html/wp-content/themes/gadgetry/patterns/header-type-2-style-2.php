<?php
/**
 * Title: Header (T2S2)
 * Slug: gadgetry/header-type-2-style-2
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Header with logo, menu and icons.
 *
 * @package gadgetry
 */

?>

<!-- wp:group {"align":"full","backgroundColor":"primary-500","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-500-background-color has-background">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--12);padding-bottom:var(--wp--preset--spacing--12)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo /-->

			<!-- wp:site-title {"level":0,"style":{"elements":{"link":{"color":{"text":"var:preset|color|gray-100"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"gray-100","fontSize":"small"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:navigation {"ref":4,"textColor":"gray-100","overlayTextColor":"gray-900","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"fontSize":"xxx-small"} /-->

			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search products…","buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"query":{"post_type":"product"},"isSearchFieldHidden":true,"className":"is-style-gadgetry-search-type-1-style-2","style":{"elements":{"link":{"color":{"text":"var:preset|color|gray-100"}}}},"textColor":"gray-100","namespace":"woocommerce/product-search"} /-->

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
