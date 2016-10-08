<?php $benefits = collective::get_benefits($post->ID); ?>
<?php if( $benefits ): ?>
  <section class="padding white">
    <div class="row text-center benefits-wr">
      <div class="column medium-12 medium-centered">
        <div class="row row medium-up-<?php echo count( $benefits ); ?>" data-equalizer>
          <?php foreach( $benefits as $benefit ): ?>
          <div class="column medium-6 benefit-item">
            <div class="row">
              <div class="column medium-9 medium-centered font-weight-300">
                <div class="icon-wr">
                  <span class="<?php echo $benefit['icon']?>">
                    <?php echo $benefit['svg']; ?>
                  </span>
                </div>
                <!-- <div data-equalizer-watch>
                  <div class="vcenter"> -->
                    <h3 ><?php echo $benefit['title']; ?></h3>
                  <!-- </div>
                </div> -->
                <span class="desc"><?php echo $benefit['desc']; ?></span>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
