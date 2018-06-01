<?php
/**
 * Template Hi-C Kit Overview
 *
 * @package    Backup
 * @deprecated No longer used.
 */

get_header(); ?>

<?php // phpcs:disable ?>


<!-- PAGE BANNER -->
<div class="header-bg" style="background: url('<?php echo get_field('background_image'); ?>');">
				<div class="row">
					<div class="large-10 medium-12 large-centered medium-centered columns">
						<div class="fullwidth-module">
							<h2 class="bb-header"><?php echo get_field('header'); ?></h2>
							<p class="bb-sub"><?php echo get_field('sub_header'); ?></p>
						</div>
                    </div>
                </div>
   		 	</div>


<!-- CHOOSE YOUR KIT -->
<?php if( get_field('cyk_background_pattern') != "" ): ?>
<div class="fullwidth-module" style="background: url('<?php echo get_field('cyk_background_pattern'); ?>');">
<?php else: ?>
<div class="fullwidth-module grey-background">
<?php endif; ?>
	<div class="row">
		<h2 class="centered-kit-header">CHOOSE YOUR <a href="<?php echo get_field('cyk_link_destination'); ?>"><?php echo get_field('cyk_header'); ?></a></h2>
	</div>
   	<div class="row">
		<?php if( have_rows('kits_available') ):
			$rowCount = 0; ?>
		<?php while( have_rows('kits_available') ): the_row();
			// vars
			$kit_name = get_sub_field('kit_name');
			$kit_image = get_sub_field('kit_image');
			$kit_description = get_sub_field('kit_description');
		?>
	   		<div class="large-3 medium-3 columns">
				<div class="centered">
					<img class="hp-bb-icon" src="<?php echo $kit_image; ?>" />
				</div>
				<div class="centered kit-bullet-header">
					<h2 class="interior-header"><?php echo $kit_name; ?></h2>
				</div>
				<div class="kit-bullet">
					<p><?php echo $kit_description; ?></p>
				</div>
			</div>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>


<!-- CHOOSE YOUR ANALYSIS -->
<?php if( get_field('cya_background_pattern') != "" ): ?>
<div class="fullwidth-module" style="background: url('<?php echo get_field('cya_background_pattern'); ?>');">
<?php else: ?>
<div class="fullwidth-module white-background">
<?php endif; ?>
	<div class="row">
		<h2 class="centered-kit-header">CHOOSE YOUR <a href="<?php echo get_field('cya_link_destination'); ?>"><?php echo get_field('cya_header'); ?></a></h2>
   	</div>
   	<div class="row">
  		<?php if( have_rows('analyses_available') ):
			$rowCount = 0; ?>
		<?php while( have_rows('analyses_available') ): the_row();
			// vars
			$analysis_name = get_sub_field('analysis_name');
			$analysis_icon = get_sub_field('analysis_icon');
			$analysis_description = get_sub_field('analysis_description');
			$analysis_button_text = get_sub_field('analysis_button_text');
			$analysis_button_link = get_sub_field('analysis_button_link');
		?>
	   		<div class="large-4 medium-4 columns">
				<div class="centered">
					<img class="three-mod-icon" src="<?php echo $analysis_icon; ?>" />
				</div>
				<div class="centered analysis-heading-height">
					<h2 class="interior-header"><?php echo $analysis_name; ?></h2>
				</div>
				<div class="analysis-description-height">
					<p><?php echo $analysis_description; ?></p>
				</div>
				<div class="centered">
					<a class="orange-button" href="<?php echo $analysis_button_link; ?>"><?php echo $analysis_button_text; ?></a>
				</div>
			</div>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>

<!-- CHOOSE YOUR PACKAGE -->
<?php if( get_field('cyp_background_pattern') != "" ): ?>
<div class="fullwidth-module" style="background: url('<?php echo get_field('cyp_background_pattern'); ?>');">
<?php else: ?>
<div class="fullwidth-module grey-background">
<?php endif; ?>
	<div class="row">
		<h2 class="centered-kit-header">CHOOSE YOUR <a href="<?php echo get_field('cyp_link_destination'); ?>"><?php echo get_field('cyp_header'); ?></a></h2>
   	</div>
   	<div class="row">
   		<?php if( have_rows('packages_available') ):
			$rowCount = 0; ?>
		<?php while( have_rows('packages_available') ): the_row();
			// vars
				$package_name = get_sub_field('package_name');
				$package_image = get_sub_field('package_image');
				$package_description = get_sub_field('package_description');
		?>
	   		<div class="large-4 medium-4 columns">
				<?php if( $package_image != "" ): ?>
				<div class="centered">
					<img class="three-mod-icon" src="<?php echo $package_image ?>;" alt="<?php echo $package_image['alt'] ?>" />
				</div>
				<?php endif; ?>
				<div class="centered">
					<h2 class="interior-header"><?php echo $package_name; ?></h2>
				</div>
				<div class=analysis-description-height>
					<p><?php echo $package_description; ?></p>
				</div>
			</div>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
	<div class="centered">
		<a class="orange-button" href="<?php echo get_field('cyp_button_url'); ?>"><?php echo get_field('cyp_button_text'); ?></a>
	</div>
</div>

		<!-- CTA -->
			<div class="cta-fullwidth-banner">
				<div class="row">
					<div class="large-10 medium-12 large-centered medium-centered columns">
						<p class="cta-header"><?php echo get_field('cta_caption'); ?></p>
					<div class="button-div">

						<?php if( have_rows('cta') ): ?>
						<?php while( have_rows('cta') ): the_row();
						// vars
						$ctabl = get_sub_field('cta_button_text');
						$link = get_sub_field('link');
						$ctabl = get_sub_field('cta_button_link');
						$ctaex = get_sub_field('cta_external');
						?>
							<?php if( get_sub_field('link') == 'Internal' ): ?>
								<a class="orange-button" href="<?php echo the_sub_field('cta_button_link'); ?>"><?php echo the_sub_field('cta_button_text'); ?></a>
							<?php endif; ?>

							<?php if( get_sub_field('link') == 'External' ): ?>
								<a class="orange-button" href="<?php echo the_sub_field('cta_external'); ?>" target="_blank"><?php echo the_sub_field('cta_button_text'); ?></a>
							<?php endif; ?>

						<?php endwhile; ?>
						<?php endif; ?>

					</div>
					</div>
				</div>
			</div>


<?php get_footer(); ?>
