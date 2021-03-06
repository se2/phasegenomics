<?php
	/**
	 * Template Name: Homepage
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

<?php get_template_part( 'parts/page', 'header' ); ?>

<!-- Home Products -->
<section class="home home--products">
	<div class="container pos-rel">
		<div class="section-heading">
			<h2 class="section-heading__title">The world’s best genome and metagenome assemblies.</h2>
			<p class="section-heading__subtitle">Put the power of Hi-C in your hands with our industry-leading kits and services.</p>
		</div>
	</div>
	<div class="main-content-full-width home--products__kits">
		<?php
		global $hic_category;
		$hic_products = get_products_query( $hic_category );
		if ( $hic_products->have_posts() ) :
		?>
		<div class="grid-x home--products__hic">
			<?php
			while ( $hic_products->have_posts() ) :
				$hic_products->the_post();
				$attachment_ids[0] = get_post_thumbnail_id( $product->id );
				$product_image     = wp_get_attachment_image_src( $attachment_ids[0], 'full' );
			?>
			<div class="cell small-6 mobile-6 medium-6 large-3 home--products__cell pos-rel">
				<div class="home--products__cell__inner pos-rel bg-cover show-for-large" style="background-image:url('<?php echo esc_attr( $product_image[0] ); ?>');">
					<div class="home--products__cell__content">
						<h5 class="home--products__title secondary-color"><?php the_title(); ?></h5>
						<p class="white-color home--products__desc"><?php echo get_the_excerpt(); ?></p>
						<a href="<?php the_permalink(); ?>" class="button secondary uppercase border semibold small">Order</a>
					</div>
				</div>
				<div class="home--products__cell__inner home--products__cell__inner--mask">
					<img src="<?php the_field( 'hexagon_thumbnail' ); ?>" alt="<?php the_title(); ?>">
					<div class="home--products__cell__content">
						<h5 class="home--products__title secondary-color"><?php the_title(); ?></h5>
						<p class="home--products__desc primary-color hide-for-large"><?php echo get_the_excerpt(); ?></p>
						<a href="<?php the_clean_url(); ?>/shop" class="button secondary uppercase border semibold small hide-for-large">Order</a>
					</div>
				</div>
				<div class="home--products__cell__content show-for-large">
					<a href="<?php the_clean_url(); ?>/shop" class="button secondary uppercase border semibold small">Order</a>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
	</div>
	<div class="container">
		<div class="section-heading">
			<h2 class="section-heading__title">Save time, effort, and money</h2>
			<p class="section-heading__subtitle">Our genome and metagenome assembly platforms yield publication-quality results quickly and affordably.</p>
		</div>
	</div>
	<div class="container">
		<?php
		global $products_overview_page;
		$parent = new WP_Query(array(
			'post_type'   => 'page',
			'post_parent' => $products_overview_page,
			'order'       => 'ASC',
			'orderby'     => 'menu_order',
		));
		if ( $parent->have_posts() ) :
		?>
		<div class="grid-x grid-margin-x home--products__regular">
			<?php
			while ( $parent->have_posts() ) :
				$parent->the_post();
			?>
			<div class="cell medium-6 home--products__cell home--products__cell--border">
				<h4 class="bold secondary-color uppercase"><?php the_title(); ?></h4>
				<?php the_field( 'product_description_home' ); ?>
				<a href="<?php the_permalink(); ?>" class="button secondary uppercase large">Learn More</a>
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
	</div>
</section>
<!-- /Home Products -->

<?php get_template_part( 'parts/page', 'blocks' ); ?>

<?php endwhile; else : ?>
	<div class="main-container">
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	</div>
<?php endif; ?>

<?php get_footer(); ?>
