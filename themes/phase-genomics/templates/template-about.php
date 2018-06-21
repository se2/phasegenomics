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

<?php if ( have_rows( 'events' ) ) : ?>
<!-- Upcoming events -->
<div class="page-block page-block--posts page-block--events page-block--padding bg-cover bg-center-bottom" style="background-image:url('<?php the_clean_url(); ?>/wp-content/uploads/2018/05/latest-blog.png');">
	<div class="main-container">
		<h2 class="text-center secondary-color lighter">Upcoming Events</h2>
		<div id="events-carousel" class="grid-x">
			<?php
			while ( have_rows( 'events' ) ) :
				the_row();
			?>
			<div class="event-item cell">
				<div class="inner h100p pos-rel box-shadow--posts text-center" style="background-color:#ffffff;">
					<p class="small event-item__date-location bold"><?php the_sub_field( 'event_date' ); ?> | <?php the_sub_field( 'event_location' ); ?></p>
					<p class="event-item__title mb0"><?php the_sub_field( 'event_title' ); ?></p>
					<a href="<?php the_sub_field( 'event_cta_link' ); ?>" class="button secondary small"><?php the_sub_field( 'event_cta_title' ); ?></a>
				</div>
			</div>
			<?php endwhile; ?>
			<?php reset_rows(); ?>
		</div>
	</div>
</div>
<!-- /Upcoming events -->
<?php endif; ?>

<!-- About Team -->
<div class="page-block--team fullwidth-module bg-cover bg-center" style="background-image: url('<?php the_field( 'background_3' ); ?>');">

	<div class="main-container">

		<div class="grid-x align-center">
			<div class="cell small-12">
				<?php if ( get_field( 'headline_3' ) ) : ?>
				<p class="interior-header mb0"><?php the_field( 'headline_3' ); ?></p>
				<?php endif; ?>
				<?php if ( get_field( 'intro_text_3' ) ) : ?>
				<p class="interior-intro centered"><?php the_field( 'intro_text_3' ); ?></p>
				<?php endif; ?>
			</div>
		</div>

	</div>

	<div class="row">
		<div class="medium-12 large-centered medium-centered columns">
			<p class="interior-header margin-bottom-0"><?php the_field( 'headline_3b' ); ?></p>
		</div>
	</div>

	<!-- Executives -->
	<div class="row">
		<div class="medium-8 large-centered medium-centered columns">
			<div class="row">
				<?php
				$total = count( get_field( 'executives' ) );
				$min   = 4;
				if ( have_rows( 'executives' ) ) :
					while ( have_rows( 'executives' ) ) :
						the_row();
						$name     = get_sub_field( 'name' );
						$portrait = get_sub_field( 'portrait' ) ? get_sub_field( 'portrait' ) : array( 'url' => get_template_directory_uri() . '/assets/images/placeholder.png', 'alt' => $name );
						$title    = get_sub_field( 'title' );
						$readmore = get_sub_field( 'read_more_text' );
						$bio      = get_sub_field( 'bio', false, false );
						$l_link   = get_sub_field( 'lightbox_link' );
						$grid     = 12 / $total;
				?>
				<div class="medium-<?php echo ( $grid >= $min ) ? $grid : $min; ?> columns">
					<a data-toggle="<?php echo esc_attr( $l_link ); ?>" class="no-outline">
						<div class="lg-portrait-wrap">
							<div class="overlay-container">
								<img class="lg-portrait block-display-img" src="<?php echo esc_attr( $portrait['url'] ); ?>" alt="<?php echo esc_attr( $portrait['alt'] ); ?>" />
								<div class="overlay">
									<div class="overlay-title"><?php echo esc_attr( $readmore ); ?></div>
								</div>
							</div>
							<p class="orange-bold"><?php echo esc_attr( $name ); ?></p>
							<p class="small-p"><?php echo esc_attr( $title ); ?></p>
						</div>
					</a>
				</div>
				<!-- Lightbox -->
				<div class="reveal bio-reveal" id="<?php echo esc_attr( $l_link ); ?>" data-reveal>
					<div class="lg-portrait-wrap">
						<img class="lg-portrait" src="<?php echo esc_attr( $portrait['url'] ); ?>" alt="<?php echo esc_attr( $portrait['alt'] ); ?>" />
						<p class="orange-bold centered"><?php echo esc_attr( $name ); ?></p>
						<p class="small-p centered"><?php echo esc_attr( $title ); ?></p>
					</div>
					<p><?php echo esc_attr( $bio ); ?></p>
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
			<p class="interior-header mb0"><?php the_field( 'headline_4' ); ?></p>
			<div class="row small-up-2 medium-up-3 medium-centered large-up-3">
				<?php
				if ( have_rows( 'advisors' ) ) :
					while ( have_rows( 'advisors' ) ) :
						the_row();
						$portrait_2 = get_sub_field( 'portrait_2' );
						$name2      = get_sub_field( 'name_2' );
						$title      = get_sub_field( 'title' );
						$readmore   = get_sub_field( 'read_more_text' );
						$bio        = get_sub_field( 'bio', false, false );
						$l_link     = get_sub_field( 'lightbox_link' );
				?>
				<div class="columns">
					<a data-toggle="<?php echo esc_attr( $l_link ); ?>" class="no-outline">
						<div class="sm-portrait-wrap">
							<div class="overlay-container">
								<img class="sm-portrait block-display-img" src="<?php echo esc_attr( $portrait_2['url'] ); ?>" alt="<?php echo esc_attr( $portrait_2['alt'] ); ?>" />
								<div class="overlay">
									<div class="overlay-title-advisors"><?php echo esc_attr( $readmore ); ?></div>
								</div>
							</div>
							<p class="small-blue-bold"><?php echo esc_attr( $name2 ); ?></p>
						</div>
					</a>
				</div>
				<!-- Lightbox -->
				<div class="reveal bio-reveal" id="<?php echo esc_attr( $l_link ); ?>" data-reveal>
					<div class="lg-portrait-wrap">
						<img class="lg-portrait" src="<?php echo esc_attr( $portrait_2['url'] ); ?>" alt="<?php echo esc_attr( $portrait_2['alt'] ); ?>" />
						<p class="orange-bold centered"><?php echo esc_attr( $name2 ); ?></p>
						<p class="small-p centered"><?php echo esc_attr( $title ); ?></p>
					</div>
					<p><?php echo esc_attr( $bio ); ?></p>
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
<!-- /About Team -->

