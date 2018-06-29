					<footer class="footer new-footer row" role="contentinfo">
						<div class="column small-10 small-centered">
							<div id="inner-footer" class="row">
								<div class="medium-4 columns footer-left">
									<?php wp_nav_menu( ['menu' => 'Footer'] ); ?>
								</div>
								<div class="medium-4 columns footer-center">
									<ul id="social-icons">
										<?php if (get_option( 'al_twitter' ) ) {
													echo '<li><a class="twitter" href="' . get_option( 'al_twitter' ) . '"></a></li>';
											}
											if (get_option( 'al_linkedin' ) ) {
													echo '<li><a class="linkedin" href="' . get_option( 'al_linkedin' ) . '"></a></li>';
											}
											if (get_option( 'al_google' ) ) {
													echo '<li><a class="google" href="' . get_option( 'al_google' ) . '"></a></li>';
											}
											if (get_option( 'al_facebook' ) ) {
													echo '<li><a class="facebook" href="' . get_option( 'al_facebook' ) . '"></a></li>';
											} ?>
									</ul>
									<div class="footer-address">
										<div>Avery Lane</div>
										<div>
											<?php echo get_option( 'al_street_address' ); ?>
										</div>
										<div>
											<?php echo get_option( 'al_phone' ); ?>
										</div>
									</div>
									<div class="">
										© 2018 AVERY LANE
									</div>
								</div>
								<div class="medium-4 columns footer-right">
									<div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/GoldSeal.png" /></div>
									<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt='Avery Lane logo small'/></a>
								</div>
							</div>
						</div>
						<!-- end #inner-footer -->
					</footer>
				</div>  <!-- end .main-content -->
			</div> <!-- end .off-canvas-wrapper-inner -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->
