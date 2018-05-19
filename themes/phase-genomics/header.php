<?php
	/**
	 * Main Header
	 *
	 * @category   Components
	 * @package    WordPress
	 * @subpackage Phase Genomics
	 * @author     Delin Design <contact@delindesign.com>
	 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
	 * @link       https://delindesign.com
	 */

?>

<!doctype html>

	<html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">

		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">

		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo esc_html( get_template_directory_uri() ); ?>/favicon.png">
			<link href="<?php echo esc_html( get_template_directory_uri() ); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo esc_html( get_template_directory_uri() ); ?>/favicon.ico">
			<![endif]-->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo esc_html( get_template_directory_uri() ); ?>/assets/images/win8-tile-icon.png">
				<meta name="theme-color" content="#121212">
			<?php } ?>
		<meta property="og:image" content="https://phasegenomics.com/wp-content/uploads/2017/12/horiz-dark-sq.png" />
		<link rel="img_src" href="https://phasegenomics.com/wp-content/uploads/2017/12/horiz-dark-sq.png" />

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>

		<div class="off-canvas-wrapper">

			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>

			<div class="off-canvas-content" data-off-canvas-content>
				<header class="header" role="banner">
						<div class="container">
							<div class="grid-x grid-margin-x">
								<?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
							</div>
						</div>
				</header> <!-- end .header -->
