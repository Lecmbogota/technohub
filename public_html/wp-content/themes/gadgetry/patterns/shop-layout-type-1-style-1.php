<?php
/**
 * Title: Shop (Full Width - No Sidebar) (T1S1)
 * Slug: gadgetry/shop-layout-type-1-style-1
 * Categories: gadgetry-woo
 *
 * @package gadgetry
 */

?>

<!-- wp:group {"metadata":{"name":"Products Listing"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:woocommerce/store-notices /-->

	<!-- wp:group {"className":"alignwide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|12"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0">
		<!-- wp:woocommerce/product-results-count {"textColor":"gray-1000","style":{"elements":{"link":{"color":{"text":"var:preset|color|gray-1000"}}}}} /-->

		<!-- wp:woocommerce/catalog-sorting {"fontSize":"xx-small"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:pattern {"slug":"gadgetry/product-catalog-type-1-style-1"} /-->

</div>
<!-- /wp:group -->
