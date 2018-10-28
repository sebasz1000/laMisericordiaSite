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
 <article>
  <?php
  if(have_posts()) :
    while(have_posts()) : the_post(); ?>
  <section class="post-item">
  <div class="row">
  <figure class="col-12 col-md-5">
   <a href=<?php echo the_permalink(); ?> >
    <?php 
     if(!has_post_thumbnail()){
       $default_img_url = get_stylesheet_directory_uri() . '/static/'. strtolower($category_name) . '-default.png';
    ?>
    <img src=<?php echo $default_img_url; ?> />
    <?php 
     }else{  echo the_post_thumbnail();  }
    ?>
    </a>
  </figure>
  
  <div class="post-content col-12 col-md-7">
    <h2><a href=<?php the_permalink(); ?>><?php the_title(); ?></a></h2>
     <small>Publicado el <?php echo the_date('j F, Y'); ?></small>
     <small class="float-right">Ultima modificación: <?php echo the_modified_date('j F, Y'); ?></small>
    <p><?php  the_excerpt(); ?></p>
    <a class='btn btn-primary green float-right' href=<?php echo the_permalink(); ?> >Continuar leyendo <ion-icon name="arrow-forward"></ion-icon></a>
  </div>
  </section>
  </div>
  <?php
    endwhile;
  else : 
    echo '<p> There is not content to display </p>';
  endif;  
  ?>
  </article>
</main>
<?php
get_footer();
?>
