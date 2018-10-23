<?php
get_header();
?>
<main class="page container">
  <?php
  if(have_posts()) :
    while(have_posts()) : the_post(); ?>
  <article class="post">
   <?php 
    $args = array('show_browse' => false, 'show_title' => false, 
                  'labels' => array( 'home' => esc_html__('','') ));
    if ( function_exists( 'breadcrumb_trail' ) ) breadcrumb_trail($args); ?>
    <h1><?php the_title();  ?></h1>
     <span class='post-info'>Publicado en <?php the_time('F jS, Y'); ?></span>
    <p><?php the_content() ?></p>
  </article>
  <?php
    endwhile;
  else : 
    echo '<p> There is not content to display </p>';
  endif;  
  ?>
</main>
<?php
get_footer();
?>
