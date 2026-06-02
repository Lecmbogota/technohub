<?php
/**
 * Title: Single Post
 * Slug: gadgetry/single-post
 * Categories: hidden
 * Inserter: no
 *
 * @package gadgetry
 */

?>

<!-- wp:group {"tagName":"main","metadata":{"name":"Content Area"},"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|32","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
	<main class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--32);margin-bottom:0">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|32","margin":{"bottom":"var:preset|spacing|32"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--32)">
				<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|4","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
					<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0">
						<!-- wp:post-terms {"term":"category","className":"is-style-default","style":{"typography":{"textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|gray-1000"}}}},"textColor":"gray-1000","fontSize":"xxx-small"} /-->

						<!-- wp:post-title {"level":1,"align":"full"} /-->

						<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
						<div class="wp-block-group">
							<!-- wp:post-author-name {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|gray-900"}}}},"textColor":"gray-900","fontSize":"xxx-small"} /-->

							<!-- wp:post-date {"textAlign":"center","fontSize":"xxx-small"} /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->

				<!-- wp:post-featured-image {"aspectRatio":"auto","align":"wide","className":"is-style-gadgetry-featured-image-style-1","style":{"layout":{"selfStretch":"fit","flexSize":null},"border":{"radius":"4px"}}} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:post-content {"lock":{"move":false,"remove":false},"align":"wide","layout":{"type":"default"}} /-->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"backgroundColor":"gray-0","layout":{"type":"default"}} -->
			<div class="wp-block-group has-gray-0-background-color has-background">
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|gray-1000"}}}},"textColor":"gray-1000","fontSize":"xxx-small"} -->
						<p class="has-gray-1000-color has-text-color has-link-color has-xxx-small-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e( 'Tags:', 'gadgetry' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:post-terms {"term":"post_tag","className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|gray-900"}}}},"textColor":"gray-900","fontSize":"xxx-small"} /-->
					</div>	
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|gray-1000"}}}},"textColor":"gray-1000","fontSize":"xxx-small"} -->
							<p class="has-gray-1000-color has-text-color has-link-color has-xxx-small-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e( 'Share:', 'gadgetry' ); ?></p>
						<!-- /wp:paragraph -->
					
						<!-- wp:social-links {"iconColor":"gray-900","iconColorValue":"#686868","iconBackgroundColor":"gray-100","iconBackgroundColorValue":"#FFFFFF","className":"is-style-default","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|8"}}}} -->
						<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default">
							<!-- wp:social-link {"url":"#","service":"facebook"} /-->

							<!-- wp:social-link {"url":"#","service":"linkedin","label":"LinkedIn"} /-->

							<!-- wp:social-link {"url":"#","service":"x"} /-->

							<!-- wp:social-link {"url":"#","service":"chain","label":"Link"} /-->
						</ul>
						<!-- /wp:social-links -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|32"},"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16","left":"var:preset|spacing|32","right":"var:preset|spacing|32"},"blockGap":{"left":"var:preset|spacing|16"}},"border":{"top":{"color":"var:preset|color|gray-500","width":"1px"},"bottom":{"color":"var:preset|color|gray-500","width":"1px"}}}} -->
				<div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--gray-500);border-top-width:1px;border-bottom-color:var(--wp--preset--color--gray-500);border-bottom-width:1px;margin-top:var(--wp--preset--spacing--32);padding-top:var(--wp--preset--spacing--16);padding-right:var(--wp--preset--spacing--32);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--32)">
					<!-- wp:column {"width":"110px"} -->
					<div class="wp-block-column" style="flex-basis:110px">
						<!-- wp:avatar {"size":110,"style":{"border":{"radius":"60px","width":"1px"}},"borderColor":"gray-500"} /-->
					</div>
					<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|16"},"layout":{"selfStretch":"fixed","flexSize":"80%"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"wrap","justifyContent":"left"}} -->
					<div class="wp-block-group">
						<!-- wp:post-author-name {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|gray-900"}}}},"textColor":"gray-900","fontSize":"small"} /-->

						<!-- wp:post-author-biography {"style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->


			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|32","margin":{"top":"var:preset|spacing|32","bottom":"var:preset|spacing|32"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--32);margin-bottom:var(--wp--preset--spacing--32)">
				<!-- wp:post-navigation-link {"textAlign":"left","type":"previous","showTitle":true,"linkLabel":true,"arrow":"arrow","className":"is-style-gadgetry-post-navigation-link-style-1 is-style-gadgetry-post-navigation-link-type-1-style-1","style":{"typography":{"fontStyle":"normal","fontWeight":"500","textDecoration":"none"},"elements":{"link":{"color":{"text":"var:preset|color|gray-1000"}}}},"textColor":"gray-1000","fontSize":"x-small"} /-->

				<!-- wp:post-navigation-link {"textAlign":"right","showTitle":true,"linkLabel":true,"arrow":"arrow","className":"is-style-gadgetry-post-navigation-link-style-1 is-style-gadgetry-post-navigation-link-type-1-style-1","style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|gray-1000"}}}},"textColor":"gray-1000","fontSize":"x-small"} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:comments -->
				<div class="wp-block-comments">
					<!-- wp:comments-title /-->

					<!-- wp:comment-template {"style":{"spacing":{"margin":{"top":"var:preset|spacing|32"}}}} -->
						<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|24","left":"var:preset|spacing|24"},"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|32","bottom":"var:preset|spacing|32"}}}} -->
						<div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--32);padding-bottom:var(--wp--preset--spacing--32)">
							<!-- wp:column {"width":"50px"} -->
							<div class="wp-block-column" style="flex-basis:50px">
								<!-- wp:avatar {"size":50,"style":{"border":{"radius":"25px"}}} /-->
							</div>
							<!-- /wp:column -->

							<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
							<div class="wp-block-column">
								<!-- wp:comment-author-name {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|gray-1000"}}}},"textColor":"gray-1000","fontSize":"xx-small"} /-->

								<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|8"}}},"layout":{"type":"flex"}} -->
								<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--4);margin-bottom:var(--wp--preset--spacing--8)">
									<!-- wp:comment-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|gray-900"}}}},"textColor":"gray-900","fontSize":"xxxx-small"} /-->

									<!-- wp:comment-edit-link {"fontSize":"small"} /-->
								</div>
								<!-- /wp:group -->

								<!-- wp:comment-content /-->

								<!-- wp:comment-reply-link {"style":{"elements":{"link":{"color":{"text":"var:preset|color|gray-1000"}}},"typography":{"fontStyle":"italic","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|16"}}},"fontSize":"xx-small"} /-->
							</div>
							<!-- /wp:column -->
						</div>
						<!-- /wp:columns -->
					<!-- /wp:comment-template -->

					<!-- wp:comments-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
						<!-- wp:comments-pagination-previous /-->

						<!-- wp:comments-pagination-numbers /-->
						
						<!-- wp:comments-pagination-next /-->
					<!-- /wp:comments-pagination -->

					<!-- wp:post-comments-form {"style":{"spacing":{"padding":{"top":"var:preset|spacing|32","bottom":"var:preset|spacing|32"}}}} /-->
				</div>
			<!-- /wp:comments -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->
