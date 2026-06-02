<?php
/**
 * Title: Home
 * Slug: gadgetry/home
 * Inserter: no
 * Description: Homepage
 *
 * @package gadgetry
 */

?>

<!-- wp:group {"tagName":"main","metadata":{"name":"Content Area"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|32","bottom":"var:preset|spacing|32"}}},"backgroundColor":"gray-200","layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-gray-200-background-color has-background" style="padding-top:var(--wp--preset--spacing--32);padding-bottom:var(--wp--preset--spacing--32)">
		<!-- wp:query {"queryId":1,"query":{"perPage":"1","pages":"0","offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-query alignwide">
			<!-- wp:post-template {"layout":{"type":"default","columnCount":3}} -->
			<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:0">
				<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|32"}}} -->
				<div class="wp-block-column is-vertically-aligned-center">
					<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /-->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|8"}}} -->
				<div class="wp-block-column is-vertically-aligned-center">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:post-date /-->

						<!-- wp:post-title {"isLink":true} /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:post-excerpt {"excerptLength":25} /-->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|32","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--32);padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:query {"queryId":1,"query":{"perPage":"9","pages":"0","offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"wide","layout":{"type":"default"}} -->
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
				<p><?php esc_html_e( 'We could not find any results.', 'gadgetry' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- /wp:query-no-results -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->

