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
    'secondary' => __('Secondary Menu'),
    'hamburguer' => __('Botón Hamburguesa'),
    'general-footer' => __('Footer General Menu'),
    'info-footer' => __('Footer Info Menu'),
  ));
  //adds custom site logo
  add_theme_support('custom-logo');
  //Adds feature image support
  add_theme_support('post-thumbnails');
  add_image_size('small-thumbnail', 280, 220, true);
  //adds except function por pages
  add_post_type_support( 'page', 'excerpt' );

  
}

add_action('after_setup_theme', 'theme_setup');


//if subcategory template view is required look over this :
/*http://werdswords.com/force-sub-categories-use-the-parent-category-template/*/




/***********************************************************************
* @Author: Boutros AbiChedid 
* @Date:   February 14, 2011
* @Copyright: Boutros AbiChedid (http://bacsoftwareconsulting.com/)
* @Licence: Feel free to use it and modify it to your needs but keep the 
* Author's credit. This code is provided 'as is' without any warranties.
* @Function Name:  wp_bac_breadcrumb()
* @Version:  1.0 -- Tested up to WordPress version 3.1.2
* @Description: WordPress Breadcrumb navigation function. Adding a 
* breadcrumb trail to the theme without a plugin.
* This code does not support multi-page split numbering, attachments,
* custom post types and custom taxonomies.
from:http://bacsoftwareconsulting.com/blog/index.php/wordpress-cat/adding-wordpress-breadcrumbs-without-a-plugin/
***********************************************************************/
 
