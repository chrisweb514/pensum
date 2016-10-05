<?php
  $services = collective::get_services($post->ID);
  foreach ($services as $i => $service):
    $push = $i % 2 == 0 ? '' : 'medium-push-7 large-push-6';
    $pull = $i % 2 == 0 ? '' : 'medium-pull-5 large-pull-6';
    // Check if has sub pages (child of child) to link to
    $link_sub_page = get_children( array('post_type' => 'services', 'post_parent' => $service->ID ) );
    $image = wp_get_attachment_url( array_shift(get_post_gallery_ids($service->ID,1)));
?>

<section id="<?php echo $service->post_name; ?>" class="product-overview gotham-font font-weight-300 animate-scroll-block" data-equalizer>
  <div class="row animate-scroll-block-inner">
    <div class="column medium-5 large-6 green-bg backstretch-image <?php echo $push; ?> show-for-medium" data-equalizer-watch
    data-bg-color="#000000"
    <?php $opacity = get_post_meta($service->ID,'image_opacity',true); ?>
    data-opacity="<?php echo $opacity ? $opacity : '.72'; ?>"
    data-transition="500"
    <?php if( $image ): ?>
    data-bg-image="<?php echo get_template_directory_uri() . '/timthumb.php?src=' . $image . '&w=' . 1000 . '&zc=1&q=90'; ?>"
    <?php endif; ?>
    ></div>
    <div class="column medium-7 large-6 <?php echo $pull; ?>" data-equalizer-watch>
      <div class="inner-box text-center">
        <h2>
          <?php echo $service->post_title; ?>
          <?php if( is_user_logged_in() ): ?>
						<a href="<?php echo get_edit_post_link($service->ID); ?>"><span class="icon-pencil"></span></a>
					<?php endif; ?>
        </h2>
        <?php echo apply_filters(‘the_content’, $service->post_content); ?>
        <?php if( $link_sub_page ): ?>
        <a href="<?php echo get_the_permalink($service->ID); ?>" class="learn-more under-line">Learn more →</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<?php endforeach; ?>
