<?php
  $services = collective::get_services($post->ID);
  if(count($services)):
?>
<section id="service-menu" class="white large-padding gotham-font font-weight-300 show-for-medium">
  <div class="row">
    <div class="column text-center medium-11 large-7 medium-centered">
      <?php if( get_post_meta($post->ID,'sub_title', true) ): ?>
      <h3 class="service-title"><?php echo get_post_meta($post->ID,'sub_title', true); ?></h3>
      <?php endif; ?>
    </div>
  </div>
  <div class="row text-center">
    <ul class="unstyled services-menu" data-equalizer>
      <?php foreach ($services as $service): ?>
      <li><a href="#<?php echo $service->post_name; ?>" class="round scroll-to" data-equalizer-watch><span class="vcenter"><?php echo $service->post_title; ?></span></a></li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
<?php endif; ?>
