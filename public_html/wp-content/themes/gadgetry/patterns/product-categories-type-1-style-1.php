<?php
/**
 * Title: Product Categories List (T1S1)
 * Slug: gadgetry/product-categories-type-1-style-1
 * Categories: gadgetry-woo
 * Description: Category list in 8 columns.
 *
 * @package gadgetry
 */

?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
	<!-- wp:group {"align":"wide","layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"8rem"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"width":"32px","height":"32px","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","align":"center"} -->
			<figure class="wp-block-image aligncenter size-thumbnail is-resized">
				<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/icon-camera.svg' ) ); ?>" alt="" style="object-fit:cover;width:32px;height:32px"/>
			</figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary-500"}}}},"textColor":"primary-500","fontSize":"xxx-small"} -->
			<p class="has-text-align-center has-primary-500-color has-text-color has-link-color has-xxx-small-font-size" style="font-style:normal;font-weight:600"><a href="#"><?php esc_html_e( 'Camera', 'gadgetry' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"width":"32px","height":"32px","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","align":"center"} -->
			<figure class="wp-block-image aligncenter size-thumbnail is-resized">
				<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/icon-joystick.svg' ) ); ?>" alt="" style="object-fit:cover;width:32px;height:32px"/>
			</figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary-500"}}}},"textColor":"primary-500","fontSize":"xxx-small"} -->
			<p class="has-text-align-center has-primary-500-color has-text-color has-link-color has-xxx-small-font-size" style="font-style:normal;font-weight:600"><a href="#"><?php esc_html_e( 'Video Games', 'gadgetry' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"width":"32px","height":"32px","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","align":"center"} -->
			<figure class="wp-block-image aligncenter size-thumbnail is-resized">
				<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/icon-laptop-phone.svg' ) ); ?>" alt="" style="object-fit:cover;width:32px;height:32px"/>
			</figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary-500"}}}},"textColor":"primary-500","fontSize":"xxx-small"} -->
			<p class="has-text-align-center has-primary-500-color has-text-color has-link-color has-xxx-small-font-size" style="font-style:normal;font-weight:600"><a href="#"><?php esc_html_e( 'Laptops & Tablets', 'gadgetry' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"width":"32px","height":"32px","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","align":"center"} -->
			<figure class="wp-block-image aligncenter size-thumbnail is-resized">
					<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/icon-phone.svg' ) ); ?>" alt="" style="object-fit:cover;width:32px;height:32px"/>
			</figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary-500"}}}},"textColor":"primary-500","fontSize":"xxx-small"} -->
			<p class="has-text-align-center has-primary-500-color has-text-color has-link-color has-xxx-small-font-size" style="font-style:normal;font-weight:600"><a href="#"><?php esc_html_e( 'Mobiles', 'gadgetry' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:image {"width":"32px","height":"32px","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","align":"center"} -->
			<figure class="wp-block-image aligncenter size-thumbnail is-resized">
				<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/icon-smartwatch.svg' ) ); ?>" alt="" style="object-fit:cover;width:32px;height:32px"/>
			</figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary-500"}}}},"textColor":"primary-500","fontSize":"xxx-small"} -->
			<p class="has-text-align-center has-primary-500-color has-text-color has-link-color has-xxx-small-font-size" style="font-style:normal;font-weight:600"><a href="#"><?php esc_html_e( 'Smart Watches', 'gadgetry' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"width":"32px","height":"32px","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","align":"center"} -->
			<figure class="wp-block-image aligncenter size-thumbnail is-resized">
				<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/icon-tv.svg' ) ); ?>" alt="" style="object-fit:cover;width:32px;height:32px"/>
			</figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary-500"}}}},"textColor":"primary-500","fontSize":"xxx-small"} -->
			<p class="has-text-align-center has-primary-500-color has-text-color has-link-color has-xxx-small-font-size" style="font-style:normal;font-weight:600"><a href="#"><?php esc_html_e( 'TV & Audios', 'gadgetry' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:image {"width":"32px","height":"32px","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","align":"center"} -->
			<figure class="wp-block-image aligncenter size-thumbnail is-resized">
				<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/icon-headphone.svg' ) ); ?>" alt="" style="object-fit:cover;width:32px;height:32px"/>
			</figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary-500"}}}},"textColor":"primary-500","fontSize":"xxx-small"} -->
			<p class="has-text-align-center has-primary-500-color has-text-color has-link-color has-xxx-small-font-size" style="font-style:normal;font-weight:600"><a href="#"><?php esc_html_e( 'Headphones', 'gadgetry' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"width":"32px","height":"32px","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","align":"center"} -->
			<figure class="wp-block-image aligncenter size-thumbnail is-resized">
				<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/icon-apple.svg' ) ); ?>" alt="" style="object-fit:cover;width:32px;height:32px"/>
			</figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary-500"}}}},"textColor":"primary-500","fontSize":"xxx-small"} -->
			<p class="has-text-align-center has-primary-500-color has-text-color has-link-color has-xxx-small-font-size" style="font-style:normal;font-weight:600"><a href="#"><?php esc_html_e( 'Apple', 'gadgetry' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
 

