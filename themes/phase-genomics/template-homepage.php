<?php
/*
 * Template Name: Homepage
*/
?>

<?php get_header(); ?>

<!-- Home Banner -->
<section class="home bg-cover bg-center-top home--banner" style="background-image:url('<?php the_field( 'banner_image' ); ?>');">
	<div class="main-container pos-rel h100p">
		<h1 class="white-color lighter text-shadow uppercase text-center abs-center"><?php the_field( 'banner_header' ); ?></h1>
		<div class="grid-x home--banner__cta-group">
			<div class="cell small-12 medium-4">
				<a href="#!">
					<div class="inner">
						<h6 class="mb0">Discover</h6>
						<p class="white-color light uppercase mb0" href="#!">Microbiome »</p>
					</div>
				</a>
			</div>
			<div class="cell small-12 medium-4">
				<a href="#!">
					<div class="inner">
						<h6 class="mb0">Explore</h6>
						<p class="white-color light uppercase mb0" href="#!">Plant/Animal/Human »</p>
					</div>
				</a>
			</div>
			<div class="cell small-12 medium-4">
				<a href="#!">
					<div class="inner">
						<h6 class="mb0">Analyze</h6>
						<p class="white-color light uppercase mb0" href="#!">Hi-C Kits »</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
<!-- /Home Banner -->

<!-- Home Products -->
<section class="home home--products">
	<div class="main-container pos-rel">
		<div class="section-heading">
			<h2 class="section-heading__title">Put the Power of Hi-C in Your Hands.</h2>
			<p class="section-heading__subtitle">All our Hi-C kits go from sample to sequencer in a day and have no HMW DNA extraction.</p>
		</div>
	</div>
	<div class="main-container-fluid">
		<?php
		$category_ID = 57;
		$args = array(
			'post_type'             => 'product',
			'post_status'           => 'publish',
			'ignore_sticky_posts'   => 1,
			'posts_per_page'        => '12',
			'order'                 => 'ASC',
			'tax_query'             => array(
				array(
					'taxonomy'      => 'product_cat',
					'field'         => 'term_id',
					'terms'         => $category_ID,
					'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
				)
			)
		);
		$products = new WP_Query($args);
		if ( $products->have_posts() ) :
		?>
		<div class="grid-x home--products__row">
		<?php
			while ( $products->have_posts() ) :
				$products->the_post();
		?>
		<div class="cell medium-3 home--products__cell">
			<h5 class="home--products__title"><?php the_title(); ?></h5>
		</div>
		<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>
	<div class="main-container">
		<div class="section-heading">
			<h2 class="section-heading__title">The world’s most complete genomeand metagenome assemblies.</h2>
			<p class="section-heading__subtitle">Our genome and metagenome platforms allow for highly accurate, affordable, rapid results.</p>
		</div>
	</div>
</section>
<!-- /Home Products -->

<!-- Home CTA -->
<div class="home home--cta bg-cover bg-center-right" style="background-image:url('<?php the_clean_url(); ?>/wp-content/uploads/2018/05/cta-bg.png');">
	<div class="main-container">
			<div class="grid-x">
				<div class="cell small-12 medium-12 large-6">
					<h5 class="home--cta__title">Interested in proximity-guided assembly?</h5>
					<a href="<?php the_clean_url(); ?>/contact" class="secondary-button secondary-button--small">Contact Us</a>
				</div>
			</div>
	</div>
</div>
<!-- /Home CTA -->

<?php get_footer(); ?>
