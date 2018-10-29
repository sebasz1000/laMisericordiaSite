<?php
/*
Plugin Name: Enqueuer plugin
Description: Enqueue all styles and scripts for theme
Author: Juan Sebastián Zapata
*/

function theme_resources(){
  wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/bootstrap-4.1.3-dist/css/bootstrap.min.css');
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
  wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js');
  wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/bootstrap-4.1.3-dist/js/bootstrap.min.js');
  wp_enqueue_script('custom-scripts', get_stylesheet_directory_uri() . '/js/custom-scripts.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'theme_resources');

// Get top ancestor
function get_top_ancestor_id(){
  global $post;
  if($post->post_parent){
   $ancestors = array_reverse(get_post_ancestors($post->ID));
   return $ancestors[0];
  }
  return $post->ID;
}

//Does page have children
function has_children(){
  
  global $post;
  
  $pages = get_pages('child_of=' . $post->ID);
  return count($pages); 
}

//Get previews page link

function get_previus_page_id(){
  global $post;
  if($post->post_parent > 0){
    return $post->post_parent;
  }
  return null;
}

// Get Page ID by slung name
// get_id_by_slug('any-page-slug');

function get_id_by_slug($page_slug) {
	$page = get_page_by_path($page_slug);
	if ($page) {
		return $page->ID;
	} 
    return null;
}

//theme setup
function theme_setup(){
  //Navigation Menus
  register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'hamburguer' => __('Botón Hamburguesa'),
    'general-footer' => __('Footer General Menu'),
    'info-footer' => __('Footer Info Menu'),
  ));
  //adds custom site logo
  add_theme_support('custom-logo');
  //Adds feature image support
  add_theme_support('post-thumbnails');
  add_image_size('small-thumbnail', 280, 220, true);
  
}

add_action('after_setup_theme', 'theme_setup');




