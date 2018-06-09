<?php
	/**
	 * Main Theme Functions
	 *
	 * @category   Function
	 * @package    WordPress
	 * @subpackage PhaseGenomics
	 * @author     Delin Design <contact@delindesign.com>
	 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
	 * @link       https://delindesign.com
	 */

// Theme support options.
require_once get_template_directory() . '/assets/functions/theme-support.php';

// WP Head and other cleanup functions.
require_once get_template_directory() . '/assets/functions/cleanup.php';

// Register scripts and stylesheets.
require_once get_template_directory() . '/assets/functions/enqueue-scripts.php';

// Register custom menus and menu walkers.
require_once get_template_directory() . '/assets/functions/menu.php';

// Register sidebars/widget areas.
require_once get_template_directory() . '/assets/functions/sidebar.php';

// Makes WordPress comments suck less.
require_once get_template_directory() . '/assets/functions/comments.php';

// Replace 'older/newer' post links with numbered navigation.
require_once get_template_directory() . '/assets/functions/page-navi.php';

// Adds support for multiple languages.
require_once get_template_directory() . '/assets/translation/translation.php';

// phpcs:disable
// Remove 4.2 Emoji Support.
// require_once get_template_directory() . '/assets/functions/disable-emoji.php';

// Adds site styles to the WordPress editor
//require_once get_template_directory() . '/assets/functions/editor-styles.php';

// Related post function - no need to rely on plugins
// require_once get_template_directory() . '/assets/functions/related-posts.php';

// Use this as a template for custom post types
// require_once get_template_directory() . '/assets/functions/custom-post-type.php';

// Customize the WordPress login menu
// require_once get_template_directory() . '/assets/functions/login.php';

// Customize the WordPress admin
// require_once get_template_directory() . '/assets/functions/admin.php';

// phpcs:enable

// Miscellaneous functions.
require_once get_template_directory() . '/assets/functions/misc.php';

// Woocommerce custom functions.
require_once get_template_directory() . '/assets/functions/woocommerce-custom.php';

// Option Page.
if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page();
}

/**
 * Google Font.
 */
function wpb_add_google_fonts() {
	wp_enqueue_style( 'montserrat-sans', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700"', false );
	wp_enqueue_style( 'open-sans', 'https://fonts.googleapis.com/css?family=Open+Sans:600i', false );
}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

// Speed up ACF backend loading time.
// https://www.advancedcustomfields.com/blog/acf-pro-5-5-13-update/ .
add_filter( 'acf/settings/remove_wp_meta_box', '__return_true' );
