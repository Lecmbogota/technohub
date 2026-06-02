<?php
/**
 * Title: Products Collection (2 Columns T5S1)
 * Slug: gadgetry/product-collection-type-5-style-1
 * Categories: gadgetry-woo
 *
 * @package gadgetry
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|32"}}} -->
		<div class="wp-block-column">
			<!-- wp:heading {"textAlign":"left","align":"wide","fontSize":"medium"} -->
			<h2 class="wp-block-heading alignwide has-text-align-left has-medium-font-size"><?php esc_html_e( 'Products On Sale', 'gadgetry' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:woocommerce/product-on-sale {"columns":2,"rows":2,"align":"wide","className":"is-style-gadgetry-product-button-type-1-style-1"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|32"}}} -->
		<div class="wp-block-column">
			<!-- wp:heading {"textAlign":"left","align":"wide","fontSize":"medium"} -->
			<h2 class="wp-block-heading alignwide has-text-align-left has-medium-font-size"><?php esc_html_e( 'Best Selling Products', 'gadgetry' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:woocommerce/product-best-sellers {"columns":2,"rows":2,"stockStatus":["","instock","outofstock","onbackorder"],"orderby":"date","align":"wide","className":"is-style-gadgetry-product-button-type-1-style-1"} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->