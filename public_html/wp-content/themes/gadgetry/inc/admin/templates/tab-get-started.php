<?php
/**
 * Get Started tab.
 *
 * @package gadgetry
 * @since 1.0
 */

namespace Gadgetry;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="gadgetry-cols">

	<div class="gadgetry-col gadgetry-main-content">

		<div class="gadgetry-box gadgetry-round-border gadgetry-padded gadgetry-get-started">

			<div class="gadgetry-box__header">

				<h2 class="gadgetry-box__title">
					<?php esc_html_e( 'Get Started by Demo Import', 'gadgetry' ); ?>
				</h2>

				<div class="gadgetry-box___desc">

					<p>
						<?php esc_html_e( 'Create your online store by importing a demo site. Then, customize your website.', 'gadgetry' ); ?>

						<?php

						printf(
							/* Translators: %s - Demo link */
							esc_html__( 'Create your online store by importing a %s. Then, customize your website.', 'gadgetry' ),
							'<a href="' . esc_url( 'https://artifydemos.com/gadgetry/' ) . '" target="_blank">' . esc_html__( 'demo site', 'gadgetry' ) . '</a>'
						);
						?>
					</p>
				</div>
			</div>

			<div class="gadgetry-box__section">

				<h3><?php esc_html_e( 'Step 1: Import Demo Site', 'gadgetry' ); ?></h3>

				<div class="gadgetry-box__section_desc">

					<p><?php esc_html_e( 'Click the button below to install and activate the required plugin and import the demo site.', 'gadgetry' ); ?></p>

					<?php

					printf(
						/* Translators: %s - Demo import page */
						esc_html__( 'Once the plugin is activated, you can comeback here or go to %s for importing the demo.', 'gadgetry' ),
						'<strong>' . esc_html__( 'Appearance > Demo Import', 'gadgetry' ) . '</strong>'
					);
					?>
					</p>
				</div>

				<div class="gadgetry-buttons">

					<?php
					$ai_plugin_path = 'advanced-import/advanced-import.php';

					plugin_installation_button( $ai_plugin_path, '_blank' );
					?>

				</div>
			</div>

			<div class="gadgetry-box__section">

				<div class="gadgetry-section__header">

					<h3><?php esc_html_e( 'Step 2: Site Customization', 'gadgetry' ); ?></h3>

					<div class="gadgetry-box__section_desc">

						<p><?php esc_html_e( 'After you import the demo site by clicking the button above, you can come back here and start customization by following the steps below. Click the title links below to go to the respective settings.', 'gadgetry' ); ?></p>
					</div>

				</div>

				<ul class="gadgetry-list">

					<li class="gadgetry-list__item">
						<span class="gadgetry-number"><?php esc_html_e( '1', 'gadgetry' ); ?></span>

						<div class="gadgetry-list__content">

							<h4>
								<a href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" target="_blank">
									<?php esc_html_e( 'Customize Entire Site', 'gadgetry' ); ?>
								</a>
							</h4>

							<div class="gadgetry-list__desc">

								<p>
									<strong>- <?php esc_html_e( 'Edit Header: ', 'gadgetry' ); ?></strong><?php esc_html_e( 'change logo, update site title/navigation menu/header button, etc.', 'gadgetry' ); ?>
								</p>
								<p>
									<strong>- <?php esc_html_e( 'Edit Homepage Content: ', 'gadgetry' ); ?></strong>
									<?php esc_html_e( 'Update text, images, videos of homepage.', 'gadgetry' ); ?>
								</p>
								<p>
									<strong>- <?php esc_html_e( 'Edit Footer: ', 'gadgetry' ); ?></strong>
									<?php esc_html_e( 'edit copyright, footer links.', 'gadgetry' ); ?>
								</p>

							</div>
						</div>
					</li>

					<li class="gadgetry-list__item">
						<span class="gadgetry-number"><?php esc_html_e( '2', 'gadgetry' ); ?></span>

						<div class="gadgetry-list__content">

							<h4>
								<a href="<?php echo esc_url( admin_url( '/site-editor.php?postType=wp_navigation' ) ); ?>" target="_blank">
									<?php esc_html_e( 'Edit Navigation Menus', 'gadgetry' ); ?>
								</a>
							</h4>

							<div class="gadgetry-list__desc">

								<p>
									- <?php esc_html_e( 'Add/remove/update menus and submenu items.', 'gadgetry' ); ?>
								</p>

							</div>
						</div>
					</li>

					<li class="gadgetry-list__item">
						<span class="gadgetry-number"><?php esc_html_e( '3', 'gadgetry' ); ?></span>

						<div class="gadgetry-list__content">

							<h4>
								<a href="<?php echo esc_url( admin_url( '/site-editor.php?path=%2Fwp_global_styles' ) ); ?>" target="_blank">
									<?php esc_html_e( 'Change Site Style', 'gadgetry' ); ?>
								</a>
							</h4>

							<div class="gadgetry-list__desc">

								<p>
									- <?php esc_html_e( 'Change look & feel of your site by customizing typography, colors, background, shadows, and layout.', 'gadgetry' ); ?>
								</p>

								<p>
									- <?php esc_html_e( 'Style each block individually and globally.', 'gadgetry' ); ?>
								</p>
							</div>
						</div>
					</li>

					<li class="gadgetry-list__item">
						<span class="gadgetry-number"><?php esc_html_e( '4', 'gadgetry' ); ?></span>

						<div class="gadgetry-list__content">

						<?php
						$product_archive_uri = add_query_arg(
							array(
								'postId'   => 'gadgetry//archive-product',
								'postType' => 'wp_template',
								'canvas'   => 'edit',
							),
							admin_url( 'site-editor.php' )
						);
						?>

							<h4>
								<a href="<?php echo esc_url( $product_archive_uri ); ?>" target="_blank">
									<?php esc_html_e( 'Customize Shop', 'gadgetry' ); ?>
								</a>
							</h4>

							<div class="gadgetry-list__desc">

								<p>
									- <?php esc_html_e( 'Change products listing layout.', 'gadgetry' ); ?>
								</p>

								<p>
									- <?php esc_html_e( 'Control number of products to show in the product collection (Shop) page.', 'gadgetry' ); ?>
								</p>

								<p>
									- <?php esc_html_e( 'Edit Testimonials and offer CTA sections.', 'gadgetry' ); ?>
								</p>

								<?php if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) : ?>

									<a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ); ?>" target="_blank">
										<?php esc_html_e( 'Preview Store', 'gadgetry' ); ?>
									</a>

								<?php endif; ?>

							</div>
						</div>
					</li>

					<li class="gadgetry-list__item">
						<span class="gadgetry-number"><?php esc_html_e( '5', 'gadgetry' ); ?></span>

						<div class="gadgetry-list__content">

						<?php
						$add_product_onboarding_uri = add_query_arg(
							array(
								'post_type'     => 'product',
								'wc_onboarding_active_task' => 'products',
								'tutorial'      => 'true',
								'tutorial_type' => 'physical',
							),
							admin_url( 'post-new.php' )
						);
						?>

							<h4>
								<a href="<?php echo esc_url( $add_product_onboarding_uri ); ?>" target="_blank">
									<?php esc_html_e( 'Add New Products', 'gadgetry' ); ?>
								</a>
							</h4>

							<div class="gadgetry-list__desc">

								<p>
									- <?php esc_html_e( 'Add different types of products.', 'gadgetry' ); ?>
								</p>

								<p>
									- <?php esc_html_e( 'Fill the website with own products and make it your own store.', 'gadgetry' ); ?>
								</p>

								<?php if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) : ?>

									<a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ); ?>" target="_blank">
										<?php esc_html_e( 'Preview Store', 'gadgetry' ); ?>
									</a>

								<?php endif; ?>

							</div>
						</div>
					</li>

					<li class="gadgetry-list__item">
						<span class="gadgetry-number"><?php esc_html_e( '6', 'gadgetry' ); ?></span>

						<div class="gadgetry-list__content">

						<?php
						$blog_template_editor_uri = add_query_arg(
							array(
								'postId'   => 'gadgetry//home',
								'postType' => 'wp_template',
								'canvas'   => 'edit',
							),
							admin_url( 'site-editor.php' )
						);
						?>

							<h4>
								<a href="<?php echo esc_url( $blog_template_editor_uri ); ?>" target="_blank">
									<?php esc_html_e( 'Customize Blog', 'gadgetry' ); ?>
								</a>
							</h4>

							<div class="gadgetry-list__desc">

								<p>
									- <?php esc_html_e( 'Change blog CTA content.', 'gadgetry' ); ?>
								</p>

								<p>
									- <?php esc_html_e( 'Change how your blog posts appear.', 'gadgetry' ); ?>
								</p>

								<p>
									- <?php esc_html_e( 'Customize the sidebar.', 'gadgetry' ); ?>
								</p>

							</div>
						</div>
					</li>

					<li class="gadgetry-list__item">
						<span class="gadgetry-number"><?php esc_html_e( '7', 'gadgetry' ); ?></span>

						<div class="gadgetry-list__content">

							<h4>
								<a href="
								<?php
								echo esc_url( admin_url( '/post-new.php' ) );
								?>
