			</div>  <!-- end .main-content -->
			<footer class="footer" role="contentinfo">
				<div class="container">
					<div id="inner-footer" class="grid-x">
						<div class="large-2 medium-4 cell">
							<?php
								$image = get_field('header_logo', 'option');
								if ( !empty( $image ) ): ?>
								<div class="mobile-logo-center">
									<a class="mobile-logo-cell" href="<?php echo home_url(); ?>"><img class="header-logo" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
								</div>
							<?php endif; ?>
						</div>
						<div class="large-9 large-offset-1 medium-8 cell">
							<nav role="navigation">
								<?php joints_footer_links(); ?>
							</nav>
							<div style="padding-left: .5rem;">
								<p class="source-org copyright">Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?><?php the_field('footer_info', 'option', false, false); ?> <a href="https://phasegenomics.com/terms-of-service/" style="font-size: .75rem; color: #466880; text-transform: uppercase;">Terms of Service</a></p>
							</div>
						</div>
					</div> <!-- end #inner-footer -->
				</div>
			</footer> <!-- end .footer -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->