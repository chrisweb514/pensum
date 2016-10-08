<aside id="side-bar-nav" class="column medium-3">
  <ul>
    <?php
      $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
      $post_parent = $post->post_parent;
      if( $post_parent ):
    ?>
    <li><a href="<?php echo get_the_permalink( $post_parent ); ?>" class="parent-page icon-left-open"><?php echo get_the_title( $post_parent ); ?></a></li>
      <?php if($children): ?>
      <li><a href="<?php echo get_the_permalink(); ?>" class="current-page icon-left-open"><?php echo get_the_title(); ?></a></li>
      <?php endif; ?>
    <?php endif; ?>
    <?php
      $parent = get_pages('child_of='.$post->ID) ? $post->ID : $post->post_parent;
    ?>
    <?php echo (wp_list_pages(array('title_li' => 0, 'depth'=>2, 'exclude' => get_option('page_on_front') ,'walker' => new Clean_Walker(), 'sort_column' => 'menu_order', 'child_of' => $parent ))); ?>
  </ul>
</aside>
