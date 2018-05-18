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
		
	<!-- SECTION 1 HEADING -->
	<div class="fullwidth-module" style="background: url('<?php echo get_field('background_4'); ?>');">
		<div class="row">
			<div class="medium-10 large-centered medium-centered columns">
				<p><?php echo get_field('blog_body'); ?></p>
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
