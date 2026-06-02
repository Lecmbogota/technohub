<?php
/**
 * Title: Advertisement (T2S1)
 * Slug: gadgetry/advertisement-type-2-style-1
 * Categories: gadgetry-advertisements
 *
 * @package gadgetry
 */

?>

<!-- wp:group {"style":{"dimensions":{"minHeight":"250px"}},"layout":{"type":"constrained","contentSize":"300px"}} -->
<div class="wp-block-group" style="min-height:250px">
	<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/dark-sample-1920x1200.webp' ) ); ?>","dimRatio":0,"overlayColor":"primary-500","isUserOverlayColor":true,"minHeight":250,"isDark":false,"align":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained","contentSize":"300px"}} -->
	<div class="wp-block-cover aligncenter is-light" style="padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);min-height:250px">
		<span aria-hidden="true" class="wp-block-cover__background has-primary-500-background-color has-background-dim-0 has-background-dim"></span>
		
		<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/dark-sample-1920x1200.webp' ) ); ?>" data-object-fit="cover"/>
		
		<div class="wp-block-cover__inner-container">
			<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|gray-100"}}},"typography":{"textTransform":"capitalize"}},"textColor":"gray-100","fontSize":"medium"} -->
			<p class="has-text-align-center has-gray-100-color has-text-color has-link-color has-medium-font-size" style="text-transform:capitalize"><strong><?php esc_html_e( 'Advertisement', 'gadgetry' ); ?></strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|gray-500"}}},"typography":{"textTransform":"uppercase"}},"textColor":"gray-500","fontSize":"x-small"} -->
			<p class="has-text-align-center has-gray-500-color has-text-color has-link-color has-x-small-font-size" style="text-transform:uppercase"><?php esc_html_e( '300 x 250', 'gadgetry' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
	</div>
	<!-- /wp:cover -->
</div>
<!-- /wp:group -->