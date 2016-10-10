<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="animate-scroll-block">

		<main id="main" class="animate-scroll-block-inner" data-equalizer>

			<?php get_sidebar('services'); ?>

			<div class="column medium-8">
				<div class="row">
					<div class="column medium-11 medium-centered">
						<div class="main-inner-content " data-equalizer-watch>
							<!-- <h1><?php echo get_the_title(); ?></h1> -->
							<?php
								while ( have_posts() ) : the_post();
									wpautop(the_content());
								endwhile;
							?>

							<div class="row white-bg quick-ressources">
								<?php for($i=1; $i<=3; $i++): ?>
								<div class="column medium-4">
									<div class="title-wr">
										<h3>Due Diligence</h3>
									</div>
									<div class="desc">Representative persons are required to conduct the same due diligence as for a company client.</div>
									<a href="#">Read more ></a>
								</div>
								<?php endfor; ?>
							</div>

						</div>
					</div>
				</div>
			</div>

		</main> <!-- end #main -->

		<div class="visible-for-small-only small-12 text-center animate-scroll-block-inner">

			<div class="book-demo-cta cta-end-mobile show-for-small-only">
				<a href="<?php get_the_permalink( 169 ); ?>" class="button">Get in touch</a>
				<div class="clearfix"></div>
			</div>

		</div>

	</div> <!-- end #inner-content -->


</div> <!-- end #content -->
<?php get_footer(); ?>
