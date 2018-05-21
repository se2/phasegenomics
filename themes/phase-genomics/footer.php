<?php
	/**
	 * Main Footer
	 *
	 * @category   Components
	 * @package    WordPress
	 * @subpackage Phase Genomics
	 * @author     Delin Design <contact@delindesign.com>
	 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
	 * @link       https://delindesign.com
	 */

?>
			</div>  <!-- end .main-content -->
			<footer class="footer" role="contentinfo">
				<div class="container">
					<div id="inner-footer">
						<div class="grid-x">
							<div class="large-5 medium-10 small-12 cell">
								<nav role="navigation">
									<?php joints_footer_links(); ?>
								</nav>
							</div>
							<div class="cell medium-2 large-1 large-offset-6 text-right">
								<a href="https://twitter.com/phasegenomics" class="icon-menu" target="_blank">
									<i class="step fi-social-twitter"></i>
								</a>
								<a href="https://www.linkedin.com/company/phase-genomics-inc/" class="icon-menu">
								<i class="step fi-social-linkedin"></i>
								</a>
							</div>
						</div>
						<div class="grid-x">
							<div class="cell">
								<p class="source-org copyright">
									Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?><?php the_field( 'footer_info', 'option', false, false ); ?> <a href="/terms-of-service/">Terms of Service</a>
								</p>
							</div>
						</div>
					</div> <!-- end #inner-footer -->
				</div>
			</footer> <!-- end .footer -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->
