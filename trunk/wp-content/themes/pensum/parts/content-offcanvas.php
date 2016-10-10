<div class="off-canvas position-right underline-links white" id="offCanvasRight" data-off-canvas data-position="right">

 <!-- Close button -->
 <button class="close-button" aria-label="Close menu" type="button" data-close>
	 <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/ui/close.png" alt="" />
 </button>

 <?php echo wp_nav_menu( array('theme_location' => 'secondary-nav','items_wrap'  => '<ul id="%1$s" class="%2$s vertical">%3$s</ul>')); ?>

 <div class="company-info">
   <div class="info">
     Pensum<br>
     Cayman Business Park A7<br>
     George Town<br> <!-- KY1-1001 -->
     Grand Cayman, Cayman Islands
   </div>
   <div class="contact-info">
     <div class="info">
       <a href="mailto:info@pensum.co">info@pensum.co</a>
       <a href="tel:1345-938-6565">Tel: 345-938-6565</a>
     </div>
   </div>
 </div>

 <!-- <a href="https://www.linkedin.com/company/3268818" target="_blank">LinkedIn</a> -->

</div>
