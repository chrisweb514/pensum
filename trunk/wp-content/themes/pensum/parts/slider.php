<?php

	$slides = collective::get_hero_banner($post);

	if( get_post_type() == 'careers' ){

		$slides = collective::get_hero_banner( get_post( 35 ) );

		if( is_single() ){

			$slides[0]['title'] = get_the_title();

			$subtitle[] = get_post_meta($post->ID, 'job_type', true);
			$subtitle[] = get_post_meta($post->ID, 'job_expertise', true);
			$subtitle[] = get_post_meta($post->ID, 'job_location', true);

			$subtitle = strip_tags(implode('&nbsp;&bull;&nbsp;', array_filter( $subtitle ) ));
			$slides[0]['subtitle'] = $subtitle;

		}

	}

	foreach($slides as $slide):

	?>
		<!-- <div class="animate-scroll-block">
			<div class="animate-scroll-block-inner"> -->
		<?php
			if( is_front_page() ):

			?>
			<div class="header-slider-wr" style="position: relative;">
				<div class="backstretch-image" data-bg-color="#000" data-opacity=".72" data-transition="500" data-bg-image="<?php echo $slide['image']; ?>">

					<div class="slide-content-wr" data-equalizer>

							<div class="column medium-6">
								<div class="row">

									<div class="column hero" data-equalizer-watch>

										<div class="hero-content-wr vcenter">

											<div class="row">
												<div class="column right medium-10">
													<div class="main-quote-wr">
														<!-- <span class="quote-title"><?php echo $slide['title']; ?></span> -->
														<h1 id="intro-animation-text">
															<span class="">We provide international maritime and financial services that are fast, friendly and efficient.</span>
															<!-- <span class="first"></span> -->
														</h1>


		            				<!-- <span id="typed" style="white-space:pre;"></span> -->
													</div>

													<div class="call-to-action-wr">
														<a href="#" class="button outline white">View our benefits <span class="icon-down-open-mini"></span></a>
													</div>
												</div>
											</div>

										</div>

					        </div>

								</div>
							</div>

							<div class="column medium-5 right" style="background: rgba(0,0,0,.1);" data-equalizer-watch>
								<div class="slide-content-right">
									<div class="vcenter">

										<div class="quote-form">
											<div class="row">
												<div class="column medium-8 medium-centered medium-pull-1">
													<h2>Our Fees</h2>
													See our competitive pricing in 3 easy steps.
													<div class="quote-form-inner">

														<div class="title-wr">Select Service:
															<span class="step right"></span>
														</div>

														<select name="service" id="">
															<option value="service1">Vessel Registration</option>
														</select>

														<a href="#" class="button red full-width">Next</a>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>

				  </div>


				  <div class="slide-gradient"></div>
					<div class="scroll_mobile show-for-small-only">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/ui/svg/scroll_mobile.svg" alt="<?php bloginfo('name'); ?>" />
					</div>
				</div>

				<div class="arrow-bottom show-for-medium">
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/ui/arrow-down.png" alt="">
					</a>
				</div>

			</div>

			<?php else: ?>
			<div class="header-slider-wr" style="position: relative;">
				<div id="background-video" class="backstretch-image"
					data-video-id=""
					data-bg-color="#000"
					data-opacity="<?php echo ($slide['opacity'] ? $slide['opacity'] : '.58'); ?>"
					data-transition="500"
					data-bg-image="<?php echo $slide['image']; ?>"
					<?php if($slide['video']): ?>
					data-vide-bg="<?php echo $slide['video']; ?>"
					data-vide-options="posterType: 'jpg', bgColor: #000, loop: true, muted: false, position: 0% 0%"
					<?php endif; ?>
				>

					<div class="slide-content-wr vcenter row" data-equalizer>

							<div class="column medium-10 medium-centered large-11">
								<div class="row">

									<div class="column hero" data-equalizer-watch>

										<div class="hero-content-wr vcenter">

											<div class="text-center">
												<h1><?php echo $slide['title']; ?></h1>
												<?php if( $slide['subtitle'] ): ?>
												<div class="row">
													<div class="column medium-11 large-7=8 medium-centered">
														<?php if( get_post_meta( $slide['ID'], 'wpcf-sub-title-border', true ) ): ?>
															<div class="row" data-equalizer>
																<div class="column large-9 large-centered">
																	<div class="row">
																		<div class="column medium-4" >
																			<hr class="border_hr">
																		</div>
																		<div class="column medium-4">
																			<div class="subtitle gotham-font" >
																				<div style="margin-top: 5px;">
																					<?php echo $slide['subtitle']; ?>
																				</div>
																			</div>
																		</div>
																		<div class="column medium-4" >
																			<hr class="border_hr ">
																		</div>
																	</div>
																</div>
															</div>
														<?php else:  ?>
															<div class="subtitle gotham-font"><?php echo $slide['subtitle']; ?></div>
														<?php endif; ?>
													</div>
												</div>
												<?php endif; ?>

												<?php if( $slide['play-video'] ):
													$GLOBALS['play-video'] = $slide['play-video'];
												?>
												<div id="play-video" class="play-video-wr video-modal-btn" data-open="modal-video">
													<span>
														<span class="icon icon-play-circled">
															<!-- <span>Play Video</span> -->
														</span>
													</span>
												</div>
												<?php endif; ?>
											</div>

										</div>

					        </div>

								</div>
							</div>

				  </div>

				  <div class="slide-gradient"></div>

				</div>
				<div class="arrow-bottom show-for-medium">
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/ui/arrow-down.png" alt="">
					</a>
				</div>
			</div>
			<?php endif;?>
		<!-- </div>
	</div> -->
	<?php endforeach; ?>
