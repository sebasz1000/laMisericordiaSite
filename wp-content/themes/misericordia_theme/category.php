<?php
/*
Template Name:Plantilla Listado
*/
get_header();
?>
<main class="page container">
  <?php 
  $category_name = (is_category('novedades') ? 'Novedades' : 'Contrataciones'); ?>
  <h2><?php echo $category_name ?></h2>
  <p>Aquí van todas las <?php echo $category_name ?> del hospital</p>
  <?php
  if(have_posts()) :
    while(have_posts()) : the_post(); ?>
  <article class="post">
    <h3><a href=<?php the_permalink(); ?>><?php the_title(); ?></a></h3>
     <span>Publicado el <?php echo the_date('j F, Y'); ?></span><br>
     <span>Modificado el <?php echo the_modified_date('j F, Y'); ?></span>
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
