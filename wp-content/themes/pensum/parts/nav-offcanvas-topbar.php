<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->

<div id="top-bar-menu" class="top-bar" role="navigation">

	<div class="row">
		<div class="column">
			<div class="row inner">
				<div class="column small-12 small-centered medium-12">
					<div id="logo-wr">
	          <ul class="menu top-bar-left float-left">
	  					<li class="menu-text">
	  						<a href="<?php echo home_url(); ?>" class="block">
	  							<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/ui/logo-white.png" alt="<?php bloginfo('name'); ?>" class="centered default">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/ui/logo.png" alt="<?php bloginfo('name'); ?>" class="centered color">
	  						</a>
	  					</li>
	  				</ul>
					</div>
					<?php if(false): ?>
						<?php if( is_front_page() ): ?>
						<div class="mobile-contact-details show-for-small-only text-right">
							<a href="mailto:">info@airvu.co</a>
							<a href="tel:1345-938-6565">Tel: 345-938-6565</a>
						</div>
						<?php else: ?>
							<div class="mobile-contact-details left show-for-small-only text-left">
								<a href="mailto:">info@airvu.co</a>
								<a href="tel:1345-938-6565">345-938-6565</a>
							</div>
						<div class="book-demo-cta show-for-small-only">
							<a href="<?php echo get_the_permalink( 169 ); ?>" class="button right">Book a Demo</a>
							<div class="clearfix"></div>
						</div>
						<?php endif; ?>
					<?php endif; ?>

	        <div id="main-navigation" class="top-bar-right show-for-medium">
	          <div class="column" style="position: relative; padding: 0;">
	            <?php collective_top_nav(); ?>
							<?php if( !is_front_page() ): ?>
							<div class="book-demo-cta left show-for-large">
								<a href="<?php echo get_the_permalink( 169 ); ?>" class="button right">Get in touch</a>
								<div class="clearfix"></div>
							</div>
							<?php endif; ?>
							<div class="title-bar-right show-for-medium">
								<button data-open="offCanvasRight">
									<span class="icon-menu"></span>
								</button>
						  </div>
							<?php if(false): ?>
							<div class="title-bar-right show-for-medium">
								<button data-open="offCanvasRight">
									<span class="icon-menu"></span>
								</button>
						  </div>
							<?php endif; ?>
	          </div>
	        </div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>

	<?php get_template_part('parts/nav', 'mobile'); ?>

</div>
