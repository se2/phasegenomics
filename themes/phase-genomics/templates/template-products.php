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
					<h2 class="lighter text-center secondary-color">Hi-C genome assembly and metagenome deconvolution products and services</h2>
					<p class="text-center">
						Get complete data with clear interpretations to quickly advance your research and publications.
						Our breadth of delivered data also enables researchers to explore future applications and make
						new discoveries hidden in every genome.
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- /Big Text -->

	<?php
	// Hi-C Category, change this if admin changes category for Hi-C products.
	$hic_category = 57;
	$products     = get_products_query( $hic_category, 'NOT IN' );
	if ( $products->have_posts() ) :
		while ( $products->have_posts() ) :
			$products->the_post();
	?>
	<!-- Product CTA -->
	<section class="page page-block page-block--product-cta bg-cover bg-center-bottom" style="background-image:url('<?php the_field( 'background_image' ); ?>');">
		<div class="main-container">
			<div class="grid-x grid-margin-x">
				<div class="cell large-8">
					<h4 class="bold uppercase secondary-color"><?php the_title(); ?></h4>
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
	<?php endif; ?>
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
					<a href="<?php the_permalink(); ?>" class="button blue uppercase small w100p">Explore Kit</a>
				</div>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</section>
	<!-- /Overlap Products -->

	<!-- 2-Column Text Block -->
	<section class="page page-block page-block--text-2col bg-center-left bg-cover" style="background-image:url('<?php the_clean_url(); ?>/wp-content/uploads/2018/05/quality.png');">
		<div class="main-container">
			<div class="grid-x">
				<div class="cell large-7 large-offset-5">
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
					<a href="<?php the_clean_url(); ?>/product" class="button secondary uppercase semibold small">Shop Products</a>
				</div>
			</div>
		</div>
	</section>
	<!-- /2-Column Text Block -->

	<!-- 2-Column Text Block -->
	<section class="page page-block page-block--text-2col bg-center-right bg-contain" style="background-image:url('<?php the_clean_url(); ?>/wp-content/uploads/2018/05/results.png');">
		<div class="main-container">
			<div class="grid-x">
				<div class="cell large-7">
					<h2 class="lighter secondary-color fz-36">Get Results. Proven and Fast.</h2>
					<p class="small">
						Results are available within 30 days from receipt of sample for most service projects,
						and ProxiMeta kits typically ship within a few business days. Along with a FASTA files
						containing your results, you’ll receive publication-ready figures, statistics, and reports.
						Supporting metadata and raw chromatin conformation data (Hi-C read pairs) are also provided.
					</p>
					<p class="small">
						Biological samples can be solid tissue, cell pellets, or other minimally processed samples
						containing intact cells. Our Customer Satisfaction Guarantee means we will keep working with
						you at no charge on service projects until you agree that your results are great, and we offer
						a full money back guarantee on kits.
					</p>
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
