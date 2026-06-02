<?php
/**
 * Title: Products Collection (Newest T1S1)
 * Slug: gadgetry/product-collection-type-1-style-1
 * Categories: gadgetry-woo
 *
 * @package gadgetry
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|32"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:heading {"textAlign":"center","align":"wide"} -->
	<h2 class="wp-block-heading alignwide has-text-align-center"><?php esc_html_e( 'Newest Products', 'gadgetry' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:buttons {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons alignwide" style="margin-top:0;margin-bottom:0">
		<!-- wp:button {"className":"is-style-gadgetry-button-whiteblack-type-1-style-1","style":{"typography":{"textDecoration":"underline","fontStyle":"normal","fontWeight":"600"}}} -->
		<div class="wp-block-button is-style-gadgetry-button-whiteblack-type-1-style-1" style="font-style:normal;font-weight:600;text-decoration:underline">
			<a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Show All', 'gadgetry' ); ?></a>
		</div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-gadgetry-button-whiteblack-type-1-style-1"} -->
		<div class="wp-block-button is-style-gadgetry-button-whiteblack-type-1-style-1">
			<a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Earphone', 'gadgetry' ); ?></a>
		</div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-gadgetry-button-whiteblack-type-1-style-1"} -->
		<div class="wp-block-button is-style-gadgetry-button-whiteblack-type-1-style-1">
			<a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Mobile', 'gadgetry' ); ?></a>
		</div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

	<!-- wp:woocommerce/product-new {"columns":4,"rows":2,"orderby":"popularity","align":"wide","className":"is-style-gadgetry-product-button-type-1-style-1"} /-->
</div>
<!-- /wp:group -->

