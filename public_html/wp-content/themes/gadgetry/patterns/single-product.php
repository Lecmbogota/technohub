<?php
/**
 * Title: Single Product
 * Slug: gadgetry/single-product
 * Categories: hidden
 * Inserter: no
 *
 * @package gadgetry
 */

?>

<!-- wp:group {"tagName":"main","metadata":{"name":"Content Area"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"inherit":true,"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0">
	<!-- wp:group {"metadata":{"name":"Page Header"},"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|16","padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16"}}},"backgroundColor":"gray-200","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-gray-200-background-color has-background" style="padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16)">
		
			<!-- wp:woocommerce/breadcrumbs {"fontSize":"xx-small","className":"is-style-default","textColor":"gray-1000","style":{"elements":{"link":{"color":{"text":"var:preset|color|gray-900"}}},"typography":{"fontStyle":"italic","fontWeight":"400"}}} /-->
	
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"Single Product Details"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|32","bottom":"var:preset|spacing|32"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--32);padding-bottom:var(--wp--preset--spacing--32)">
	
		<!-- wp:woocommerce/store-notices /-->

		<!-- wp:columns {"className":"alignwide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
		<div class="wp-block-columns alignwide" style="margin-top:0;margin-bottom:0">
			<!-- wp:column {"width":"554px","style":{"elements":{"link":{"color":{"text":"var:preset|color|gray-1000"}}}},"textColor":"gray-1000"} -->
			<div class="wp-block-column has-gray-1000-color has-text-color has-link-color" style="flex-basis:554px">
				<!-- wp:woocommerce/product-image-gallery /-->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"style":{"spacing":{"blockGap":"0"}},"fontSize":"xx-small"} -->
			<div class="wp-block-column has-xx-small-font-size">
				<!-- wp:post-title {"level":1,"fontSize":"x-large","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->
				
				<!-- wp:woocommerce/product-price {"isDescendentOfSingleProductTemplate":true,"textColor":"gray-1000","fontSize":"x-small","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|16"}},"elements":{"link":{"color":{"text":"var:preset|color|gray-1000"}}}}} /-->

				<!-- wp:woocommerce/product-rating {"isDescendentOfSingleProductTemplate":true,"textColor":"gray-1000","style":{"spacing":{"margin":{"top":"var:preset|spacing|16"}},"elements":{"link":{"color":{"text":"var:preset|color|gray-1000"}}}}} /-->

				<!-- wp:post-excerpt {"style":{"spacing":{"margin":{"top":"var:preset|spacing|16"}}},"__woocommerceNamespace":"woocommerce/product-query/product-summary"} /-->

				<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|16"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--16)">
					<!-- wp:woocommerce/add-to-cart-form {"className":"is-style-gadgetry-add-to-cart-form-type-1-style-1"} /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|gray-500","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}},"spacing":{"padding":{"top":"var:preset|spacing|16"},"margin":{"top":"var:preset|spacing|16"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--gray-500);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-top:var(--wp--preset--spacing--16);padding-top:var(--wp--preset--spacing--16)">
					<!-- wp:woocommerce/product-meta -->
					<div class="wp-block-woocommerce-product-meta">
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|16"}},"layout":{"type":"flex","orientation":"horizontal"}} -->
						<div class="wp-block-group">
							<!-- wp:woocommerce/product-sku {"isDescendentOfSingleProductTemplate":true} /-->

							<!-- wp:post-terms {"term":"product_cat","prefix":"Category: ","style":{"elements":{"link":{"color":{"text":"var:preset|color|gray-900"}}}}} /-->

							<!-- wp:post-terms {"term":"product_tag","prefix":"Tags: "} /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:woocommerce/product-meta -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:woocommerce/product-details {"align":"wide","className":"is-style-gadgetry-product-details-style-1","style":{"spacing":{"margin":{"top":"var:preset|spacing|32"}}}} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:woocommerce/related-products {"align":"wide"} -->
		<div class="wp-block-woocommerce-related-products alignwide">
			<!-- wp:query {"queryId":4,"query":{"perPage":5,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false},"namespace":"woocommerce/related-products","lock":{"remove":true,"move":true}} -->
			<div class="wp-block-query">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|32"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
					<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
					<div class="wp-block-group alignwide">
						<!-- wp:heading -->
						<h2 class="wp-block-heading"><?php esc_html_e( '	Related Products', 'gadgetry' ); ?></h2>
						<!-- /wp:heading -->
					</div>
					<!-- /wp:group -->
					 
					<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|32"}},"layout":{"type":"grid","columnCount":"4","minimumColumnWidth":null},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|16"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
					<div class="wp-block-group">
						<!-- wp:woocommerce/product-image {"saleBadgeAlign":"left","isDescendentOfQueryLoop":true,"style":{"border":{"radius":"4px"}}} /-->

						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
						<div class="wp-block-group">
							<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|gray-1000"}}}},"textColor":"gray-1000","fontSize":"x-small","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

							<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","textColor":"gray-1000","fontSize":"x-small","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|gray-1000"}}},"spacing":{"margin":{"top":"0"}}}} /-->

							<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"spacing":{"margin":{"top":"0"}}}} /-->
						</div>
						<!-- /wp:group -->

						<!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true,"className":"is-style-gadgetry-related-product-button-type-1-style-1"} /-->
					</div>
					<!-- /wp:group -->
					<!-- /wp:post-template -->
					 
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:query -->
		</div>
		<!-- /wp:woocommerce/related-products -->
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->


