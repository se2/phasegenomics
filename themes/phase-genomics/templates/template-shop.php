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

	<div class="page page-block page-block--shop content-padding">
		<div class="main-container">
			<h2 class="lighter secondary-color text-center">Available Products</h2>
			<?php
			// $product_ids      = '1429,1259:2';
			// $add_to_cart_url  = esc_url_raw( add_query_arg( 'add-to-cart', $product_ids, wc_get_checkout_url() ) );
			// Hi-C Category, change this if admin changes category for Hi-C products.
			$hic_category = 57;
			$hic_products = get_products_query( $hic_category );
			if ( $hic_products->have_posts() ) :
			?>
			<div class="grid-x grid-margin-x mb10">
				<div class="cell medium-10 page-block--shop__padding">
					<h5 class="secondary-color bold">Hi-C Kits</h5>
				</div>
				<div class="cell medium-2">
					<h5 class="primary-color bold text-center">Quantity</h5>
				</div>
			</div>
			<?php
			while ( $hic_products->have_posts() ) :
				$hic_products->the_post();
				$_product = wc_get_product( get_the_ID() );
				$pack     = $_product->get_attribute( 'pack' );
			?>
			<div class="grid-x grid-margin-x page-block--shop__row flex-center-items">
				<div class="cell medium-10 page-block--shop__padding">
					<p class="small mb0">
						<?php the_title(); ?> <?php echo esc_html( '(' . $pack . '-pack)' ); ?>
						<strong><?php echo ( $_product->get_price_html() ) ? ' – ' . $_product->get_price_html() : ''; ?></strong>
					</p>
				</div>
				<div class="cell medium-2">
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
				<div class="cell medium-9 page-block--shop__padding">
					<h5 class="secondary-color bold mb20"><?php the_title(); ?><?php echo ( $_product->get_price_html() ) ? ' – ' . $_product->get_price_html() : ' – REQUEST QUOTE'; ?></h5>
					<p><?php the_excerpt(); ?></p>
					<hr>
				</div>
				<div class="cell medium-2 medium-offset-1">
					<?php if ( $_product->get_price() ) : ?>
					<h5 class="primary-color bold text-center">Quantity</h5>
					<input min="0" max="999" class="product-qty text-center" type="number" name="product-<?php the_ID(); ?>" id="product-<?php the_ID(); ?>" data-product="<?php the_ID(); ?>" value="0">
					<?php endif; ?>
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
			<div class="text-center page-block--shop__checkout">
				<a href="/#!" class="button small lighter secondary uppercase">Checkout</a>
				<p style="font-size:14px;">
					<br>
					If you are unable to purchase with a credit card, or would like to request a quote, please contact us at <a href="mailto:info@phasegenomics.com">info@phasegenomics.com</a>
				</p>
			</div>
		</div>
	</div>

	<?php get_template_part( 'parts/page', 'footer' ); ?>

	<?php endwhile; else : ?>
		<div class="main-container">
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		</div>
	<?php endif; ?>

</article>

<?php get_footer(); ?>
