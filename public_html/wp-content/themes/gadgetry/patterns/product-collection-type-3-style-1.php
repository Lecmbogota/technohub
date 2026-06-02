<?php
/**
 * Title: Products Collection (Top Rated T3S1)
 * Slug: gadgetry/product-collection-type-3-style-1
 * Categories: gadgetry-woo
 *
 * @package gadgetry
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|32"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:heading {"textAlign":"center","align":"wide"} -->
	<h2 class="wp-block-heading alignwide has-text-align-center"><?php esc_html_e( 'Top Rated Products', 'gadgetry' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:woocommerce/product-top-rated {"columns":4,"rows":1,"align":"wide","className":"is-style-gadgetry-product-button-type-1-style-1"} /-->
</div>
<!-- /wp:group -->