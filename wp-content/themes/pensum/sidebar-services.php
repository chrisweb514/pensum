<aside class="sidebar-nav-wr column medium-4" data-equalizer-watch>

  <div class="row">
    <div class="column medium-9 right">
      <h3 class="font-weight-700">Related Services</h3>
      <div class="row">
        <div class="column medium-6">
          <hr class="border_hr">
        </div>
      </div>
      <ul class="unstyled underline-links white">
        <?php
          $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0&post_type=services");
          $post_parent = $post->post_parent;
          if( $post_parent ):
        ?>
        <li><a href="<?php echo get_the_permalink( $post_parent ); ?>" class="parent-page icon-left-open"><?php echo get_the_title( $post_parent ); ?></a></li>
          <?php if($children && !get_post_meta($post->ID, 'wpcf-on-this-page-active', true)): ?>
          <li><a href="<?php echo get_the_permalink(); ?>" class="current-page icon-left-open"><?php echo get_the_title(); ?></a></li>
          <?php endif; ?>
        <?php endif; ?>
        <?php
          $parent = get_pages('child_of='.$post->ID) ? $post->ID : $post->post_parent;
        ?>
        <?php
          echo (wp_list_pages(array('post_type'=>'services','title_li' => 0, 'depth'=>1, 'sort_column' => 'menu_order', 'child_of' => $post->post_parent )));
        ?>
      </ul>
    </div>
  </div>

</aside>
