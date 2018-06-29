<?php
	/**
	 * Template Name: Products Overview
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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php get_template_part( 'parts/page', 'header' ); ?>

	<?php
	$parent = new WP_Query(array(
		'post_type'   => 'page',
		'post_parent' => $post->ID,
		'order'       => 'ASC',
		'orderby'     => 'menu_order',
	));
	while ( $parent->have_posts() ) :
		$parent->the_post();
		$title = get_field( 'page_title' ) ? get_field( 'page_title' ) : get_the_title();
	?>
	<!-- Product CTA -->
	<section class="page page-block page-block--product-cta bg-cover bg-center-bottom" style="background-image:url('<?php the_field( 'background_image' ); ?>');">
		<div class="main-container">
			<div class="grid-x grid-margin-x">
				<div class="cell large-8">
					<h4 class="bold uppercase secondary-color"><?php echo esc_html( $title ); ?></h4>
					<p><?php the_field( 'product_description_overview' ); ?></p>
				</div>
				<div class="cell large-3 large-offset-1">
					<a href="/shop" class="button uppercase secondary w100p">Buy Kits</a>
					<?php
					while ( have_rows( 'product_overview_ctas' ) ) :
						the_row();
					?>
					<a href="<?php the_sub_field( 'cta_link' ); ?>" class="button uppercase blue light w100p"><?php the_sub_field( 'cta_title' ); ?></a>
					<?php endwhile; ?>
					<?php reset_rows(); ?>
				</div>
			</div>
		</div>
	</section>
	<!-- /Product CTA -->
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>

	<!-- Overlap Products -->
	<section class="page page-block page-block--products-overlap" style="background-color:#466880;">
		<div class="main-container">
			<div class="grid-x">
				<div class="cell">
					<h2 class="lighter white-color text-center">Explore a variety of highly customizable Hi-C products and services.</h2>
				</div>
			</div>
			<?php
			global $hic_category;
			$hic_products = get_products_query( $hic_category );
			if ( $hic_products->have_posts() ) :
			?>
			<div class="grid-x grid-margin-x page-block--products-overlap--bottom">
				<?php
				while ( $hic_products->have_posts() ) :
					$hic_products->the_post();
					$attachment_ids[0] = get_post_thumbnail_id( $product->id );
					$product_image     = wp_get_attachment_image_src( $attachment_ids[0], 'full' );
				?>
				<div class="cell medium-3 page-block--products-overlap__cell pos-rel no-overflow text-center">
					<img src="<?php the_field( 'hexagon_thumbnail' ); ?>" alt="<?php the_title(); ?>">
					<h6 class="bold white-color"><?php the_title(); ?></h6>
					<a href="/hi-c-kits/" class="button blue uppercase small w100p">Explore Kit</a>
				</div>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</section>
	<!-- /Overlap Products -->

	<?php get_template_part( 'parts/page', 'blocks' ); ?>

	<?php get_template_part( 'parts/page', 'footer' ); ?>

</article>

<?php endwhile; else : ?>
	<div class="main-container">
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	</div>
<?php endif; ?>

<?php get_footer(); ?>
