<?php
/**
 * Template ProxiMeta Example.
 *
 * @package    Backup
 * @deprecated No longer used.
 */

get_header(); ?>

<?php // phpcs:disable ?>

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

		<!-- DESCRIPTION -->
		<div class="fullwidth-module" id="<?php echo get_field('section_id'); ?>" style="background: url('<?php echo get_field('background_1'); ?>');">
			<div class="row">
				<div class="large-10 medium-10 large-centered medium-centered columns">
					<p class="interior-header"><?php echo get_field('headline_1'); ?></p>
					<p><?php echo get_field('text_area_1'); ?></p>
				</div>
				<?php if( have_rows('description_cta') ): ?>
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~ CTA button ~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<div class="row">
						<div class="large-10 medium-12 large-centered medium-centered columns">
							<div class="button-div">
								<?php while( have_rows('description_cta') ): the_row();
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
							</div>
						</div>
					</div>
				<?php endif; // end of if description_cta logic ?>
			</div>
		</div>

		<!-- EXAMPLE -->
			<div class="fullwidth-tech-module">
				<p class="centered" style="margin: 0; padding: 0;"><?php echo get_field('report', false, false); ?></p>
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
