<?php
/*
Template Name: Technology
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
   		 	
   		 	

			   <!-- MAIN TECHNOLOGY PAGE MODULE -->
		<?php if( have_rows('content_container') ): ?>
			<?php while( have_rows('content_container') ): the_row(); ?>
				<?php 
					$linking_id = get_sub_field('linking_id');
					$section_background = get_sub_field('section_background');
					$main_content = get_sub_field('main_content'); 
				?>
				<div class="fullwidth-tech-module" id="<?php echo $linking_id; ?>" style="background: url('<?php echo $section_background; ?>');">

					<?php if( have_rows('main_content') ): ?>
						<?php while( have_rows('main_content') ): the_row(); ?>

								<?php 
									$content_type = get_sub_field('content_type'); 
									$intro_text = get_sub_field('introductory_text', false, false);
									$section_icon = get_sub_field('section_icon'); 
									$section_headline = get_sub_field('section_headline');
									$one_col_img = get_sub_field('one_column_image'); 
									$right_text = get_sub_field('right_text', false, false);
									$one_col_img_right = get_sub_field('one_column_image_right');
									$left_text = get_sub_field('left_text', false, false);
									$top_spacing = get_sub_field('top_spacing'); 
									$full_width = get_sub_field('full_width_image');
									$full_width_text = get_sub_field('full_width_text', false, false); 
								?>
									<!-- ~~~~~~~~~~~~~~~~~~~~~~~~ Section ICON ~~~~~~~~~~~~~~~~~~~~~~~~ -->
									<?php if( get_sub_field('content_type') == 'Section Headline with Icon' ): ?>
											<div class="row">
												<div class="large-10 medium-10 large-centered medium-centered columns">
													<div class="center-icon">
														<img class="three-mod-icon" src="<?php echo $section_icon['url']; ?>" alt="<?php echo $section_icon['alt'] ?>" />
													</div>
													<p class="interior-header"><?php echo $section_headline; ?></p>
												</div>
											</div>
									<?php endif; // end of if field_name logic ?>


									<?php if( get_sub_field('content_type') == 'Introductory Text' ): ?>
									<!-- ~~~~~~~~~~~~~~~~~~~~~~~~ INTRODUCTION ~~~~~~~~~~~~~~~~~~~~~~~~ -->
											<div class="row">
												<div class="large-10 medium-10 large-centered medium-centered small-12 columns">
													<p class="intro-text"><?php echo $intro_text; ?></p>
												</div>
											</div>
									<?php endif; // end of if field_name logic ?>


									<?php if ($content_type == 'Two Column Graphic and Text' ): ?>
									<!-- ~~~~~~~~~~~~~~~~~~~~~~~~ 2 column ~~~~~~~~~~~~~~~~~~~~~~~~ -->
											<div class="row">
												<div class="large-6 medium-6 small-12 columns">
													<img class="margin-spacing" src="<?php echo $one_col_img; ?>" />
												</div>
												<div class="large-6 medium-6 small-12 columns end">
													<p class="<?php echo $top_spacing; ?> large-text"><?php echo $right_text; ?></p>
												</div>
											</div>
									<?php endif; // end of if field_name logic ?>
									
									<?php if ($content_type == 'Left Text Right Graphic' ): ?>
									<!-- ~~~~~~~~~~~~~~~~~~~~~~~~ 2 column ~~~~~~~~~~~~~~~~~~~~~~~~ -->
											<div class="row">
												<div class="large-6 medium-6 small-12 columns end">
													<p class="large-text"><?php echo $left_text; ?></p>
												</div>
												<div class="large-6 medium-6 small-12 columns">
													<img class="margin-spacing" src="<?php echo $one_col_img_right; ?>" />
												</div>
											</div>
									<?php endif; // end of if field_name logic ?>
									
												
									<?php if( get_sub_field('content_type') == 'Full width Image' ): ?>
									<!-- ~~~~~~~~~~~~~~~~~~~~~~~~Image~~~~~~~~~~~~~~~~~~~~~~~~ -->
												<div class="row">
													<div class="large-12 large-centered columns">
														<div class="centered-image">
															<img class="fullwidth-center" src="<?php echo $full_width; ?>" />
														</div>
													</div>
												</div>
										<?php else: // field_name returned false ?>
									<?php endif; ?>			
									
							<?php if( get_sub_field('content_type') == 'Full width text' ): ?>
									<!-- ~~~~~~~~~~~~~~~~~~~~~~~~Full width WYSIWYG~~~~~~~~~~~~~~~~~~~~~~~~ -->
									<div class="row">
										<div class="large-10 large-centered medium-10 medium-centered small-12 columns">
											<p class="<?php echo $top_spacing; ?> large-text"><?php echo $full_width_text; ?></p>
										</div>
									</div>
								<?php else: // field_name returned false ?>
							<?php endif; ?>

							<?php if( have_rows('section_cta') ): ?>
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~ CTA button ~~~~~~~~~~~~~~~~~~~~~~~~ -->
								<div class="row">
									<div class="large-10 medium-12 large-centered medium-centered columns">
										<div class="button-div">
											<?php while( have_rows('section_cta') ): the_row(); 
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
						<?php endif; // end of if section_cta logic ?>
						<br/>

						<?php endwhile; ?>
					<?php endif; ?>
					
				</div>
				<?php endwhile; ?>
			<?php endif; ?>

			
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
