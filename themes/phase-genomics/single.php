<?php
	/**
	 * Single Post Type
	 *
	 * @category   Template
	 * @package    WordPress
	 * @subpackage PhaseGenomics
	 * @author     Delin Design <contact@delindesign.com>
	 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
	 * @link       https://delindesign.com
	 */

get_header(); ?>

<div id="content">

	<div id="inner-content" class="row">

		<main id="main" class="large-12 medium-12 columns" role="main">

				<?php
				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();
				?>

				<?php get_template_part( 'parts/loop', 'single' ); ?>

				<?php endwhile; else : ?>

				<?php get_template_part( 'parts/content', 'missing' ); ?>

				<?php endif; ?>

		</main> <!-- end #main -->

	</div> <!-- end #inner-content -->

	<!-- CTA -->
	<div class="cta-fullwidth-banner">
		<div class="row">
			<div class="large-10 medium-12 large-centered medium-centered columns">
				<p class="cta-header"><?php echo esc_attr( get_field( 'cta_caption' ) ); ?></p>
				<div class="button-div">
					<?php
					if ( have_rows( 'cta' ) ) :
						while ( have_rows( 'cta' ) ) :
							the_row();
							$ctabl = get_sub_field( 'cta_button_text' );
							$link  = get_sub_field( 'link' );
							$ctabl = get_sub_field( 'cta_button_link' );
							$ctaex = get_sub_field( 'cta_external' );
					?>
						<?php if ( 'Internal' === get_sub_field( 'link' ) ) : ?>
						<a class="orange-button" href="<?php the_sub_field( 'cta_button_link' ); ?>"><?php the_sub_field( 'cta_button_text' ); ?></a>
						<?php endif; ?>

						<?php if ( 'External' === get_sub_field( 'link' ) ) : ?>
						<a class="orange-button" href="<?php the_sub_field( 'cta_external' ); ?>" target="_blank"><?php the_sub_field( 'cta_button_text' ); ?></a>
						<?php endif; ?>
					<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- /CTA -->

</div> <!-- end #content -->

<?php get_footer(); ?>
