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

	<!-- Big Text -->
	<section class="page page-block page-block--text">
		<div class="container pos-rel">
			<div class="grid-x">
				<div class="cell">
					<h2 class="lighter text-center secondary-color">Hi-C genome assembly and metagenome deconvolution products and services.</h2>
					<p class="text-center">We provide access to proximity-guided assembly technology with the latest laboratory and computational tools.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- /Big Text -->

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
					<a href="<?php the_permalink(); ?>" class="button uppercase secondary w100p">Buy Kits</a>
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
					<a href="/shop" class="button blue uppercase small w100p">Explore Kit</a>
				</div>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</section>
	<!-- /Overlap Products -->

	<!-- 2-Column Text Block -->
	<!-- <section class="page page-block page-block--text-2col bg-center-left bg-cover" style="background-image:url('<?php // the_clean_url(); ?>/wp-content/uploads/2018/05/quality.png');">
		<div class="main-container">
			<div class="grid-x grid-right">
				<div class="cell large-7">
					<h2 class="lighter secondary-color fz-36">The Highest Quality Results Customized for You</h2>
					<p class="small">
						Get complete data with clear interpretations to quickly advance your research and publications.
						Our breadth of delivered data also enables researchers to explore future applications and make new
						discoveries hidden in every genome.
					</p>
					<p class="small">
						Complete chromosome-scale scaffolds and deconvoluted metagenomic assemblies, along with a continuing
						commitment to personalized service without hidden costs.
					</p>
					<a href="<?php // the_clean_url(); ?>/product" class="button secondary uppercase semibold small">Shop Products</a>
				</div>
			</div>
		</div>
	</section> -->
	<!-- /2-Column Text Block -->

	<!-- 2-Column Text Block -->
	<section class="page page-block page-block--text-2col bg-center-right bg-contain" style="background-image:url('<?php the_clean_url(); ?>/wp-content/uploads/2018/05/results.png');">
		<div class="main-container">
			<div class="grid-x">
				<div class="cell large-7">
					<h2 class="lighter secondary-color fz-36">Bring Hi-C into your lab with our easy kits</h2>
					<p class="small">
						<ul>
							<li>Protocol takes approximately one day</li>
							<li>Yields dual-indexed Illumina-compatible Hi-C library</li>
							<li>All components included, no special equipment required.</li>
							<li>Simple steps, user-friendly instructions.</li>
							<li>Dedicated technical support</li>
						</ul>
					</p>
					<a href="<?php the_clean_url(); ?>/shop" class="button secondary uppercase semibold small">Shop Products</a>
				</div>
			</div>
		</div>
	</section>
	<!-- /2-Column Text Block -->

	<?php if ( get_field( 'cta_group_title' ) && get_field( 'ctas' ) ) : ?>
	<!-- CTAs Group -->
	<div class="page-block page-block--cta-group" style="background-image:url('<?php the_field( 'background_image' ); ?>');">
		<div class="main-container">
			<h2 class="white-color text-center lighter mb0"><?php the_field( 'cta_group_title' ); ?></h2>
			<div class="text-center page-block--cta-group__btn-group">
				<?php
				$ctas = get_field( 'ctas' );
				foreach ( $ctas as $key => $cta ) :
				?>
				<a href="<?php echo esc_attr( $cta['cta_button_link'] ); ?>" class="button blue large uppercase regular mb0"><?php echo esc_html( $cta['cta_button_title'] ); ?></a>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<!-- /CTAs Group -->
	<?php endif; ?>

	<?php get_template_part( 'parts/page', 'footer' ); ?>

</article>

<?php endwhile; else : ?>
	<div class="main-container">
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	</div>
<?php endif; ?>

<?php get_footer(); ?>
