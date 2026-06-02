<?php
/**
 * Help Resources tab.
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

		<div class="gadgetry-box gadgetry-round-border gadgetry-padded">

			<div class="gadgetry-box__header">

				<h2 class="gadgetry-box__title">
					<?php esc_html_e( 'Neep Help? Try Helpful Links', 'gadgetry' ); ?>
				</h2>

				<div class="gadgetry-box___desc">

					<p>
						<?php
							esc_html_e( 'The links to various documentation, guides and tutorials should help you further to enhance and maintain your website.', 'gadgetry' );
						?>
					</p>
					<p>
						<?php
							esc_html_e( 'If you have any confusion or need further help, you\'re always welcome to reach us out.', 'gadgetry' );
						?>
					</p>
				</div>
			</div>

			<div class="gadgetry-box__section">

				<ul class="gadgetry-list">

					<li class="gadgetry-list__item">
						<span class="gadgetry-number"><?php esc_html_e( '1', 'gadgetry' ); ?></span>

						<div class="gadgetry-list__content">

							<h4>
								<a href="<?php echo esc_url( 'https://woocommerce.com/document/gadgetry/' ); ?>" target="_blank">
									<?php esc_html_e( 'Gadgetry Documentation', 'gadgetry' ); ?>
								</a>
							</h4>
						</div>
					</li>

					<li class="gadgetry-list__item">
						<span class="gadgetry-number"><?php esc_html_e( '2', 'gadgetry' ); ?></span>

						<div class="gadgetry-list__content">

							<h4>
								<a href="<?php echo esc_url( 'https://woocommerce.com/documentation/woocommerce/getting-started/' ); ?>" target="_blank">
									<?php esc_html_e( 'Get Started with WooCommerce', 'gadgetry' ); ?>
								</a>
							</h4>
						</div>
					</li>

					<li class="gadgetry-list__item">
						<span class="gadgetry-number"><?php esc_html_e( '3', 'gadgetry' ); ?></span>

						<div class="gadgetry-list__content">

							<h4>
								<a href="<?php echo esc_url( 'https://wordpress.org/documentation/article/site-editor/' ); ?>" target="_blank">
									<?php esc_html_e( 'Using Site Editor', 'gadgetry' ); ?>
								</a>
							</h4>
					</li>

					<li class="gadgetry-list__item">
						<span class="gadgetry-number"><?php esc_html_e( '4', 'gadgetry' ); ?></span>

						<div class="gadgetry-list__content">

							<h4>
								<a href="<?php echo esc_url( 'https://artifyweb.com/contact-us/' ); ?>" target="_blank">
									<?php esc_html_e( 'Contact Us', 'gadgetry' ); ?>
								</a>
							</h4>
					</li>

				</ul>

			</div>

		</div> <!-- /.gadgetry-box -->

	</div>

	<?php get_admin_template( 'sidebar' ); ?>
</div>
