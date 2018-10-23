<?php
/*
Template Name:Plantilla Listado
*/
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
    <p><?php the_content() ?></p>
    <?php 
     $pages = get_pages(array('parent'=>$post->ID));
      if($pages){
        foreach($pages as $page){
    ?>
      <section><h3><a href=<?php echo get_permalink($page->ID); ?>><?php echo $page->post_title; ?></a></h3></section>
    <?php } ?>
    <?php } ?>
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
<?php if(is_page('nuestros-servicios')){ ?>
      <p>Esto en nuestros servicios</p>
<?php } ?>