" target="_blank">
									<?php esc_html_e( 'Add New Blog Posts', 'gadgetry' ); ?>
								</a>
							</h4>

							<div class="gadgetry-list__desc">

								<p>
									- <?php esc_html_e( 'Write articles related to products that you sell and publish them.', 'gadgetry' ); ?>
								</p>

								<p>
									- <?php esc_html_e( 'Engage your potential customers.', 'gadgetry' ); ?>
								</p>

							</div>
						</div>
					</li>

					<li class="gadgetry-list__item">
						<span class="gadgetry-number"><?php esc_html_e( '8', 'gadgetry' ); ?></span>

						<div class="gadgetry-list__content">

							<h4>
								<?php esc_html_e( 'Delete Demo Content', 'gadgetry' ); ?>
							</h4>

							<div class="gadgetry-list__desc">

								<p>
									- <?php esc_html_e( 'If you\'ve imported the demo site, delete the imported demo content that is not necessary for your store.', 'gadgetry' ); ?>
								</p>

								<p>
									- <?php esc_html_e( 'If you successfully imported the demo site, you do not need Advanced Import plugin that we use for demo import.', 'gadgetry' ); ?>
								</p>

								<p>
									- <?php esc_html_e( 'Click the links below to navigate to the respective pages and take action:', 'gadgetry' ); ?>
								</p>

								<ul>
									<li>
										<a href="<?php echo esc_url( admin_url( '/edit.php?post_type=product' ) ); ?>" target="_blank">
											<?php esc_html_e( 'Delete Demo Products', 'gadgetry' ); ?>
										</a>
									</li>

									<li>
										<a href="<?php echo esc_url( admin_url( '/edit.php?post_type=post' ) ); ?>" target="_blank">
											<?php esc_html_e( 'Delete Demo Posts', 'gadgetry' ); ?>
										</a>
									</li>

									<li>
										<a href="<?php echo esc_url( admin_url( '/edit.php?post_type=page' ) ); ?>" target="_blank">
											<?php esc_html_e( 'Delete Demo Pages', 'gadgetry' ); ?>
										</a>
									</li>

									<li>
										<a href="<?php echo esc_url( admin_url( '/upload.php' ) ); ?>" target="_blank">
											<?php esc_html_e( 'Delete Demo Media', 'gadgetry' ); ?>
										</a>
									</li>

									<li>
										<a href="
											<?php
											echo esc_url(
												add_query_arg(
													array(
														's' => 'Advanced Import',
														'plugin_status' => 'all',
													),
													admin_url( 'plugins.php' )
												)
											);
											?>
											"
											target="_blank">
										<?php esc_html_e( 'Deactivate & Delete Advanced Import Plugin', 'gadgetry' ); ?>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</li>

				</ul>

			</div>

		</div> <!-- /.gadgetry-box -->

	</div>

	<?php get_admin_template( 'sidebar' ); ?>
</div>
