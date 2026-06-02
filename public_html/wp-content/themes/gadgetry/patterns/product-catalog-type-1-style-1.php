<?php
/**
 * Title: Product Catalog (T1S1)
 * Slug: gadgetry/product-catalog-type-1-style-1
 * Categories: hidden
 * Inserter: no
 *
 * @package gadgetry
 */

?>

<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"woocommerceAttributes":[],"woocommerceStockStatus":["instock","outofstock","onbackorder"],"taxQuery":[],"isProductCollectionBlock":true,"perPage":10,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":true},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"queryContextIncludes":["collection","id"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"align":"wide","className":"is-style-gadgetry-product-collection-type-1-style-1"} -->
<div class="wp-block-woocommerce-product-collection alignwide is-style-gadgetry-product-collection-type-1-style-1">
	<!-- wp:woocommerce/product-template -->
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|16"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- wp:woocommerce/product-image {"saleBadgeAlign":"left","isDescendentOfQueryLoop":true,"style":{"border":{"radius":"4px"}}} /-->
		
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary-500"}}},"spacing":{"margin":{"top":"var:preset|spacing|16"}}},"textColor":"primary-500","fontSize":"x-small","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

			<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","textColor":"gray-1000","fontSize":"x-small","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|gray-1000"}}}}} /-->

			<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textAlign":"center"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true,"className":"is-style-fill"} /-->
		 
	</div>
	<!-- /wp:group -->
	<!-- /wp:woocommerce/product-template -->

	<!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false,"className":"is-style-gadgetry-query-pagination-type-1-style-1","layout":{"type":"flex","justifyContent":"center"}} -->
		<!-- wp:query-pagination-previous /-->

		<!-- wp:query-pagination-numbers /-->

		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->

	<!-- wp:query-no-results {"align":"center"} -->
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|16"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph -->
			<p><?php esc_html_e( 'No products were found matching your selection.', 'gadgetry' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search products…","buttonText":"Search","query":{"post_type":"product"},"style":{"border":{"width":"1px"}},"borderColor":"primary-500"} /-->
	</div>
	<!-- /wp:group -->
	<!-- /wp:query-no-results -->
</div>
<!-- /wp:woocommerce/product-collection -->

