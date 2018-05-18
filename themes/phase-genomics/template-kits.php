<?php
/*
Template Name: Hi-C Kit Details
*/
?>

<?php get_header(); ?>
			

		<div class="header-bg" style="background: url('<?php echo get_field('background_image'); ?>');">
			<div class="row">
				<div class="large-10 medium-12 large-centered medium-centered columns">
					<div class="fullwidth-module">
						<div class="center-icon">
							<?php 

							$icon = get_field('icon');
							if( !empty($icon) ): ?>
								<img class="three-mod-icon" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt'] ?>" />
							<?php endif; ?>
						</div>
							<h2 class="bb-header"><?php echo get_field('header'); ?></h2>
							<p class="bb-sub"><?php echo get_field('sub_header'); ?></p>
					</div>
            	</div>
            </div>
   		 </div>

	<!-- SECTION 2 -->
		<div id="<?php echo get_field('section_id'); ?>">
			<div class="fullwidth-module" style="background: url('<?php echo get_field('overview_background'); ?>');">
				<div class="row">
					<div class="large-10 medium-10 large-centered medium-centered columns">
						<div class="center-icon">
							<?php 
	
							$icon_1 = get_field('icon_1');
							if( !empty($icon_1) ): ?>
							<img class="three-mod-icon" src="<?php echo $icon_1['url']; ?>" alt="<?php echo $icon_1['alt'] ?>" />
							<?php endif; ?>
						</div>
						<div class="large-12 medium-12 large-centered medium-centered columns">
							<div class="kit-cell medium-4 columns">
								<img src="<?php echo get_field('kit_image'); ?>" class="kit-cell"/>
							</div>
							<div class="kit-cell medium-8 columns" style="padding: 2rem;">
								<p><?php echo get_field('text_area'); ?></p>
							</div>
						</div>
					</div>
					<div class="medium-6 large-centered medium-centered columns">
						<p><?php echo get_field('text_area_2'); ?></p>
					</div>
				</div>	
			</div>
					<div class="fullwidth-module">
					<div class="large-10 medium-10 large-centered medium-centered columns">
						<p class="product-header"><?php echo get_field('subheading_2'); ?></p>
					</div>
						<div class="large-10 medium-12 large-centered medium-centered columns">
							<p class="interior-header"><?php echo get_field('human_heading'); ?></p>
							<div class="medium-3 columns">
								<img src="<?php echo get_field('human_icon'); ?>" style="padding: 0 2rem 3rem;"/>
							</div>
							<div class="kit-cell medium-9 columns">
								<p><?php echo get_field('human_text'); ?></p>
							</div>
						</div>
						<div class="large-10 medium-12 large-centered medium-centered columns">
							<p class="interior-header"><br/><?php echo get_field('plant_heading'); ?></p>
							<div class="medium-3 columns">
								<img src="<?php echo get_field('plant_icon'); ?>" style="padding: 0 2rem 3rem;" />
							</div>
							<div class="kit-cell medium-9 columns">
								<p><?php echo get_field('plant_text'); ?></p>
							</div>
						</div>
						<div class="large-10 medium-12 large-centered medium-centered columns">
							<p class="interior-header"><br/><?php echo get_field('animal_heading'); ?></p>
							<div class="medium-3 columns">
								<img src="<?php echo get_field('animal_icon'); ?>" style="padding: 0 2rem 3rem;" />
							</div>
							<div class="kit-cell medium-9 columns">
								<p><?php echo get_field('animal_text'); ?></p>
							</div>
						</div>
						<div class="large-10 medium-12 large-centered medium-centered columns">
							<p class="interior-header"><br/><?php echo get_field('microbe_heading'); ?></p>
							<div class="medium-3 columns">
								<img src="<?php echo get_field('microbe_icon'); ?>" style="padding: 0 2rem 3rem;" />
							</div>
							<div class="kit-cell medium-9 columns">
								<p><?php echo get_field('microbe_text'); ?></p>
							</div>
						</div>
					</div>
				</div>
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
