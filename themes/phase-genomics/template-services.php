<?php
/*
Template Name: Services
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
		<div class="fullwidth-module" id="<?php echo get_field('section_id_2'); ?>" style="background: url('<?php echo get_field('background_2'); ?>');">
			<div class="row">
				<div class="large-10 medium-10 large-centered medium-centered columns">
					<div class="center-icon">
						<?php 

						$icon_2 = get_field('icon_2');
						if( !empty($icon_2) ): ?>
						<img class="three-mod-icon" src="<?php echo $icon_2['url']; ?>" alt="<?php echo $icon_2['alt'] ?>" />
						<?php endif; ?>
					</div>
					<p class="interior-header"><?php echo get_field('headline_2'); ?></p>
					<p><?php echo get_field('text_area_2'); ?></p>
					<table class="product-table transparent-table"><tbody class="transparent-table">
					<tr class="transparent-table">
					<td class="product-cell transparent-cell" width="50%">
						<p class="product-header"><?php echo get_field('left_product_header_2'); ?></p>
						<p><?php echo get_field('left_description_2'); ?></p>
					</td>
					<td class="product-cell transparent-cell" width="50%">
						<p class="product-header"><?php echo get_field('right_product_header_2'); ?></p>
						<p><?php echo get_field('right_description_2'); ?></p>
					</td>
					</tr>
					</tbody></table>
				</div>
				<?php if( have_rows('product_cta_2') ): ?>
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~ CTA button ~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<div class="row">
						<div class="large-10 medium-12 large-centered medium-centered columns">
							<div class="button-div">
								<?php while( have_rows('product_cta_2') ): the_row(); 
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
				<?php endif; // end of if product_cta_2 logic ?>
			</div>
		</div>
		
		<!-- SECTION 1 -->
		<div class="fullwidth-module" id="<?php echo get_field('section_id'); ?>" style="background: url('<?php echo get_field('background_1'); ?>');">
			<div class="row">
				<div class="large-10 medium-10 large-centered medium-centered columns">
					<div class="center-icon">
						<?php 

						$icon_1 = get_field('icon_1');
						if( !empty($icon_1) ): ?>
						<img class="three-mod-icon" src="<?php echo $icon_1['url']; ?>" alt="<?php echo $icon_1['alt'] ?>" />
						<?php endif; ?>
					</div>
					<p class="interior-header"><?php echo get_field('headline_1'); ?></p>
					<p><?php echo get_field('text_area_1'); ?></p>
					<table class="product-table transparent-table"><tbody class="transparent-table">
					<tr class="transparent-table">
					<td class="product-cell transparent-cell" width="50%">
						<p class="product-header"><?php echo get_field('left_product_header_1'); ?></p>
						<p><?php echo get_field('left_product_description_1'); ?></p>
					</td>
					<td class="product-cell transparent-cell" width="50%">
						<p class="product-header"><?php echo get_field('right_product_header_1'); ?></p>
						<p><?php echo get_field('right_product_description_1'); ?></p>
					</td>
					</tr>
					</tbody></table>
				</div>
				<?php if( have_rows('product_cta_1') ): ?>
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~ CTA button ~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<div class="row">
						<div class="large-10 medium-12 large-centered medium-centered columns">
							<div class="button-div">
								<?php while( have_rows('product_cta_1') ): the_row(); 
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
				<?php endif; // end of if product_cta_1 logic ?>
			</div>
		</div>

		<!-- SECTION 3 -->
			<div class="fullwidth-module">       
				<div class="row">
					<div class="large-9 medium-10 large-centered medium-centered columns">
						<p class="section-header"><?php echo get_field('section_header'); ?></p>
						<p class="centered"><?php echo get_field('section_sub_header', false, false); ?></p>
					</div>
				<!-- TESTIMONIAL QUOTE -->
					<div class="row">
						<div class="large-10 medium-12 large-centered medium-centered columns">
							<div class="interior-quote-container">
								<p class="quote w400 oblique centered"><?php echo get_field('quote'); ?></p>
								<p class="small-p centered"><?php echo get_field('source'); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		
		<!-- SECTION 4 -->
			<div class="fullwidth-module" style="background-color: #e8f4fc;">
				<div class="row">
					<div class="large-6 medium-10 large-centered medium-centered columns">
						<p class="interior-header"><?php echo get_field('headline_4'); ?></p>
						<p><?php echo get_field('text_area_4'); ?></p>
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
