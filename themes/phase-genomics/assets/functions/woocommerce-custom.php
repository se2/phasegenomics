<?php
/**
 * Woo-commerce Custom Functions
 *
 * @category   Function
 * @package    WordPress
 * @subpackage PhaseGenomics
 * @author     Delin Design <contact@delindesign.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://delindesign.com
 */

// Remove all WooCommerce styling.
add_filter( 'woocommerce_enqueue_styles', '__return_false' );

add_action( 'init', 'woo_remove_wc_breadcrumbs' );

/**
 * Remove breadcrumbs
 */
function woo_remove_wc_breadcrumbs() {
	remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}

// Remove sidebar.
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

// Remove display notice - Showing all x results.
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );

// Remove default sorting drop-down from WooCommerce.
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

// Hide product image in single product.
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );

// Hide product images from the shop loop.
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );

// Hide product thumbnail from the cart page.
add_filter( 'woocommerce_cart_item_thumbnail', '__return_empty_string' );

// Hide related products section.
add_filter( 'woocommerce_product_related_posts_query', '__return_empty_array', 100 );

// Hide Add-to-Cart button loop.
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );

// Hide Add-to-Cart button single product.
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );

// phpcs:disable

/**
 * Override loop template and show quantities next to add to cart buttons
 *
 * @param string $html HTML.
 * @param object $product Product.
 */
function quantity_inputs_for_woocommerce_loop_add_to_cart_link( $html, $product ) {
	if ( $product && $product->is_type( 'simple' ) && $product->is_purchasable() && $product->is_in_stock() && ! $product->is_sold_individually() ) {
		$html  = '<form action="' . esc_url( $product->add_to_cart_url() ) . '" class="cart" method="post" enctype="multipart/form-data">';
		$html .= woocommerce_quantity_input( array(), $product, false );
		$html .= '<button type="submit" class="button alt">' . esc_html( $product->add_to_cart_text() ) . '</button>';
		$html .= '</form>';
	}
	return $html;
}

add_filter( 'woocommerce_loop_add_to_cart_link', 'quantity_inputs_for_woocommerce_loop_add_to_cart_link', 10, 2 );

// phpcs:enable

/**
 * Ensure cart contents update when products are added to the cart via AJAX
 *
 * @param array $fragments Fradments.
 */
function woocommerce_header_add_to_cart_fragment( $fragments ) {
	ob_start();
	?>
	<!-- This should be identical to the section in /wp-content/themes/phase-genomics/parts/nav-offcanvas-topbar.php -->
	<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr( 'View your shopping cart' ); ?>">
		<?php echo ( WC()->cart->get_cart_contents_count() > 0 ) ? '<span class="shopping-label">Cart<sup>' . esc_html( WC()->cart->get_cart_contents_count() ) . '</sup></span>' : ''; ?>
	</a>
	<?php
	$fragments['a.cart-contents'] = ob_get_clean();
	return $fragments;
}

add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

/**
 * Add to cart multiple products
 * Credit: https://dsgnwrks.pro/snippets/woocommerce-allow-adding-multiple-products-to-the-cart-via-the-add-to-cart-query-string/
 *
 * @param boolean $url Url.
 */
function woocommerce_add_multiple_products_to_cart( $url = false ) {
	// phpcs:disable
	// Make sure WC is installed, and add-to-cart qauery arg exists, and contains at least one comma.
	if ( ! class_exists( 'WC_Form_Handler' ) || empty( $_REQUEST['add-to-cart'] ) || false === strpos( $_REQUEST['add-to-cart'], ',' ) ) {
		return;
	}

	// Remove WooCommerce's hook, as it's useless (doesn't handle multiple products).
	remove_action( 'wp_loaded', array( 'WC_Form_Handler', 'add_to_cart_action' ), 20 );

	$product_ids = explode( ',', $_REQUEST['add-to-cart'] );
	$count       = count( $product_ids );
	$number      = 0;

	// phpcs:enable
	foreach ( $product_ids as $id_and_quantity ) {
		// Check for quantities defined in curie notation (<product_id>:<product_quantity>)
		// https://dsgnwrks.pro/snippets/woocommerce-allow-adding-multiple-products-to-the-cart-via-the-add-to-cart-query-string/#comment-12236 .
		$id_and_quantity = explode( ':', $id_and_quantity );
		$product_id      = $id_and_quantity[0];

		$_REQUEST['quantity'] = ! empty( $id_and_quantity[1] ) ? absint( $id_and_quantity[1] ) : 1;

		if ( ++$number === $count ) {
			// Ok, final item, let's send it back to woocommerce's add_to_cart_action method for handling.
			$_REQUEST['add-to-cart'] = $product_id;

			return WC_Form_Handler::add_to_cart_action( $url );
		}

		$product_id        = apply_filters( 'woocommerce_add_to_cart_product_id', absint( $product_id ) );
		$was_added_to_cart = false;
		$adding_to_cart    = wc_get_product( $product_id );

		if ( ! $adding_to_cart ) {
			continue;
		}

		$add_to_cart_handler = apply_filters( 'woocommerce_add_to_cart_handler', $adding_to_cart->get_type(), $adding_to_cart );

		// Variable product handling.
		if ( 'variable' === $add_to_cart_handler ) {
			woo_hack_invoke_private_method( 'WC_Form_Handler', 'add_to_cart_handler_variable', $product_id );
			// Grouped Products.
		} elseif ( 'grouped' === $add_to_cart_handler ) {
			woo_hack_invoke_private_method( 'WC_Form_Handler', 'add_to_cart_handler_grouped', $product_id );
			// Custom Handler.
		} elseif ( has_action( 'woocommerce_add_to_cart_handler_' . $add_to_cart_handler ) ) {
			do_action( 'woocommerce_add_to_cart_handler_' . $add_to_cart_handler, $url );
			// Simple Products.
		} else {
			woo_hack_invoke_private_method( 'WC_Form_Handler', 'add_to_cart_handler_simple', $product_id );
		}
	}
}

// Fire before the WC_Form_Handler::add_to_cart_action callback.
add_action( 'wp_loaded', 'woocommerce_add_multiple_products_to_cart', 15 );

/**
 * Invoke class private method
 * Credit: https://dsgnwrks.pro/snippets/woocommerce-allow-adding-multiple-products-to-the-cart-via-the-add-to-cart-query-string/
 *
 * @since   0.1.0
 *
 * @param   string $class_name Class name.
 * @param   string $method_name Method name.
 * @throws  Exception Exception.
 * @return  mixed
 */
function woo_hack_invoke_private_method( $class_name, $method_name ) {
	if ( version_compare( phpversion(), '5.3', '<' ) ) {
		throw new Exception( 'PHP version does not support ReflectionClass::setAccessible()', __LINE__ );
	}

	$args = func_get_args();
	unset( $args[0], $args[1] );
	$reflection = new ReflectionClass( $class_name );
	$method     = $reflection->getMethod( $method_name );
	$method->setAccessible( true );

	$args = array_merge( array( $class_name ), $args );
	return call_user_func_array( array( $method, 'invoke' ), $args );
}

/**
 * Redirect to checkout after adding to cart.
 * Credit: https://gist.github.com/mikejolley/1622409
 */
function custom_add_to_cart_redirect() {
	/**
	* Replace with the url of your choosing
	* e.g. return 'http://www.yourshop.com/'
	*/
	return get_permalink( get_option( 'woocommerce_checkout_page_id' ) );
}

add_filter( 'woocommerce_add_to_cart_redirect', 'custom_add_to_cart_redirect' );
