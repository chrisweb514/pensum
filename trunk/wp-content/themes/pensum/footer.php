								<!-- <div class="animate-scroll-block">
									<div class="animate-scroll-block-inner"> -->
										<footer class="footer gotham-font hide">
											<!-- full-width  -->
											<div class="row" data-equalizer>
												<div class="info-wr column small-6 medium-6">
													<div class="logo-wr left" data-equalizer-watch>
														<div class="row">
															<div class="column small-6 medium-6">
																<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/ui/logo-footer.png" alt="<?php echo get_bloginfo( 'name' ); ?>">
															</div>
														</div>
														<div class="show-for-small-only">
															<div class="copyright font-weight-300">© 2016 <?php echo get_bloginfo( 'name' ); ?><br>All rights reserved</div>
														</div>
													</div>
													<div class="left contact-details" data-equalizer-watch>

														<div class="vcenter show-for-medium">
															<div class="contact">
																<a href="mailto:info@pensum.co">info@pensum.co</a>  -   Tel: 345-777-5555
															</div>
															<div class="copyright font-weight-300">© 2016 <?php echo get_bloginfo( 'name' ); ?> All rights reserved</div>
														</div>

													</div>
												</div>
												<div class="column small-6 medium-6" data-equalizer-watch>
													<div class="vcenter">
														<nav id="footer-nav" class="underline-links small-text-right">
																<?php collective_footer_links(); ?>
																<div class="clearfix"></div>
														</nav>
														<?php get_template_part('parts/footer', 'credit'); ?>

													</div>
												</div>
										  </div>

										</footer> <!-- end .footer -->
									<!-- </div>
								</div> -->
							</div>
						</div> <!-- end .smooth -->
					</div> <!-- end .wrapper -->

				</div>  <!-- end .main-content -->
			</div> <!-- end .off-canvas-wrapper-inner -->
		</div> <!-- end .off-canvas-wrapper -->

		<?php //global $video_modal;
			if($GLOBALS['play-video']): ?>
		<div class="reveal small" id="modal-video" data-reveal>

			<div class="flex-video widescreen vimeo">
		  <!-- <iframe src="http://player.vimeo.com/video/60122989" width="400" height="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> -->
			<iframe id="myVideo" src="<?php echo $GLOBALS['play-video']; ?>?color=5ebebb&title=0&portrait=0&badge=0&byline=0" width="715" height="415" allowfullscreen></iframe>
		</div>


			<button class="close-button" data-close aria-label="Close modal" type="button">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>

		<?php endif; ?>

		<?php wp_footer(); ?>

	</body>
</html> <!-- end page -->
