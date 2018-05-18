				<footer class="footer" role="contentinfo">
					<div id="inner-footer" class="row">

						<div class="large-2 large-offset-2 medium-4 columns" style="padding: 0 .75rem;">
							<?php
								$image = get_field('header_logo', 'option');

								if( !empty($image) ): ?>
								<div class="mobile-logo-center">
									<a class="mobile-logo-cell" href="<?php echo home_url(); ?>"><img class="header-logo" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
								</div>

							<?php endif; ?>
						
						</div>
						
						<div class="large-7 large-offset-1 medium-8 columns">
							<nav role="navigation">
								<?php joints_footer_links(); ?>
							</nav>
							<div style="padding-left: .5rem;">
								<p class="source-org copyright">Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?><?php the_field('footer_info', 'option', false, false); ?> <a href="https://phasegenomics.com/terms-of-service/" style="font-size: .75rem; color: #466880; text-transform: uppercase;">Terms of Service</a></p>
							</div>
						</div>
					</div> <!-- end #inner-footer -->
				</footer> <!-- end .footer -->
			</div>  <!-- end .main-content -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->