<?php
	/**
	 * Offcanvas Menu Content
	 *
	 * @category   Components
	 * @package    WordPress
	 * @subpackage Phase Genomics
	 * @author     Delin Design <contact@delindesign.com>
	 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
	 * @link       https://delindesign.com
	 */

?>

<div class="off-canvas position-right hide-for-medium" id="off-canvas" data-off-canvas>
	<?php
	wp_nav_menu(array(
		'container'  => false,
		'menu'       => 'Main Navigation',
		'menu_class' => 'menu vertical',
	));
	?>
	<?php
	wp_nav_menu(array(
		'container'  => false,
		'menu'       => 'Social Media',
		'menu_class' => 'menu menu-social-media',
	));
	?>
</div>