function wp_bac_breadcrumb() {   
    //Variable (symbol >> encoded) and can be styled separately.
    //Use >> for different level categories (parent >> child >> grandchild)
    $delimiter = '<span class="delimiter">  &raquo;  </span>'; 
    //Use bullets for same level categories ( parent . parent )
    $delimiter1 = '<span class="delimiter1"> / </span>';
     
    //text link for the 'Home' page
            $main = 'Inicio';  
    //Display only the first 30 characters of the post title.
            $maxLength= 30;
     
    //variable for archived year 
    $arc_year = get_the_time('Y'); 
    //variable for archived month 
    $arc_month = get_the_time('F'); 
    //variables for archived day number + full
    $arc_day = get_the_time('d');
    $arc_day_full = get_the_time('l');  
     
    //variable for the URL for the Year
    $url_year = get_year_link($arc_year);
    //variable for the URL for the Month    
    $url_month = get_month_link($arc_year,$arc_month);
 
    /*is_front_page(): If the front of the site is displayed, whether it is posts or a Page. This is true 
    when the main blog page is being displayed and the 'Settings > Reading ->Front page displays' 
    is set to "Your latest posts", or when 'Settings > Reading ->Front page displays' is set to 
    "A static page" and the "Front Page" value is the current Page being displayed. In this case 
    no need to add breadcrumb navigation. is_home() is a subset of is_front_page() */
     
    //Check if NOT the front page (whether your latest posts or a static page) is displayed. Then add breadcrumb trail.
    if (!is_front_page()) {         
        //If Breadcrump exists, wrap it up in a div container for styling. 
        //You need to define the breadcrumb class in CSS file.
        echo '<div class="breadcrumb">';
         
        //global WordPress variable $post. Needed to display multi-page navigations. 
        global $post, $cat;         
        //A safe way of getting values for a named option from the options database table. 
        $homeLink = get_option('home'); //same as: $homeLink = get_bloginfo('url');
        //If you don't like "You are here:", just remove it.
        echo '<a href="' . $homeLink . '">' . $main . '</a>' . $delimiter;    
         
        //Display breadcrumb for single post
        if (is_single()) { //check if any single post is being displayed.           
            //Returns an array of objects, one object for each category assigned to the post.
            //This code does not work well (wrong delimiters) if a single post is listed 
            //at the same time in a top category AND in a sub-category. But this is highly unlikely.
            $category = get_the_category();
            $num_cat = count($category); //counts the number of categories the post is listed in.
             
            //If you have a single post assigned to one category.
            //If you don't set a post to a category, WordPress will assign it a default category.
            if ($num_cat <=1)  //I put less or equal than 1 just in case the variable is not set (a catch all).
            {
                echo get_category_parents($category[0],  true,' ' . $delimiter . ' ');
                //Display the full post title.
                echo ' ' . get_the_title(); 
            }
            //then the post is listed in more than 1 category.  
            else { 
                //Put bullets between categories, since they are at the same level in the hierarchy.
                echo the_category( $delimiter1, ''); 
                    //Display partial post title, in order to save space.
                    if (strlen(get_the_title()) >= $maxLength) { //If the title is long, then don't display it all.
                        echo ' ' . $delimiter . trim(substr(get_the_title(), 0, $maxLength)) . ' ...';
                    }                         
                    else { //the title is short, display all post title.
                        echo ' ' . $delimiter . get_the_title(); 
                    } 
            }           
        } 
        //Display breadcrumb for category and sub-category archive
        elseif (is_category()) { //Check if Category archive page is being displayed.
            //returns the category title for the current page. 
            //If it is a subcategory, it will display the full path to the subcategory. 
            //Returns the parent categories of the current category with links separated by '»'
            echo 'Archive Category: "' . get_category_parents($cat, true,' ' . $delimiter . ' ') . '"' ;
        }       
        //Display breadcrumb for tag archive        
        elseif ( is_tag() ) { //Check if a Tag archive page is being displayed.
            //returns the current tag title for the current page. 
            echo 'Posts Tagged: "' . single_tag_title("", false) . '"';
        }        
        //Display breadcrumb for calendar (day, month, year) archive
        elseif ( is_day()) { //Check if the page is a date (day) based archive page.
            echo '<a href="' . $url_year . '">' . $arc_year . '</a> ' . $delimiter . ' ';
            echo '<a href="' . $url_month . '">' . $arc_month . '</a> ' . $delimiter . $arc_day . ' (' . $arc_day_full . ')';
        } 
        elseif ( is_month() ) {  //Check if the page is a date (month) based archive page.
            echo '<a href="' . $url_year . '">' . $arc_year . '</a> ' . $delimiter . $arc_month;
        } 
        elseif ( is_year() ) {  //Check if the page is a date (year) based archive page.
            echo $arc_year;
        }       
        //Display breadcrumb for search result page
        elseif ( is_search() ) {  //Check if search result page archive is being displayed. 
            echo 'Search Results for: "' . get_search_query() . '"';
        }       
        //Display breadcrumb for top-level pages (top-level menu)
        elseif ( is_page() && !$post->post_parent ) { //Check if this is a top Level page being displayed.
            echo get_the_title();
        }           
        //Display breadcrumb trail for multi-level subpages (multi-level submenus)
        elseif ( is_page() && $post->post_parent ) {  //Check if this is a subpage (submenu) being displayed.
            //get the ancestor of the current page/post_id, with the numeric ID 
            //of the current post as the argument. 
            //get_post_ancestors() returns an indexed array containing the list of all the parent categories.                
            $post_array = get_post_ancestors($post);
             
            //Sorts in descending order by key, since the array is from top category to bottom.
            krsort($post_array); 
             
            //Loop through every post id which we pass as an argument to the get_post() function. 
            //$post_ids contains a lot of info about the post, but we only need the title. 
            foreach($post_array as $key=>$postid){
                //returns the object $post_ids
                $post_ids = get_post($postid);
                //returns the name of the currently created objects 
                $title = $post_ids->post_title; 
                //Create the permalink of $post_ids
                echo '<a href="' . get_permalink($post_ids) . '">' . $title . '</a>' . $delimiter;
            }
            the_title(); //returns the title of the current page.               
        }           
        //Display breadcrumb for author archive   
        elseif ( is_author() ) {//Check if an Author archive page is being displayed.
            global $author;
            //returns the user's data, where it can be retrieved using member variables. 
            $user_info = get_userdata($author);
            echo  'Archived Article(s) by Author: ' . $user_info->display_name ;
        }       
        //Display breadcrumb for 404 Error 
        elseif ( is_404() ) {//checks if 404 error is being displayed 
            echo  'Error 404 - Not Found.';
        }       
        else {
            //All other cases that I missed. No Breadcrumb trail.
        }
       echo '</div>';     
    }   
}
