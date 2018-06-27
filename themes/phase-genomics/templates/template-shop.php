<?php
	/**
	 * Template Name: Custom Shop
	 *
	 * @category   Template
	 * @package    WordPress
	 * @subpackage PhaseGenomics
	 * @author     Delin Design <contact@delindesign.com>
	 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
	 * @link       https://delindesign.com
	 */

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
?>

<!-- Disable Woocommerce's default Shop page at /wp-admin/admin.php?page=wc-settings&tab=products first -->

<article id="post-<?php the_ID(); ?>" <?php post_class( 'page-shop' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

	<?php get_template_part( 'parts/page', 'header' ); ?>

	<!-- Products display -->
	<div class="page page-block page-block--shop content-padding">
		<div class="main-container">
			<!-- <h2 class="lighter secondary-color text-center">Available Products</h2> -->
			<?php
			global $hic_category;
			$hic_products = get_products_query( $hic_category );
			if ( $hic_products->have_posts() ) :
			?>
			<div class="grid-x grid-margin-x mb10">
				<div class="cell small-9 medium-10 page-block--shop__padding">
					<h5 class="secondary-color bold">Hi-C Kits</h5>
				</div>
				<div class="cell small-3 medium-2">
					<h5 class="primary-color bold text-center show-for-mobile">Quantity</h5>
				</div>
			</div>
			<?php
			while ( $hic_products->have_posts() ) :
				$hic_products->the_post();
				$_product = wc_get_product( get_the_ID() );
				$pack     = $_product->get_attribute( 'pack' );
			?>
			<div class="grid-x grid-margin-x page-block--shop__row flex-center-items">
				<div class="cell small-9 medium-10 page-block--shop__padding">
					<p class="small mb0">
						<?php the_title(); ?> <?php echo esc_html( '(' . $pack . '-pack)' ); ?>
						<strong><?php echo ( $_product->get_price_html() ) ? ' – ' . $_product->get_price_html() : ''; // phpcs:ignore ?></strong>
					</p>
				</div>
				<div class="cell small-3 medium-2">
					<input min="0" max="999" class="product-qty text-center" type="number" name="product-<?php the_ID(); ?>" id="product-<?php the_ID(); ?>" data-product="<?php the_ID(); ?>" value="0">
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
			<?php
			$products = get_products_query( $hic_category, 'NOT IN' );
			if ( $products->have_posts() ) :
			?>
			<div class="mb50"></div>
			<?php
			while ( $products->have_posts() ) :
				$products->the_post();
				$_product = wc_get_product( get_the_ID() );
			?>
			<div class="grid-x grid-margin-x mb10">
				<div class="cell <?php echo $_product->get_price() ? 'small-9' : 'small-12'; ?> medium-9 page-block--shop__padding">
					<h5 class="secondary-color bold mb20"><?php the_title(); ?><?php echo ( $_product->get_price_html() ) ? ' – ' . $_product->get_price_html() : ' – REQUEST QUOTE'; // phpcs:ignore ?></h5>
					<p><?php the_excerpt(); ?></p>
					<hr>
				</div>
				<div class="cell small-3 medium-2 medium-offset-1">
					<?php if ( $_product->get_price() ) : ?>
					<h5 class="primary-color bold text-center show-for-mobile">Quantity</h5>
					<input min="0" max="999" class="product-qty text-center" type="number" name="product-<?php the_ID(); ?>" id="product-<?php the_ID(); ?>" data-product="<?php the_ID(); ?>" value="0">
					<?php endif; ?>
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
			<div class="text-center page-block--shop__checkout" id="checkout-section">
				<button class="button small lighter secondary uppercase no-outline" onclick="submitProducts()">Checkout</button>
				<script>
					var submitProducts = function() {
						// add-to-cart url base from WooCommerce
						var addToCartUrl = '/checkout/?add-to-cart=';
						var products = '';
						var productsNum = 0;
						// Loop through all inputs and append product IDs and quantities to URL
						var inputs = document.querySelectorAll(".product-qty");
						for (var i = 0; i < inputs.length; i++) {
							var productID = inputs[i].getAttribute('data-product'),
									productQty = inputs[i].value;
							// DO NOT append 0-quantity product to avoid bug
							if ( productQty > 0 ) {
								productsNum++;
								products += productID + ':' + productQty + ',';
							}
						}
						// Don't redirect if no product has quantity
						if (products == '') {
							alert('Please select product quantity');
						} else {
							// Remove last comma to avoid bug
							products = products.substring(0, products.length - 1);
							// Use default WooCommerce link if only 1 product has quantity
							if (productsNum == 1) {
								var product = products.split(':');
								products = product[0] + '&quantity=' + product[1];
							}
							// Create a link to click
							var link = document.createElement('a');
							link.id = 'checkout-link';
							link.href = addToCartUrl + products;
							document.getElementById('checkout-section').appendChild(link);
							link.click();
						}
					}
				</script>
				<p style="font-size:14px;">
					<br>
					<?php the_field( 'cta_message' ); ?>
				</p>
			</div>
		</div>
	</div>
	<!-- /Products display -->

	<?php if ( get_field( 'enable_resources' ) ) : ?>
	<!-- Products resources -->
	<div class="page page-block page-block--shop-resources" style="background-color:#f4fbff;">
		<div class="main-container">
			<h2 class="lighter secondary-color text-center">Additional Resources</h2>
			<?php	if ( $hic_products->have_posts() ) : ?>
			<div class="grid-x grid-margin-x">
			<?php
			while ( $hic_products->have_posts() ) :
				$hic_products->the_post();
				$_product = wc_get_product( get_the_ID() );
			?>
			<div class="cell medium-3 text-center">
				<img src="<?php the_field( 'hexagon_thumbnail' ); ?>" alt="" class="product-hexagon mb20">
				<p class="bold uppercase primary-color fz-18"><?php the_title(); ?></p>
				<p class="mb0">
					<?php if ( get_field( 'product_protocol' ) ) : ?>
					<a class="light" href="<?php the_field( 'product_protocol' ); ?>">Protocol</a>
					<?php endif; ?>
					<?php if ( get_field( 'product_sds' ) ) : ?>
					&nbsp;&nbsp;|&nbsp;&nbsp;<a class="light" href="<?php the_field( 'product_sds' ); ?>">SDS</a>
					<?php endif; ?>
				</p>
			</div>
			<?php endwhile; ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
	<!-- /Producs resources -->
	<?php endif; ?>

	<?php get_template_part( 'parts/page', 'footer' ); ?>

	<?php endwhile; else : ?>
		<div class="main-container">
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		</div>
	<?php endif; ?>

</article>

<?php get_footer(); ?>
