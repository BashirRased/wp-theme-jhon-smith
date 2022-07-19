<?php
/**
 * The template for sidebar widgets.
 *
 * The template loading under functions.php.
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.0
 */

// widget register
function rb_portfolio_two_widget_area(){
	register_sidebar(array(
		'name' 			=> __('Add Widget Area Name', 'rb-portfolio-two'),
		'description' 	=> __('Add Widget Area Description', 'rb-portfolio-two'),
		'id' 			=> 'rb-portfolio-two-sidebar-right',
        'before_sidebar'=> '<aside id="rb-portfolio-two-secondary" class="rb-portfolio-two-widget-area col-lg-4">',
		'after_sidebar' => '</aside>',
		'before_widget' => '<div id="rb-portfolio-two-widget-%1$s" class="rb-portfolio-two-widget-item">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h2 class="rb-portfolio-two-widget-item-title">',
		'after_title' 	=> '</h2>',
        'class'  => ''
	)); 
    
}
add_action('widgets_init', 'rb_portfolio_two_widget_area');