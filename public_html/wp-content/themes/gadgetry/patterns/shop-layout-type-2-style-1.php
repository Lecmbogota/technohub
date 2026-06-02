<?php
/**
 * Title: Shop (Left Sidebar) (T2S1)
 * Slug: gadgetry/shop-layout-type-2-style-1
 * Categories: gadgetry-woo
 *
 * @package gadgetry
 */

?>

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"20%"} -->
		<div class="wp-block-column" style="flex-basis:20%">
			<!-- wp:pattern {"slug":"gadgetry/product-filter-sidebar"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"80%"} -->
		<div class="wp-block-column" style="flex-basis:80%">
			<!-- wp:pattern {"slug":"gadgetry/product-catalog-type-1-style-1"} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
