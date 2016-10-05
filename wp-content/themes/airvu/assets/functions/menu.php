<?php
// Register menus
register_nav_menus(
	array(
		'main-nav' => __( 'The Main Menu', 'collective' ),   // Main nav in header
		'secondary-nav' => __( 'Secondary Menu', 'collective' ),   // Main nav in header
		'footer-links' => __( 'Footer Links', 'collective' ) // Secondary nav in footer
	)
);

// The Top Menu
function collective_top_nav() {
	 wp_nav_menu(array(
        'container' => false,                           // Remove nav container
        'menu_class' => 'vertical medium-horizontal menu show-for-medium',       // Adding custom nav class
        'items_wrap' => '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown">%3$s</ul>',
        'theme_location' => 'main-nav',        			// Where it's located in the theme
        'depth' => 2,                                   // Limit the depth of the nav
        'fallback_cb' => false,                         // Fallback function (see below)
        'walker' => new Collective_Walker_Nav_Menu()
    ));
} /* End Top Menu */

// The Off Canvas Menu
function collective_off_canvas_nav() {
	 wp_nav_menu(array(
        'container' => false,                           // Remove nav container
        'menu_class' => 'vertical menu',       // Adding custom nav class
        'items_wrap' => '<ul id="%1$s" class="%2$s" data-accordion-menu>%3$s</ul>',
        'theme_location' => 'main-nav',        			// Where it's located in the theme
        'depth' => 5,                                   // Limit the depth of the nav
        'fallback_cb' => false,                         // Fallback function (see below)
        'walker' => new Off_Canvas_Menu_Walker()
    ));
} /* End Off Canvas Menu */

// The Footer Menu
function collective_footer_links() {
    wp_nav_menu(array(
    	'container' => 'false',                              // Remove nav container
    	'menu' => __( 'Footer Links', 'collective' ),   	// Nav name
    	'menu_class' => 'menu right',      					// Adding custom nav class
    	'theme_location' => 'footer-links',             // Where it's located in the theme
      'depth' => 0,                                   // Limit the depth of the nav
    	'fallback_cb' => '',  							// Fallback function
      'walker' => new Off_Canvas_Menu_Walker()
	));
} /* End Footer Menu */

// Header Fallback Menu
function collective_main_nav_fallback() {
	wp_page_menu( array(
		'show_home' => true,
    	'menu_class' => '',      // Adding custom nav class
		'include'     => '',
		'exclude'     => '',
		'echo'        => true,
        'link_before' => '',                            // Before each link
        'link_after' => ''                             // After each link
	) );
}

// Footer Fallback Menu
function collective_footer_links_fallback() {
	/* You can put a default here if you like */
}
