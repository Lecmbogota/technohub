<?php
/**
 * Title: Order Confirmation
 * Slug: gadgetry/order-confirmation
 * Inserter: no
 *
 * @package gadgetry
 */

?>

<!-- wp:group {"metadata":{"name":"Content Area"},"tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|32","padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:woocommerce/order-confirmation-status {"textColor":"primary-500","fontSize":"medium","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary-500"}}}}} /-->

		<!-- wp:woocommerce/order-confirmation-summary {"fontSize":"x-small","style":{"border":{"width":"1px","color":"#DEDEDE","radius":"4px"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} /-->

		<!-- wp:woocommerce/order-confirmation-totals-wrapper {"align":"wide"} -->
		
		<!-- wp:heading {"level":3,"fontSize":"large"} -->
		<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Order details', 'gadgetry' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:woocommerce/order-confirmation-totals {"lock":{"remove":true},"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} /-->
		<!-- /wp:woocommerce/order-confirmation-totals-wrapper -->

		<!-- wp:woocommerce/order-confirmation-downloads-wrapper {"align":"wide"} -->
		<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"24px"}}} -->
		<h3 class="wp-block-heading has-inter-font-family" style="font-size:24px"><?php esc_html_e( 'Downloads', 'gadgetry' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:woocommerce/order-confirmation-downloads {"lock":{"remove":true},"borderColor":"gray-500","style":{"border":{"width":"1px"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} /-->
		<!-- /wp:woocommerce/order-confirmation-downloads-wrapper -->

		<!-- wp:columns {"align":"wide","className":"woocommerce-order-confirmation-address-wrapper"} -->
		<div class="wp-block-columns alignwide woocommerce-order-confirmation-address-wrapper">
			<!-- wp:column -->
			<div class="wp-block-column">
			
				<!-- wp:woocommerce/order-confirmation-shipping-wrapper {"align":"wide"} -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"24px"}}} -->
				<h3 class="wp-block-heading has-inter-font-family" style="font-size:24px"><?php esc_html_e( 'Shipping address', 'gadgetry' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:woocommerce/order-confirmation-shipping-address {"lock":{"remove":true},"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"border":{"width":"1px","color":"#DEDEDE","radius":"4px"}}} /-->
				<!-- /wp:woocommerce/order-confirmation-shipping-wrapper -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
			
				<!-- wp:woocommerce/order-confirmation-billing-wrapper {"align":"wide"} -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"24px"}}} -->
				<h3 class="wp-block-heading has-inter-font-family" style="font-size:24px"><?php esc_html_e( 'Billing address', 'gadgetry' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:woocommerce/order-confirmation-billing-address {"lock":{"remove":true},"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"border":{"width":"1px","color":"#DEDEDE","radius":"4px"}}} /-->
				<!-- /wp:woocommerce/order-confirmation-billing-wrapper -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:woocommerce/order-confirmation-additional-fields-wrapper {"align":"wide"} -->
		<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"24px"}}} -->
		<h3 class="wp-block-heading" style="font-size:24px"><?php esc_html_e( 'Additional information', 'gadgetry' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:woocommerce/order-confirmation-additional-fields /-->
		<!-- /wp:woocommerce/order-confirmation-additional-fields-wrapper -->

		<!-- wp:woocommerce/order-confirmation-additional-information /-->
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->