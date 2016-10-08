<?php

get_header(); ?>

<div id="content">

	<div id="inner-content" class="animate-scroll-block">

		<main id="main"  class="animate-scroll-block-inner">

			<section id="job-overview" class="padding">
				<div class="row">
					<div class="column">
						<div class="row job-description-block">
							<div class="column medium-3 text-right">
								<h2 class="font-weight-300">Position</h2>
							</div>
							<div class="column medium-9 font-weight-300">
								<div class="row">
									<div class="column medium-11 right">
										<?php echo get_post_meta($post->ID, 'job_position', true); ?>
									</div>
								</div>
							</div>
						</div>

						<?php $job_tasks =  get_post_meta($post->ID, 'job_tasks', true); ?>
						<?php if( $job_tasks ): ?>

						<div class="row job-description-block">
							<div class="column medium-3 text-right">
								<h2 class="font-weight-300">Tasks</h2>
							</div>
							<div class="column medium-9 font-weight-300">
								<div class="row">
									<div class="column medium-11 right">
										<ul>
											<?php foreach ($job_tasks as $job_tasks_item): ?>
											<li><span><?php echo $job_tasks_item; ?></span></li>
											<?php endforeach; ?>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<?php endif; ?>

						<?php $job_profile =  get_post_meta($post->ID, 'job_profile', true); ?>
						<?php if( $job_profile ): ?>

						<div class="row job-description-block">
							<div class="column medium-3 text-right">
								<h2 class="font-weight-300">Your Profile</h2>
							</div>
							<div class="column medium-9 font-weight-300">
								<div class="row">
									<div class="column medium-11 right">
										<ul>
											<?php foreach ($job_profile as $job_profile_item): ?>
											<li>
												<span><?php echo $job_profile_item; ?></span>
											</li>
											<?php endforeach; ?>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<?php endif; ?>

						<div class="row job-description-block">
							<div class="column medium-3 text-right">
								<h2 class="font-weight-300">We Offer</h2>
							</div>
							<div class="column medium-9 font-weight-300">
								<div class="row">
									<div class="column medium-11 right">
										<?php echo get_post_meta($post->ID, 'job_we_offer', true); ?>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>

		</main> <!-- end #main -->

	</div> <!-- end #inner-content -->


</div> <!-- end #content -->
<?php get_footer(); ?>
