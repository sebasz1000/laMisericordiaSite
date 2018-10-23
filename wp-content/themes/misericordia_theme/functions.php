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
