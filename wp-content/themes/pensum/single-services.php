<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="animate-scroll-block">

		<main id="main" class="animate-scroll-block-inner">

			<?php get_template_part('parts/content','benefits'); ?>
			<?php get_template_part('parts/content', 'infographic'); ?>
			<?php get_template_part('parts/content-service','banner'); ?>
			<?php get_template_part('parts/nav','services'); ?>
			<?php get_template_part('parts/content-service'); ?>

		</main> <!-- end #main -->

		<div class="visible-for-small-only small-12 text-center animate-scroll-block-inner">

			<div class="book-demo-cta cta-end-mobile show-for-small-only">
				<a href="<?php get_the_permalink( 169 ); ?>" class="button">Book a Demo</a>
				<div class="clearfix"></div>
			</div>

		</div>

	</div> <!-- end #inner-content -->


</div> <!-- end #content -->
<?php get_footer(); ?>
