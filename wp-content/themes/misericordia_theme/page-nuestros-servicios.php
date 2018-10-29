<?php
get_header();
?>
<div class="container-fluid blue">
 <div class="container" id='page-title'>
 
    <h1><ion-icon name="heart"></ion-icon><?php the_title();  ?></h1>
    <p><?php the_content(); ?></p>
 </div>
</div>
<main class="page container" id='servicios-template'>
  <?php
  if(have_posts()) :
    while(have_posts()) : the_post(); ?>
  <article >
    
    <?php 
     $pages = get_pages(array('child_of'=>$post->ID));
      if($pages){
        foreach($pages as $page){
    ?>
    <div class="row"></div>
    <section class='d-sm-block d-md-flex flex-row'>
      <figure>
      <a href=<?php echo get_permalink($page->ID); ?>>
      <?php echo get_the_post_thumbnail($page,'small-thumbnail'); ?>
      </a>
      </figure>
      <div class="text">
       <h2>
       <a href=<?php echo get_permalink($page->ID); ?>><?php echo $page->post_title; ?></a>
       </h2>
       <?php if(has_excerpt($page->ID)) : ?> <p><?php echo get_the_excerpt($page->ID); ?></p><?php endif; ?>
      <a class="float-right btn btn-warning" href=<?php echo get_permalink($page->ID); ?>><ion-icon name="arrow-round-forward"></ion-icon> </a>
     </div>
    </section>
    <?php }} ?>
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
