<?php
	/**
	 * Template Name: About
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

<div class="fullwidth-module" style="background: url('<?php echo get_field('background_3'); ?>');">

	<!-- Icon -->
	<div class="row">
		<div class="large-6 medium-10 large-centered medium-centered columns">
			<div class="text-center">
				<?php
				$icon_3 = get_field( 'icon_3' );
				if ( ! empty ( $icon_3 ) ) :
				?>
				<img class="three-mod-icon" src="<?php echo esc_attr( $icon_3['url'] ); ?>" alt="<?php echo esc_attr( $icon_3['alt'] ); ?>" />
				<?php endif; ?>
			</div>
			<p class="interior-header"><?php echo get_field( 'headline_3' ); ?></p>
		</div>
	</div>
	<!-- /Icon -->

	<div class="row">
		<div class="large-11 medium-11 large-centered medium-centered columns">
			<p class="centered"><?php echo get_field( 'intro_text_3' ); ?></p>
		</div>
	</div>

	<div class="row">
		<div class="medium-12 large-centered medium-centered columns">
			<p class="interior-header"><?php echo get_field( 'headline_3b' ); ?></p>
		</div>
	</div>

	<!-- Executives -->
	<div class="row">
		<div class="medium-8 large-centered medium-centered columns">
			<div class="row">
				<?php
				if ( have_rows( 'executives' ) ) :
					while ( have_rows( 'executives' ) ) :
						the_row();
						$portrait = get_sub_field( 'portrait' );
						$name     = get_sub_field( 'name' );
						$title    = get_sub_field( 'title' );
						$readmore = get_sub_field( 'read_more_text' );
						$bio      = get_sub_field( 'bio', false, false );
						$l_link   = get_sub_field( 'lightbox_link' );
				?>
				<div class="medium-6 columns">
					<a data-toggle="<?php echo $l_link; ?>" class="no-outline">
						<div class="lg-portrait-wrap">
							<div class="overlay-container">
								<img class="lg-portrait block-display-img" src="<?php echo $portrait['url']; ?>" alt="<?php echo $portrait['alt'] ?>" />
								<div class="overlay">
									<div class="overlay-title"><?php echo $readmore; ?></div>
								</div>
							</div>
							<p class="orange-bold"><?php echo $name; ?></p>
							<p class="small-p"><?php echo $title; ?></p>
						</div>
					</a>
				</div>
				<!-- Lightbox -->
				<div class="reveal bio-reveal" id="<?php echo $l_link; ?>" data-reveal>
					<div class="lg-portrait-wrap">
						<img class="lg-portrait" src="<?php echo $portrait['url']; ?>" alt="<?php echo $portrait['alt'] ?>" />
						<p class="orange-bold centered"><?php echo $name; ?></p>
						<p class="small-p centered"><?php echo $title; ?></p>
					</div>
					<p><?php echo $bio; ?></p>
					<div class="text-center">
						<img class="three-mod-icon" src="https://www.phasegenomics.com/wp-content/uploads/2017/06/logomark.png" alt="Phase Genomics" />
					</div>
					<button class="close-button" data-close aria-label="Close modal" type="button">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<!-- /Lightbox -->
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<!-- /Executives -->

	<!-- Advisors -->
	<div class="row">
		<div class="medium-8 large-centered medium-centered columns">
			<p class="interior-header"><?php echo get_field('headline_4'); ?></p>
			<div class="row small-up-2 medium-up-3 medium-centered large-up-3">
				<?php
				if ( have_rows( 'advisors' ) ) :
					while ( have_rows( 'advisors' ) ):
						the_row();
						$portrait_2 = get_sub_field( 'portrait_2' );
						$name2      = get_sub_field( 'name_2' );
						$title      = get_sub_field( 'title' );
						$readmore   = get_sub_field( 'read_more_text' );
						$bio        = get_sub_field( 'bio', false, false );
						$l_link     = get_sub_field( 'lightbox_link' );
				?>
				<div class="columns">
					<a data-toggle="<?php echo $l_link; ?>" class="no-outline">
						<div class="sm-portrait-wrap">
							<div class="overlay-container">
								<img class="sm-portrait block-display-img" src="<?php echo $portrait_2['url']; ?>" alt="<?php echo $portrait_2['alt'] ?>" />
								<div class="overlay">
									<div class="overlay-title-advisors"><?php echo $readmore; ?></div>
								</div>
							</div>
							<p class="small-blue-bold"><?php echo $name2; ?></p>
							<p class="small-p"><?php echo $title; ?></p>
						</div>
					</a>
				</div>
				<!-- Lightbox -->
				<div class="reveal bio-reveal" id="<?php echo $l_link; ?>" data-reveal>
					<div class="lg-portrait-wrap">
						<img class="lg-portrait" src="<?php echo $portrait_2['url']; ?>" alt="<?php echo $portrait_2['alt'] ?>" />
						<p class="orange-bold centered"><?php echo $name2; ?></p>
						<p class="small-p centered"><?php echo $title; ?></p>
					</div>
					<p><?php echo $bio; ?></p>
					<div class="text-center">
						<img class="three-mod-icon" src="https://www.phasegenomics.com/wp-content/uploads/2017/06/logomark.png" alt="Phase Genomics" />
					</div>
					<button class="close-button" data-close aria-label="Close modal" type="button">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<!-- /Lightbox -->
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<!-- /Advisors -->

</div>

<!-- Testimonials -->
<div class="fullwidth-module" id="<?php echo get_field('section_id_2'); ?>" style="background: url('<?php echo get_field('background_2'); ?>');">

	<!-- Icon -->
	<div class="row">
		<div class="large-6 medium-10 large-centered medium-centered columns">
			<div class="text-center">
				<?php
				$icon_2 = get_field( 'icon_2' );
				if ( ! empty( $icon_2 ) ) :
				?>
				<img class="three-mod-icon" src="<?php echo $icon_2['url']; ?>" alt="<?php echo $icon_2['alt'] ?>" />
				<?php endif; ?>
			</div>
			<p class="interior-header"><?php echo get_field('headline_2'); ?></p>
		</div>
	</div>
	<!-- /Icon -->

	<!-- Testimonial Quote -->
	<div class="row">
		<div class="large-10 medium-12 large-centered medium-centered columns">
			<div class="interior-quote-container">
				<div class="orbit" role="region" aria-label="Testimonials" data-orbit>
					<div class="orbit-wrapper">
						<div class="orbit-controls">
							<div class="orbit-previous" id="chevron-arrow-left"><span class="show-for-sr">Previous Slide</span></div>
							<div class="orbit-next" id="chevron-arrow-right"><span class="show-for-sr">Previous Slide</span></div>
						</div>
						<ul class="orbit-container">
							<?php
							if ( have_rows( 'testimonial' ) ) :
								while ( have_rows( 'testimonial' ) ) :
									the_row();
									$testimonial_text = get_sub_field( 'testimonial_text', false, false );
									$attribution      = get_sub_field( 'attribution' );
									$company_logo     = get_sub_field( 'attribution_company_logo' );
							?>
							<li class="orbit-slide">
								<p class="quote w400 oblique centered"><?php echo $testimonial_text; ?></p>
								<p class="small-p centered"><?php echo $attribution; ?></p>
								<div class="text-center">
									<img class="three-mod-icon" src="<?php echo $company_logo['url']; ?>" alt="<?php echo $company_logo['alt'] ?>" />
								</div>
							</li>
							<?php endwhile; ?>
							<?php endif; ?>
						</ul>
					</div>
					<nav class="orbit-bullets">
						<?php $bullet_counter = 0; while( have_rows('testimonial') ) : the_row(); $company_logo = get_sub_field('attribution_company_logo'); ?>
						<button<?php if( $bullet_counter === 0 ) : echo ' class="is-active"'; endif; ?> data-slide="<?php echo $bullet_counter; ?>">
							<span class="show-for-sr">Slide of <?php echo $company_logo['alt']; ?></span>
						</button>
						<?php $bullet_counter++; endwhile; ?>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- /Testimonial Quote -->

</div>

<?php get_template_part( 'parts/page', 'footer' ); ?>

<?php endwhile; else : ?>
	<div class="main-container">
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	</div>
<?php endif; ?>

<?php get_footer(); ?>
