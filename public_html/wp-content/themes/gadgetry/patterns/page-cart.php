<?php
/**
 * Title: Cart
 * Slug: gadgetry/page-cart
 * Categories: hidden
 * Inserter: no
 *
 * @package gadgetry
 */

?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

<!-- wp:woocommerce/cart -->
<div class="wp-block-woocommerce-cart alignwide is-loading">
	<!-- wp:woocommerce/filled-cart-block -->
	<div class="wp-block-woocommerce-filled-cart-block">
		<!-- wp:woocommerce/cart-items-block -->
		<div class="wp-block-woocommerce-cart-items-block">
		<!-- wp:woocommerce/cart-line-items-block -->
	
		<div class="wp-block-woocommerce-cart-line-items-block"></div>
		<!-- /wp:woocommerce/cart-line-items-block -->

			<!-- wp:woocommerce/cart-cross-sells-block -->
			<div class="wp-block-woocommerce-cart-cross-sells-block">
				<!-- wp:heading {"fontSize":"large"} -->
				<h2 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'You may be interested in…', 'gadgetry' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:woocommerce/cart-cross-sells-products-block {"className":"is-style-gadgetry-product-button-type-1-style-1"} -->
				<div class="wp-block-woocommerce-cart-cross-sells-products-block is-style-gadgetry-product-button-type-1-style-1"></div>
					
				<!-- /wp:woocommerce/cart-cross-sells-products-block -->

			</div>
			<!-- /wp:woocommerce/cart-cross-sells-block -->

		</div>
		<!-- /wp:woocommerce/cart-items-block -->

		<!-- wp:woocommerce/cart-totals-block -->
		<div class="wp-block-woocommerce-cart-totals-block">
			<!-- wp:woocommerce/cart-order-summary-block -->
			<div class="wp-block-woocommerce-cart-order-summary-block">
				<!-- wp:woocommerce/cart-order-summary-heading-block -->
				<div class="wp-block-woocommerce-cart-order-summary-heading-block"></div>
				<!-- /wp:woocommerce/cart-order-summary-heading-block -->

				<!-- wp:woocommerce/cart-order-summary-coupon-form-block -->
				<div class="wp-block-woocommerce-cart-order-summary-coupon-form-block"></div>
				
				<!-- /wp:woocommerce/cart-order-summary-coupon-form-block -->

				<!-- wp:woocommerce/cart-order-summary-totals-block -->
				<div class="wp-block-woocommerce-cart-order-summary-totals-block">
				<!-- wp:woocommerce/cart-order-summary-subtotal-block -->
				<div class="wp-block-woocommerce-cart-order-summary-subtotal-block"></div>
				<!-- /wp:woocommerce/cart-order-summary-subtotal-block -->

				<!-- wp:woocommerce/cart-order-summary-fee-block -->
				<div class="wp-block-woocommerce-cart-order-summary-fee-block"></div>
				<!-- /wp:woocommerce/cart-order-summary-fee-block -->

				<!-- wp:woocommerce/cart-order-summary-discount-block -->
				<div class="wp-block-woocommerce-cart-order-summary-discount-block"></div>
				<!-- /wp:woocommerce/cart-order-summary-discount-block -->

				<!-- wp:woocommerce/cart-order-summary-shipping-block -->
				<div class="wp-block-woocommerce-cart-order-summary-shipping-block"></div>
				<!-- /wp:woocommerce/cart-order-summary-shipping-block -->

				<!-- wp:woocommerce/cart-order-summary-taxes-block -->
				<div class="wp-block-woocommerce-cart-order-summary-taxes-block"></div>
				<!-- /wp:woocommerce/cart-order-summary-taxes-block --></div>
				<!-- /wp:woocommerce/cart-order-summary-totals-block -->
			</div>
			<!-- /wp:woocommerce/cart-order-summary-block -->

			<!-- wp:woocommerce/cart-express-payment-block -->
			<div class="wp-block-woocommerce-cart-express-payment-block"></div>
			<!-- /wp:woocommerce/cart-express-payment-block -->

			<!-- wp:woocommerce/proceed-to-checkout-block -->
			<div class="wp-block-woocommerce-proceed-to-checkout-block"></div>
			<!-- /wp:woocommerce/proceed-to-checkout-block -->

			<!-- wp:woocommerce/cart-accepted-payment-methods-block -->
			<div class="wp-block-woocommerce-cart-accepted-payment-methods-block"></div>
			<!-- /wp:woocommerce/cart-accepted-payment-methods-block -->
		</div>
		<!-- /wp:woocommerce/cart-totals-block -->
	</div>
	<!-- /wp:woocommerce/filled-cart-block -->

	<!-- wp:woocommerce/empty-cart-block -->
	<div class="wp-block-woocommerce-empty-cart-block">
		<!-- wp:heading {"textAlign":"center","className":"with-empty-cart-icon wc-block-cart__empty-cart__title"} -->
		<h2 class="wp-block-heading has-text-align-center with-empty-cart-icon wc-block-cart__empty-cart__title"><?php esc_html_e( 'Your cart is currently empty!', 'gadgetry' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:separator {"className":"is-style-dots"} -->
		<hr class="wp-block-separator has-alpha-channel-opacity is-style-dots"/>
		<!-- /wp:separator -->

		<!-- wp:heading {"textAlign":"center"} -->
		<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'New in store', 'gadgetry' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:woocommerce/product-new {"columns":4,"rows":1,"className":"is-style-gadgetry-product-button-type-1-style-1"} /-->
	</div>
	<!-- /wp:woocommerce/empty-cart-block -->
</div>
<!-- /wp:woocommerce/cart -->
 
</div>
<!-- /wp:group -->