<?php
	/**
	 * Offcanvas Menu
	 *
	 * @category   Components
	 * @package    WordPress
	 * @subpackage Phase Genomics
	 * @author     Delin Design <contact@delindesign.com>
	 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
	 * @link       https://delindesign.com
	 */

?>

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left float-left">
		<?php
		$image = get_field( 'header_logo', 'option' );
		if ( ! empty( $image ) ) :
		?>
		<a href="<?php echo esc_html( home_url() ); ?>"><img class="header-logo" src="<?php echo esc_html( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>" /></a>
		<?php endif; ?>
	</div>

	<div class="top-bar-right show-for-medium">
		<?php
		wp_nav_menu(array(
			'container'  => false,
			'menu'       => 'Social Media',
			'menu_class' => 'menu menu-social-media',
		));
		?>
		<?php joints_top_nav(); ?>
	</div>

	<div class="top-bar-right float-right hide-for-medium">
		<button class="hamburger hamburger--collapse" type="button" aria-label="Menu" aria-controls="navigation" aria-expanded="true/false" data-toggle="off-canvas">
			<span class="hamburger-box">
			<span class="hamburger-inner"></span>
		</span>
		</button>
	</div>

</div>
