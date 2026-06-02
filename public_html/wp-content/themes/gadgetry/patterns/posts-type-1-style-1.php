<?php
/**
 * Title: Posts, 1 column
 * Slug: gadgetry/posts-type-1-style-1
 * Categories: query
 * Block Types: core/query
 * Description: A list of posts, 1 column.
 *
 * @package gadgetry
 */

?>

<?php $inherit = is_page() ? 'false' : 'true'; ?>

<!-- wp:query {"query":{"perPage":"8","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":<?php echo esc_attr( $inherit ); ?>},"namespace":"core/posts-list"} -->
<div class="wp-block-query">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|16"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group">

		<!-- wp:post-template {"layout":{"type":"default","columnCount":"1"}} -->

		<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|32"},"padding":{"bottom":"var:preset|spacing|32"},"margin":{"bottom":"var:preset|spacing|32"}},"border":{"bottom":{"color":"var:preset|color|gray-500","width":"1px"},"top":[],"right":[],"left":[]}}} -->
		<div class="wp-block-columns" style="border-bottom-color:var(--wp--preset--color--gray-500);border-bottom-width:1px;margin-bottom:var(--wp--preset--spacing--32);padding-bottom:var(--wp--preset--spacing--32)">

			<!-- wp:column {"width":"40%"} -->
			<div class="wp-block-column" style="flex-basis:40%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","width":"","style":{"border":{"radius":"4px"},"layout":{"selfStretch":"fit","flexSize":null}}} /--></div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"","style":{"spacing":{"blockGap":"0"}}} -->
			<div class="wp-block-column"><!-- wp:post-date {"displayType":"modified","style":{"elements":{"link":{"color":{"text":"var:preset|color|gray-900"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|2"}}},"textColor":"gray-900","fontSize":"xxx-small"} /-->

				<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|gray-1000"},":hover":{"color":{"text":"var:preset|color|primary-500"}}}}},"fontSize":"medium"} /-->

				<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":20,"style":{"spacing":{"margin":{"top":"var:preset|spacing|16"}}}} /-->

				<!-- wp:read-more {"content":"Read More","style":{"spacing":{"margin":{"top":"var:preset|spacing|24"}}}} /-->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
		<!-- /wp:post-template -->

		<!-- wp:query-pagination {"className":"is-style-gadgetry-query-pagination-type-1-style-1","layout":{"type":"flex","justifyContent":"center"}} -->
		<!-- wp:query-pagination-numbers /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query-no-results -->
	<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
	<p><?php esc_html_e( 'We could not find any results.', 'gadgetry' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
