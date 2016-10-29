<?php

  // Show only for border patrol
  if($post->ID == '66'): ?>
    <section class="padding">
      <div id="drone-infographic" class="row">
        <div class="column small-centered small-10 medium-9 large-9">
          <div class="row">
            <div class="column small-3">
              <div class="row">
                <div class="column medium-10 text-right">
                  <span class="feature-wr">
                    <span class="icon right">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/ui/check.png" alt="">
                    </span>
                    <span class="clearfix"></span>
                    <span class="info-wr">
                      <span class="title">Endurance</span>
                      <span class="subtitle font-weight-300">10+ hour flights</span>
                    </span>
                  </span>
                </div>
              </div>
            </div>
            <div class="column small-6">
              <div class="row">
                <div class="column medium-10 medium-centered text-center">
                  <span class="feature-wr middle">
                    <span class="icon center">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/ui/check.png" alt="">
                    </span>
                    <span class="info-wr">
                      <span class="title">Fast situational coverage</span>
                      <span class="subtitle font-weight-300">Speed 50 - 100mph</span>
                    </span>
                  </span>
                </div>
              </div>
            </div>
            <div class="column small-3">
              <div class="row">
                <div class="column right">
                  <span class="feature-wr">
                    <span class="icon left">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/ui/check.png" alt="">
                    </span>
                    <span class="clearfix"></span>
                    <span class="info-wr">
                      <span class="title">Eye in the sky</span>
                      <span class="subtitle font-weight-300">HD & Thermal IR Video feed</span>
                    </span>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="row infographics">
            <div class="column small-centered small-9">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/drone.png" alt="">
            </div>
          </div>
          <div class="row bottom-benefits">
            <div class="column small-6">
              <div class="row">
                <div class="column medium-10 text-right">
                  <span class="feature-wr">
                    <span class="icon right">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/ui/check.png" alt="">
                    </span>
                    <span class="clearfix"></span>
                    <span class="info-wr">
                      <span class="title">Long-range reconnaissance</span>
                      <span class="subtitle font-weight-300">Range of 100 miles</span>
                    </span>
                  </span>
                </div>
              </div>
            </div>
            <div class="column small-6">
              <div class="row">
                <div class="column medium-10 right">
                  <span class="feature-wr">
                    <span class="icon left">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/ui/check.png" alt="">
                    </span>
                    <span class="clearfix"></span>
                    <span class="info-wr">
                      <span class="title">Distributed live imaging</span>
                      <span class="subtitle font-weight-300">View live video feed from anywhere</span>
                    </span>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php endif; ?>
