<?php
get_header();
?>
<main class="page container">
  <?php
  if(have_posts()) :
    while(have_posts()) : the_post(); ?>
  <article class="post">
     <?php $post_parent_ID = $post->post_parent; ?>
     <?php if($post_parent_ID > 0){ 
           $post_parent = get_post($post_parent_ID);
    ?>
     <h3><a href=<?php echo get_permalink($post_parent_ID); ?>> ⬅ <?php echo $post_parent->post_title; ?></a></h3>
     <?php } ?>
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
