<?php if(!is_front_page()): ?>
  <div id="nav-mobile" class="show-for-small-only">
    <ul class="unstyled row text-center collapse">
      <li class="column small-6">
        <a href="#" class="menu-toggle">Services <span class="icon icon-down-open-mini"></span></a>
        <div class="sub-nav-mobile">
          <ul class="unstyled">
            <?php foreach(collective::get_services(0, array('exclude'=> 45)) as $page): ?>
            <li><a href="<?php echo get_the_permalink($page->ID); ?>"><?php echo $page->post_title; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </li>
      <!-- <li class="column small-4"><a href="<?php echo get_the_permalink( 45 ); ?>" class="">Training</a></li> -->
      <li class="column small-6"><a href="<?php echo get_the_permalink( 36 ); ?>" class="">Contact</a></li>
    </ul>
  </div>
<?php else: ?>
  <div id="nav-mobile" class="show-for-small-only">
    <ul class="unstyled row text-center collapse">
      <li class="column small-6">
        <a href="#" class="menu-toggle">Services <span class="icon icon-down-open-mini"></span></a>
        <div class="sub-nav-mobile">
          <ul class="unstyled">
            <?php foreach(collective::get_services(0, array('exclude'=> 45)) as $page): ?>
            <li><a href="<?php echo get_the_permalink($page->ID); ?>"><?php echo $page->post_title; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </li>
      <li class="column small-6"><a href="<?php echo get_the_permalink( 36 ); ?>" class="">Contact</a></li>
    </ul>
  </div>
<?php endif; ?>
