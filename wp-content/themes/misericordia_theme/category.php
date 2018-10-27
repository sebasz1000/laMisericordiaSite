<?php
/*
Template Name:Plantilla Listado
*/
get_header();
$category_name = (is_category('novedades') ? 'Novedades' : 'Contrataciones');
?>
<div class="container-fluid green">
 <div class="container" id='page-title'>
 
    <h1><ion-icon name=<?php echo is_category('novedades') ? 'megaphone' : 'people'; ?>></ion-icon><?php echo $category_name; ?></h1>
    <p>Aquí encontrarás toda las <?php echo $category_name ?> de nuestro hospital</p>
 </div>
</div>
<main class="page container">
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
