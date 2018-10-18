<?php
get_header();
?>
<main class="page container">
  <?php
  if(have_posts()) :
    while(have_posts()) : the_post(); ?>
  <article class="post">
    <h1><?php the_title();  ?></h1>
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
<?php if(is_page('nuestros-servicios')){ ?>
      <p>Esto en nuestros servicios</p>
<?php } ?>