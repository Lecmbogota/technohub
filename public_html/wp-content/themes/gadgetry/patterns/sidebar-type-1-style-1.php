<?php
/**
 * Title: Sidebar (T1S1)
 * Slug: gadgetry/sidebar-type-1-style-1
 * Categories: query
 *
 * @package gadgetry
 */

?>

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|32"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"className":"is-style-gadgetry-search-style-1 is-style-gadgetry-search-type-1-style-1"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"},"elements":{"link":{"color":{"text":"var:preset|color|gray-900"}}}},"layout":{"type":"flex","orientation":"vertical"}} -->
	<div class="wp-block-group has-link-color">
		<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
		<h3 class="wp-block-heading has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Latest Posts', 'gadgetry' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:latest-posts {"displayFeaturedImage":true,"featuredImageSizeSlug":"medium","className":"is-style-gadgetry-latest-posts-type-1-style-1"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"},"elements":{"link":{"color":{"text":"var:preset|color|gray-900"}}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-link-color">
		<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
		<h3 class="wp-block-heading has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Posts List', 'gadgetry' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:query {"queryId":7,"query":{"perPage":"8","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"namespace":"core/posts-list"} -->
		<div class="wp-block-query">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|16"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:post-template {"layout":{"type":"default","columnCount":"1"}} -->
				<!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|16"},"margin":{"top":"0","bottom":"var:preset|spacing|16"}}}} -->
				<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--16)">
					<!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%">
						<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","width":"","style":{"border":{"radius":"4px"},"layout":{"selfStretch":"fit","flexSize":null}}} /-->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"0"}}} -->
					<div class="wp-block-column is-vertically-aligned-center">
						<!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|gray-1000"},":hover":{"color":{"text":"var:preset|color|primary-500"}}}}},"fontSize":"xx-small"} /-->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
				<!-- /wp:post-template -->
			</div>
			<!-- /wp:group -->

			<!-- wp:query-no-results -->
			<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
			<p><?php esc_html_e( 'We could not find any results.', 'gadgetry' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- /wp:query-no-results -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
