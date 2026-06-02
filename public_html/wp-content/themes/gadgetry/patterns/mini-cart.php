<?php
/**
 * Title: Mini Cart
 * Slug: gadgetry/mini-cart
 * Categories: hidden
 * Inserter: no
 *
 * @package gadgetry
 */

?>

<!-- wp:woocommerce/mini-cart-contents {"width":"715px","className":"is-style-gadgetry-mini-cart-contents-style-1"} -->
<div class="wp-block-woocommerce-mini-cart-contents is-style-gadgetry-mini-cart-contents-style-1">
	<!-- wp:woocommerce/filled-mini-cart-contents-block -->
	<div class="wp-block-woocommerce-filled-mini-cart-contents-block"><!-- wp:woocommerce/mini-cart-title-block -->
		<div class="wp-block-woocommerce-mini-cart-title-block">
			<!-- wp:woocommerce/mini-cart-title-label-block {"label":"Your Cart","fontSize":"x-small"} -->
			<div class="wp-block-woocommerce-mini-cart-title-label-block has-x-small-font-size"></div>
			<!-- /wp:woocommerce/mini-cart-title-label-block -->

			<!-- wp:woocommerce/mini-cart-title-items-counter-block {"fontSize":"x-small"} -->
			<div class="wp-block-woocommerce-mini-cart-title-items-counter-block has-x-small-font-size"></div>
			<!-- /wp:woocommerce/mini-cart-title-items-counter-block -->
		</div>
		<!-- /wp:woocommerce/mini-cart-title-block -->

		<!-- wp:woocommerce/mini-cart-items-block -->
		<div class="wp-block-woocommerce-mini-cart-items-block"><!-- wp:woocommerce/mini-cart-products-table-block -->
			<div class="wp-block-woocommerce-mini-cart-products-table-block"></div>
			<!-- /wp:woocommerce/mini-cart-products-table-block -->
		</div>
		<!-- /wp:woocommerce/mini-cart-items-block -->

		<!-- wp:woocommerce/mini-cart-footer-block -->
		<div class="wp-block-woocommerce-mini-cart-footer-block"><!-- wp:woocommerce/mini-cart-cart-button-block -->
			<div class="wp-block-woocommerce-mini-cart-cart-button-block"></div>
			<!-- /wp:woocommerce/mini-cart-cart-button-block -->

			<!-- wp:woocommerce/mini-cart-checkout-button-block -->
			<div class="wp-block-woocommerce-mini-cart-checkout-button-block"></div>
			<!-- /wp:woocommerce/mini-cart-checkout-button-block -->
		</div>
		<!-- /wp:woocommerce/mini-cart-footer-block -->
	</div>
	<!-- /wp:woocommerce/filled-mini-cart-contents-block -->

	<!-- wp:woocommerce/empty-mini-cart-contents-block -->
	<div class="wp-block-woocommerce-empty-mini-cart-contents-block">
		<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|24"}}},"fontSize":"x-small"} -->
		<p class="has-text-align-center has-x-small-font-size" style="margin-bottom:var(--wp--preset--spacing--24)"><?php esc_html_e( 'Your cart is currently empty!', 'gadgetry' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:woocommerce/mini-cart-shopping-button-block {"startShoppingButtonLabel":"Start Shopping","className":"is-style-gadgetry-mini-cart-shopping-button-block-type-1-style-1"} -->
		<div class="wp-block-woocommerce-mini-cart-shopping-button-block is-style-gadgetry-mini-cart-shopping-button-block-type-1-style-1">
		</div>
		<!-- /wp:woocommerce/mini-cart-shopping-button-block -->
	</div>
	<!-- /wp:woocommerce/empty-mini-cart-contents-block -->
</div>
<!-- /wp:woocommerce/mini-cart-contents -->
