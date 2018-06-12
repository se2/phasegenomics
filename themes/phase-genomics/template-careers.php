<?php
/*
Template Name: Careers
*/
?>

<?php get_header(); ?>


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

	<!-- SECTION 1 -->
		<div class="fullwidth-module" style="background: url('<?php echo get_field('background_1'); ?>');">
			<div class="row">
				<div class="large-6 medium-10 large-centered medium-centered columns">
					<div class="center-icon">
						<?php

						$icon_1 = get_field('icon_1');
						if( !empty($icon_1) ): ?>
							<img class="three-mod-icon" src="<?php echo $icon_1['url']; ?>" alt="<?php echo $icon_1['alt'] ?>" />
						<?php endif; ?>
					</div>
					<p class="interior-header"><?php echo get_field('headline_1'); ?></p>
				</div>
			</div>
			<div class="row">
				<div class="large-8 medium-10 large-centered medium-centered columns">
					<p><?php echo get_field('intro_text_1'); ?></p>
				</div>
			</div>
		</div>

	<!-- POSTINGS -->
		<div class="fullwidth-tech-module">
		<div class="large-centered medium-centered columns no-padding">
				<?php if( have_rows('postings') ):
					$rowCount = 0; ?>
					<?php while( have_rows('postings') ): the_row();
					// vars
					$job_background_image = get_sub_field('job_background_image');
					$job_title = get_sub_field('job_title');
					$job_summary = get_sub_field('job_summary');
					$job_description = get_sub_field('job_description');
					$job_responsibilities = get_sub_field('job_responsibilities');
					$job_requirements = get_sub_field('job_requirements');
					?>
					<?php if( $job_background_image != "" ): ?>
					<div class="fullwidth-module" style="background: url('<?php echo $job_background_image ?>');">
					<?php else: ?>
					<div class="fullwidth-module white-background">
					<?php endif; ?>
						<div class="row">
							<div class="large-8 medium-10 large-centered medium-centered columns">
								<h2 class="job-header"><a href="mailto:careers@phasegenomics.com?subject=<?php echo $job_title; ?>"><?php echo $job_title; ?></a></h2>
							</div>
						</div>
						<div class="row">
							<div class="large-8 medium-10 large-centered medium-centered columns">
								<p><?php echo $job_summary; ?></p>
							</div>
						</div>
						<div class="row">
							<div class="large-8 medium-10 large-centered medium-centered columns">
								<h2 class="job-subheader">Position</h2>
							</div>
						</div>
						<div class="row">
							<div class="large-8 medium-10 large-centered medium-centered columns">
								<p><?php echo $job_description; ?></p>
							</div>
						</div>
						<div class="row">
							<div class="large-8 medium-10 large-centered medium-centered columns">
								<h2 class="job-subheader">Responsibilities</h2>
							</div>
						</div>
						<div class="row">
							<div class="large-8 medium-10 large-centered medium-centered columns">
								<p><?php echo $job_responsibilities; ?></p>
							</div>
						</div>
						<div class="row">
							<div class="large-8 medium-10 large-centered medium-centered columns">
								<h2 class="job-subheader">Requirements</h2>
							</div>
						</div>
						<div class="row">
							<div class="large-8 medium-10 large-centered medium-centered columns">
								<p><?php echo $job_requirements; ?></p>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			<?php else: ?>
			<div class="fullwidth-module grey-background">
				<div class="row">
					<div class="large-8 medium-10 large-centered medium-centered columns">
						<p>
						We have no active job postings at this time. Check back later, or
						<a href="https://twitter.com/intent/follow?screen_name=phasegenomics">follow us on Twitter</a>
						to see when we have a new job posting.
						</p>
					</div>
				</div>
			</div>
			<?php endif; ?>
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
