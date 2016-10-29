<section id="main-services" class="padding white">
  <!--  small-up-2 medium-up-3 -->
  <div class="row ">
    <?php foreach(collective::get_services() as $i => $page):
      // Temporaty 2 col  grid
      $colwidth = 'small-6';
      //$colwidth = $i < 2 ? 'small-6' : 'small-6 medium-4';
    ?>
    <div class="column <?php echo $colwidth; ?>">
      <div class="animate-scroll-block">
        <div class="animate-scroll-block-inner">
          <a class="service-wr" href="<?php echo get_the_permalink($page->ID); ?>">
            <div class="image-wr">
              <?php $image = wp_get_attachment_url( get_post_meta($page->ID, 'preview_image', true) ); ?>
              <img src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=" data-interchange="[<?php echo get_template_directory_uri() . '/timthumb.php?src='. $image .'&w='. 350 .'&h='. 350 .'&zc=1&q=90'; ?>, small], [<?php echo get_template_directory_uri() . '/timthumb.php?src='. $image .'&w='. 500 .'&h='. 500 .'&zc=1&q=90'; ?>, medium], [<?php echo get_template_directory_uri() . '/timthumb.php?src='. $image .'&w='. 750 .'&h='. 750 .'&zc=1&q=90'; ?>, large]" alt="<?php echo get_the_title($page->ID); ?>">
            </div>
            <div class="content">
              <div class="inner">
                <h2><?php echo get_the_title($page->ID); ?></h2>
                <div class="desc"><?php echo get_post_meta($page->ID, 'short_description', true); ?></div>
                <span class="learn-more under-line">Learn more →</span>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
  </div>
</section>
