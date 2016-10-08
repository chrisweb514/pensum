<?php

get_header(); ?>

	<div id="content">


		<div id="inner-content" class="row">

		  <main id="main" class="large-12 medium-12 columns" role="main">
				<section id="main-wr" class="small-padding">
					<div class="row">
						<div class="column">
							<?php
							// Start the loop.
							while ( have_posts() ) : the_post();
								wpautop(the_content());
							endwhile;
							?>
						</div>
					</div>
				</section>
			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->

<?php get_footer(); ?>
