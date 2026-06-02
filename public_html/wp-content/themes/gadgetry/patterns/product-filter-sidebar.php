<?php
/**
 * Title: Product Filters Sidebar
 * Slug: gadgetry/product-filter-sidebar
 * Categories: gadgetry-woo
 * Description: Product filters sidebar with various filter options.
 *
 * @package gadgetry
 */

?>

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|24","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:heading {"fontSize":"medium"} -->
	<h2 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Filter', 'gadgetry' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:woocommerce/filter-wrapper {"filterType":"active-filters","heading":"Active filters"} -->
	<div class="wp-block-woocommerce-filter-wrapper">
		<!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"}},"fontSize":"xx-small"} -->
		<h3 class="wp-block-heading has-xx-small-font-size" style="font-style:normal;font-weight:400;text-transform:uppercase"><?php esc_html_e( 'Active filters', 'gadgetry' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:woocommerce/active-filters {"displayStyle":"chips","heading":"","lock":{"remove":true}} -->
		<div class="wp-block-woocommerce-active-filters is-loading"><span aria-hidden="true" class="wc-block-active-filters__placeholder"></span></div>
		<!-- /wp:woocommerce/active-filters -->
	</div>
	<!-- /wp:woocommerce/filter-wrapper -->

	<!-- wp:woocommerce/filter-wrapper {"filterType":"price-filter","heading":"Filter by price"} -->
	<div class="wp-block-woocommerce-filter-wrapper">
		<!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"}},"fontSize":"xx-small"} -->
		<h3 class="wp-block-heading has-xx-small-font-size" style="font-style:normal;font-weight:400;text-transform:uppercase"><?php esc_html_e( 'Filter by price', 'gadgetry' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:woocommerce/price-filter {"heading":"","lock":{"remove":true}} -->
		<div class="wp-block-woocommerce-price-filter is-loading">
			<span aria-hidden="true" class="wc-block-product-categories__placeholder"></span>
		</div>
		<!-- /wp:woocommerce/price-filter -->
	</div>
	<!-- /wp:woocommerce/filter-wrapper -->

	<!-- wp:woocommerce/filter-wrapper {"filterType":"rating-filter","heading":"Filter by rating"} -->
	<div class="wp-block-woocommerce-filter-wrapper">
		<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"}},"fontSize":"xx-small"} -->
		<h3 class="wp-block-heading has-xx-small-font-size" style="font-style:normal;font-weight:400;text-transform:uppercase"><?php esc_html_e( 'Filter by rating', 'gadgetry' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:woocommerce/rating-filter {"lock":{"remove":true}} -->
		<div class="wp-block-woocommerce-rating-filter is-loading"></div>
		<!-- /wp:woocommerce/rating-filter -->
	</div>
	<!-- /wp:woocommerce/filter-wrapper -->

	<!-- wp:woocommerce/filter-wrapper {"filterType":"attribute-filter","heading":"Filter by attribute"} -->
	<div class="wp-block-woocommerce-filter-wrapper">
		<!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"}},"fontSize":"xx-small"} -->
		<h3 class="wp-block-heading has-xx-small-font-size" style="font-style:normal;font-weight:400;text-transform:uppercase"><?php esc_html_e( 'Filter by attribute', 'gadgetry' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:woocommerce/attribute-filter {"attributeId":2,"heading":"","lock":{"remove":true}} -->
		<div class="wp-block-woocommerce-attribute-filter is-loading"></div>
		<!-- /wp:woocommerce/attribute-filter -->
	</div>
	<!-- /wp:woocommerce/filter-wrapper -->

	<!-- wp:woocommerce/filter-wrapper {"filterType":"stock-filter","heading":"Filter by stock status"} -->
	<div class="wp-block-woocommerce-filter-wrapper">
		<!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"}},"fontSize":"xx-small"} -->
		<h3 class="wp-block-heading has-xx-small-font-size" style="font-style:normal;font-weight:400;text-transform:uppercase"><?php esc_html_e( 'Filter by stock status', 'gadgetry' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:woocommerce/stock-filter {"heading":"","lock":{"remove":true}} -->
		<div class="wp-block-woocommerce-stock-filter is-loading"></div>
		<!-- /wp:woocommerce/stock-filter -->
	</div>
	<!-- /wp:woocommerce/filter-wrapper -->
</div>
<!-- /wp:group -->