<?php get_template_part( 'parts/page', 'footer' ); ?>

<?php if ( get_field( 'show_testimonials' ) ) : ?>
<!-- Testimonials -->
<div class="page-block--testimonial fullwidth-module bg-center-top bg-cover" id="<?php the_field( 'section_id_2' ); ?>" style="background-image: url('<?php the_field( 'background_2' ); ?>');">

	<div class="main-container">

		<div class="grid-x align-center">
			<div class="cell small-12">
				<p class="interior-header"><?php the_field( 'headline_2' ); ?></p>
			</div>
		</div>

	</div>

	<!-- Testimonial Quote -->
	<div class="row">
		<div class="large-10 medium-10 large-centered medium-centered columns">
			<div class="interior-quote-container">
				<div class="orbit" role="region" aria-label="Testimonials" data-orbit>
					<div class="orbit-controls">
						<div class="orbit-previous arrow">
							<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/left-arrow.png" alt="">
						</div>
						<div class="orbit-next arrow">
							<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/right-arrow.png" alt="">
						</div>
					</div>
					<div class="orbit-wrapper">
						<hr>
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
								<p class="quote w400 oblique centered"><?php echo esc_attr( $testimonial_text ); ?></p>
								<p class="small-p centered"><?php echo esc_attr( $attribution ); ?></p>
								<div class="text-center">
									<img class="three-mod-icon" src="<?php echo esc_attr( $company_logo['url'] ); ?>" alt="<?php echo esc_attr( $company_logo['alt'] ); ?>" />
								</div>
							</li>
							<?php endwhile; ?>
							<?php endif; ?>
						</ul>
						<hr>
					</div>
					<nav class="orbit-bullets">
						<?php
						$bullet_counter = 0;
						while ( have_rows( 'testimonial' ) ) :
							the_row();
							$company_logo = get_sub_field( 'attribution_company_logo' );
						?>
						<button<?php echo ( 0 === $bullet_counter ) ? ' class="is-active"' : ''; ?> data-slide="<?php echo esc_attr( $bullet_counter ); ?>">
							<span class="show-for-sr">Slide of <?php echo esc_attr( $company_logo['alt'] ); ?></span>
						</button>
						<?php
							$bullet_counter++;
						endwhile;
						?>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- /Testimonial Quote -->

</div>
<!-- /Testimonials -->
<?php endif; ?>

<?php endwhile; else : ?>
	<div class="main-container">
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	</div>
<?php endif; ?>

<?php get_footer(); ?>
