<?php
/*
 * Template Name: Homepage
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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

<!-- Default Announcement -->
<section class="home home--announcement" style="background-color:#99b7cc;">
	<div class="container">
		<div class="grid-x grid-margin-x">
			<div class="cell medium-9 home--announcement__content">
				<h6 class="title">Phase Genomics Unveils a Hi-C Kit for Human Samples, Expanding Their Hi-C Product Portfolio.</h6>
			</div>
			<div class="cell medium-3 home--announcement__cta">
				<a href="<?php the_clean_url(); ?>/shop" class="secondary-button">Learn More</a>
			</div>
		</div>
	</div>
</section>
<!-- /Default Announcement -->

<!-- Home Products -->
<section class="home home--products">
	<div class="container pos-rel">
		<div class="section-heading">
			<h2 class="section-heading__title">Put the Power of Hi-C in Your Hands.</h2>
			<p class="section-heading__subtitle">All our Hi-C kits go from sample to sequencer in a day and have no HMW DNA extraction.</p>
		</div>
	</div>
	<div class="main-content-full-width home--products__kits">
		<?php
		$category_id  = 57; // Hi-C Category, change this if admin changes category for Hi-C products.
		$tax_query    = array(
			array(
				'taxonomy' => 'product_cat',
				'field'    => 'term_id',
				'terms'    => $category_id,
				'operator' => 'IN', // Possible values are 'IN', 'NOT IN', 'AND'.
			)
		);
		$args = array(
			'post_type'   => 'product',
			'post_status' => 'publish',
			'order'       => 'ASC',
			'tax_query'   => $tax_query,
		);
		$hic_products = new WP_Query( $args );
		if ( $hic_products->have_posts() ) :
		?>
		<div class="grid-x home--products__hic">
			<?php
			while ( $hic_products->have_posts() ) :
				$hic_products->the_post();
				$attachment_ids[0] = get_post_thumbnail_id( $product->id );
				$product_image = wp_get_attachment_image_src( $attachment_ids[0], 'full' );
			?>
			<div class="cell medium-3 home--products__cell pos-rel no-overflow">
				<div class="home--products__cell__inner pos-rel bg-cover" style="background-image:url('<?php echo esc_attr( $product_image[0] ); ?>');">
					<div class="home--products__cell__content">
						<h5 class="home--products__title"><?php the_title(); ?></h5>
						<p class="home--products__desc">Complete chromosome-scale scaffolds and deconvoluted metagenomes.</p>
						<a href="<?php the_permalink(); ?>" class="secondary-button">Order</a>
					</div>
				</div>
				<div class="home--products__cell__inner home--products__cell__inner--mask">
					<img src="<?php the_field( 'hexagon_thumbnail' ); ?>" alt="<?php the_title(); ?>">
					<div class="home--products__cell__content">
						<h5 class="home--products__title" style="color:#2a627a;"><?php the_title(); ?></h5>
					</div>
				</div>
				<div class="home--products__cell__content">
					<a href="<?php the_permalink(); ?>" class="secondary-button">Order</a>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
	</div>
	<div class="container">
		<div class="section-heading">
			<h2 class="section-heading__title">The world’s most complete genome and metagenome assemblies.</h2>
			<p class="section-heading__subtitle">Our genome and metagenome platforms allow for highly accurate, affordable, rapid results.</p>
		</div>
	</div>
	<div class="container">
		<?php
		$tax_query = array(
			array(
				'taxonomy'      => 'product_cat',
				'field'         => 'term_id',
				'terms'         => $category_id,
				'operator'      => 'NOT IN', // Possible values are 'IN', 'NOT IN', 'AND'.
			)
		);
		$args['tax_query'] = $tax_query;
		$products = new WP_Query( $args );
		if ( $products->have_posts() ) :
		?>
		<div class="grid-x grid-margin-x home--products__regular">
			<?php
			while ( $products->have_posts() ) :
				$products->the_post();
			?>
			<div class="cell medium-6 home--products__cell home--products__cell--border">
				<h4 class="bold secondary-color uppercase"><?php the_title(); ?></h4>
				<?php the_field( 'product_short_description' );?>
				<a href="<?php the_permalink(); ?>" class="secondary-button secondary-button--large">Learn More</a>
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
	</div>
</section>
<!-- /Home Products -->

<!-- Home CTA Large -->
<section class="home home--cta home--cta--large bg-cover bg-center" style="background-image:url('<?php the_clean_url(); ?>/wp-content/uploads/2018/05/background-blue.png');">
	<div class="container h100p">
			<div class="grid-x h100p flex-center-items">
				<div class="cell small-12 medium-12 large-12 text-center">
					<h2 class="title white-color">Shorten the path to complete genomes</h2>
					<a href="<?php the_clean_url(); ?>/blog" class="secondary-button secondary-button--large">Latest News</a>
				</div>
			</div>
	</div>
</section>
<!-- /Home CTA Large -->

<!-- Home Quotes -->
<section class="home home--quotes">
	<div class="container text-center">
		<h2 class="secondary-color">Testimonials</h2>
		<?php if ( have_rows( 'testimonial' ) ) : ?>
		<div class="grid-x grid-margin-x home--quotes__wrapper">
			<?php
				while ( have_rows( 'testimonial' ) ) :
					the_row();
			?>
			<div class="cell medium-6 home--quotes__cell">
				<p class="quote"><?php the_sub_field( 'quote' ); ?></p>
				<strong class="referee primary-color"><?php the_sub_field( 'referee' ); ?></strong>
				<p class="source"><?php the_sub_field( 'source' ); ?></p>
			</div>
			<?php endwhile; ?>
			<?php reset_rows(); ?>
		</div>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
	</div>
</section>
<!-- /Home Quotes -->

<!-- Home CTA -->
<section class="home home--cta bg-cover bg-center-right" style="background-image:url('<?php the_clean_url(); ?>/wp-content/uploads/2018/05/cta-bg.png');">
	<div class="container">
			<div class="grid-x">
				<div class="cell small-12 medium-12 large-7">
					<h5 class="title blue-color">Interested in proximity-guided assembly?</h5>
					<a href="<?php the_clean_url(); ?>/contact" class="secondary-button secondary-button--small">Contact Us</a>
				</div>
			</div>
	</div>
</section>
<!-- /Home CTA -->

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
