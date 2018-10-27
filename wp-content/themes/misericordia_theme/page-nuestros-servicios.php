<?php
get_header();
?>
<div class="container-fluid blue">
 <div class="container" id='page-title'>
 
    <h1><ion-icon name="heart"></ion-icon><?php the_title();  ?></h1>
    <p><?php the_content(); ?></p>
 </div>
</div>
<main class="page container">
  <?php
  if(have_posts()) :
    while(have_posts()) : the_post(); ?>
  <article class="post">
    
    <?php 
     $pages = get_pages(array('child_of'=>$post->ID));
      if($pages){
        foreach($pages as $page){
    ?>
      <figure><?php echo get_the_post_thumbnail($page,'small-thumbnail'); ?></figure>
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
