<?php
/*
Plugin Name: Enqueuer plugin
Description: Enqueue all styles and scripts for theme
Author: Juan Sebastián Zapata
*/


function theme_resources(){
  wp_enqueue_style('style', get_stylesheet_uri()); 
}

add_action('wp_enqueue_scripts', 'theme_resources');

//Navigation Menus
register_nav_menus(array(
  'primary' => __('Primary Menu'),
  'general-footer' => __('Footer General Menu'),
  'info-footer' => __('Footer Info Menu'),
));