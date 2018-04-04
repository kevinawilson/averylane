					<footer class="footer" role="contentinfo">
						<div id="inner-footer" class="row">
							<div class="small-6 small-centered medium-2 medium-offset-1 medium-uncentered footer-padding large-offset-1 column">
                                <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" /></a>
							</div>
                            <div class="medium-5 hide-for-small-only footer-padding column">
                                <div class="row">
                                    <div class="medium-3 medium-offset-1 column">
                                        <h3><?php echo get_option( 'al_footer_header_1' ); ?></h3>
                                        <?php wp_nav_menu( ['menu' => 'Services'] ); ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/naatp.png" />
                                    </div>
                                    <div class="medium-3 column">
                                        <h3><?php echo get_option( 'al_footer_header_2' ); ?></h3>
                                        <?php wp_nav_menu( ['menu' => 'Involved'] ); ?>
                                    </div>
                                    <div class="medium-5 column end footer-address">
                                        <h3>Address</h3>
                                        <p>Avery Lane</p>
                                        <p><?php echo get_option( 'al_street_address' ); ?></p>
                                        <p><?php echo get_option( 'al_city_state_zip' ); ?></p>
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
                                    </div>
                                </div>
                            </div>
                            <div class="medium-4 footer-map column">
                                <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCzbTNVpLQTU3i8ew_9n0jck0GpA7D6PRo&q=place_id:ChIJGb64bKC7hYAReGjvyYiW0wE" allowfullscreen>
                                </iframe>
                            </div>
						</div> <!-- end #inner-footer -->
					</footer> <!-- end .footer -->
				</div>  <!-- end .main-content -->
			</div> <!-- end .off-canvas-wrapper-inner -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->
