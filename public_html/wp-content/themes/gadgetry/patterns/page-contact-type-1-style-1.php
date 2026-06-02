<?php
/**
 * Title: Contact Page (T1S1)
 * Slug: gadgetry/page-contact-type-1-style-1
 * Categories: gadgetry-pages
 *
 * @package gadgetry
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:media-text {"align":"wide","mediaId":1686,"mediaLink":"","mediaType":"image","backgroundColor":"primary-500"} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile has-primary-500-background-color has-background">
		<figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/dark-sample-800x800.webp' ) ); ?>" alt="" class="wp-image-1686 size-full"/></figure>
		<div class="wp-block-media-text__content">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|32","padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"elements":{"link":{"color":{"text":"var:preset|color|gray-100"}}}},"textColor":"gray-100","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-gray-100-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained","justifyContent":"center"}} -->
				<div class="wp-block-group" style="padding-right:0;padding-left:0">
					<!-- wp:paragraph -->
					<p><strong><?php esc_html_e( 'Main Line:', 'gadgetry' ); ?></strong><?php esc_html_e( '+1 (555) 123-4567', 'gadgetry' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><strong><?php esc_html_e( 'Customer Support:', 'gadgetry' ); ?></strong> <?php esc_html_e( '+1 (555) 987-6543', 'gadgetry' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained","justifyContent":"center"}} -->
				<div class="wp-block-group" style="padding-right:0;padding-left:0">
					<!-- wp:paragraph -->
					<p><strong><?php esc_html_e( 'Monday', 'gadgetry' ); ?></strong> <?php esc_html_e( '- Friday: 9:00 AM - 6:00 PM (EST)', 'gadgetry' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><strong><?php esc_html_e( 'Saturday', 'gadgetry' ); ?></strong><?php esc_html_e( ': 10:00 AM - 4:00 PM (EST)', 'gadgetry' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><strong><?php esc_html_e( 'Sunday', 'gadgetry' ); ?></strong><?php esc_html_e( ': Closed', 'gadgetry' ); ?>
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained","justifyContent":"center"}} -->
				<div class="wp-block-group" style="padding-right:0;padding-left:0">
					<!-- wp:paragraph -->
					<p><strong><?php esc_html_e( 'General Inquiries:', 'gadgetry' ); ?></strong><?php esc_html_e( 'info@gadgetry.com', 'gadgetry' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><strong><?php esc_html_e( 'Customer Support', 'gadgetry' ); ?></strong><?php esc_html_e( ': support@gadgetry.com', 'gadgetry' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained","justifyContent":"center"}} -->
				<div class="wp-block-group" style="padding-right:0;padding-left:0">
					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'Gadgetry Tech Store', 'gadgetry' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><?php esc_html_e( '123 G Street', 'gadgetry' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'Gameville, State, 111, USA', 'gadgetry' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
	</div>
	<!-- /wp:media-text -->
</div>
<!-- /wp:group -->