<?php
/**
 * Title: Archive
 * Slug: gadgetry/archive
 * Categories: hidden
 * Inserter: no
 *
 * @package gadgetry
 */

?>

<!-- wp:group {"tagName":"main","metadata":{"name":"Content Area"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0">

	<!-- wp:pattern {"slug":"gadgetry/page-header"} /-->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
		
		<?php $inherit = is_page() ? 'false' : 'true'; ?>
		<!-- wp:query {"queryId":1,"query":{"perPage":"10","pages":"0","offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":<?php echo esc_attr( $inherit ); ?>},"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-query alignwide">
			<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|32"}},"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|32"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /-->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
				<div class="wp-block-group">
				
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:post-date /-->

						<!-- wp:post-title {"isLink":true,"fontSize":"medium"} /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:post-excerpt {"excerptLength":25} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- /wp:post-template -->

			<!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false,"className":"is-style-gadgetry-query-pagination-type-1-style-1","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
			
			<!-- wp:query-pagination-numbers /-->
			
			<!-- /wp:query-pagination -->

			<!-- wp:query-no-results -->
			<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
			<p>
				<?php esc_html_e( 'We could not find any results.', 'gadgetry' ); ?>
			</p>
			<!-- /wp:paragraph -->
			<!-- /wp:query-no-results -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->