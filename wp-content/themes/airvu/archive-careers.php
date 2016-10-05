<?php
/*
	Template Name: Careers Listing
*/
get_header(); ?>

<div id="content">

	<div id="inner-content" class="animate-scroll-block">

		<main id="main"  class="animate-scroll-block-inner">
			<?php //get_template_part('parts/content-service'); ?>
			<section class="padding">
				<div class="row">
					<div class="column medium-centered medium-9 large-7">
						<div class="image-banner row" data-equalizer="">
							<div class="column text-center">

								<div class="row">
									<div class="column">
										<div class="more-info font-weight-300 text-center">
											<p>In order to change the future of flight, we seek gifted, ambitious, energized individuals always aiming for higher objectives.</p>
											<p>Our team's strength resides in a diversified spectrum of skills, including software development, aeronautics, flight operations, business development and much more.</p>
										</div>
									</div>
								</div>

							</div>

						</div>
					</div>
				</div>
			</section>

			<?php $all_jobs = collective::get_jobs(); ?>

			<section class="padding" style="padding-top: 0;">
				<div class="row">
					<div class="column">
						<?php if(!$all_jobs): ?>
							<div class="row">
								<div class="column medium-centered medium-9 large-7 text-center">
									<h2 class="font-weight-300">Currently no open positions</h2>
									Contact us to apply <a href="mailto:info@airvu.co">info@airvu.co</a> with your resume and desired position.
								</div>
							</div>

						<?php else: ?>
							<div class="row">
								<div class="column medium-10 large-9 medium-centered">
									<ul class="unstyled job-listing">
										<?php foreach($all_jobs as $job): ?>
										<li class="row" style="margin: 0; padding: 0;">
											<a href="<?php echo get_the_permalink( $job->ID ); ?>" class="" data-equalizer>
												<div class="column small-8 medium-5 large-4" data-equalizer-watch>
													<div class="vcenter">
														<span class="title font-weight-700"><?php echo get_the_title( $job->ID );?></span>
													</div>
												</div>
												<div class="column small-4 medium-7 large-8 text-right" data-equalizer-watch>
													<div class="vcenter">
														<span class="info-wr font-weight-300 show-for-medium">
															<span><?php echo get_post_meta($job->ID, 'job_type', true); ?></span>
															<span><?php echo get_post_meta($job->ID, 'job_expertise', true); ?></span>
															<span><?php echo get_post_meta($job->ID, 'job_location', true); ?></span>
														</span>
														<span class="view-more text-center">View Job</span>
													</div>
												</div>
												<div class="clearfix"></div>
											</a>
										</li>
									<?php endforeach; ?>
									</ul>
								</div>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</section>

		</main> <!-- end #main -->

	</div> <!-- end #inner-content -->


</div> <!-- end #content -->
<?php get_footer(); ?>
