<?php 
/**
** activation theme
**/
function wpb_adding_styles() {
    wp_enqueue_style('parent-theme', get_template_directory_uri() .'/style.css');

}
add_action('wp_enqueue_scripts', 'wpb_adding_styles');

function footer_widgets_init() {
 
    register_sidebar( array(
   
    'name' => 'Footer Widget Area',
    'id' => 'footer-widget-area',
    'before_widget' => '<div class="fwa-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="fwa-title">',
    'after_title' => '</h2>',
    ) );
   }
   
   add_action( 'widgets_init', 'footer_widgets_init' );
