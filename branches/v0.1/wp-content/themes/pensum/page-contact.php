<?php
/*
	Template Name: Contact
*/
get_header(); ?>

<div id="content">

	<div id="inner-content" class="animate-scroll-block">

		<main id="main" class="animate-scroll-block-inner">

			<div class="row full-width" data-equalizer data-equalize-on="medium">

				<div class="column medium-7 medium-push-5">
					<section id="contact-form" class="padding large-padding" data-equalizer-watch>
						<div class="row medium-uncollapse">
							<div class="column medium-centered medium-11 font-weight-300">
								<h2>Get in Touch</h2>
								<p>We'd love to hear from you wether you have questions regarding the installation, integration, technical data or pricing.</p>
								<p>You are interested in ?</p>

								<form id="contact_form" data-abide novalidate>

									<div data-abide-error class="alert callout" style="display: none;">
								    <p><i class="icon-attention"></i> There are some errors in your form.</p>
								  </div>

									<fieldset class="row">
										<div class="column large-3">
											<input id="checkbox1" name="contact-type-call-back" type="checkbox"><label for="checkbox1">Call Back</label>
										</div>
										<div class="column large-3">
											<input id="checkbox2" name="contact-type-presentation" type="checkbox"><label for="checkbox2">Presentation</label>
										</div>
										<div class="column large-3">
											<input id="checkbox3" name="contact-type-Info-" type="checkbox"><label for="checkbox3">Info</label>
										</div>
										<div class="column large-3">
											<input id="checkbox4" name="contact-type-quote" type="checkbox"><label for="checkbox4">Quote</label>
										</div>
										<input type="hidden" name="_subject" value="Website Contact Form">
									</fieldset>

								  <div class="row">
								  	<div class="column medium-9">
											<label>Name
										    <input name="user_name" id="user_name" type="text" placeholder="" required>
												<span class="form-error">
								          Please enter your name
								        </span>
										  </label>
											<div class="row">
												<div class="column medium-7">
													<label>Email
														<input name="user_email" id="user_email" type="text" placeholder="" required>
														<span class="form-error">
										          Please enter a valid email
										        </span>
													</label>
												</div>
												<div class="column medium-5">
													<label>Phone
														<input name="user_phone" id="user_phone" type="text" placeholder="" required>
														<span class="form-error">
										          Please enter a valid phone number
										        </span>
													</label>
												</div>
											</div>
											<label>Message
												<textarea name="user_message" id="user_email" rows="3" required></textarea>
												<span class="form-error">
								          Please enter your message
								        </span>
											</label>
								  	</div>
								  </div>

								  <div class="input-group">
										<div id="contact_confirmation" class="callout success hide">
											<h5>Thank you!</h5>
											<p>We've received your message and will be in touch shortly.</p>
										</div>
								    <button class="left button" type="submit" value="Submit" style="border-radius: 999px;" >Send Message</button>
										<span class="left confidential">We treat your data confidentially.</span>
								  </div>
								</form>

							</div>
						</div>
					</section>
				</div>

				<div class="column medium-5 medium-pull-7">
					<div class="row">
						<div class="map-view-wr backstretch-image" data-bg-image="<?php echo get_template_directory_uri(); ?>/assets/dist/images/map.jpg" style="height: 400px;" data-equalizer-watch>
							<div class="vcenter">
								<div class="row">
									<div class="infobox column small-centered small-11 medium-8 large-5">
										<div class="row">
											<div class="column small-centered small-11 text-center">
												<h3>Pensum</h3>
												<div class="info-wr">
													<span class="subtitle">Headquarters</span>
													<!-- <span>P.O. Box 10055</span> -->
													<!-- <span>Grand Cayman KY1-1001</span> -->
													<span style="margin-bottom:10px;">Cayman Business Park A7</span>
													<span><a href="mailto:info@pensum.pro.co">info@pensum.pro</a></span>
													<span><a href="tel:13459386565">Tel: 1 345-938-6565</a></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</main> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->
<?php get_footer(); ?>
