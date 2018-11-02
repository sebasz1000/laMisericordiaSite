<?php
get_header();
?>
<main class="page container">
 <article>
 <h1><ion-icon name="search"></ion-icon> Resultados de tu búsqueda para: <span class='search-query-text'><?php the_search_query(); ?></span></h1>
  <?php
  if(have_posts()) :
    while(have_posts()) : the_post(); ?>
  <section class="post-item ">
  <?php 
     if(has_post_thumbnail()) : ?>
  <figure class="post-item d-sm-block d-md-flex">
   <a href="<?php echo the_permalink(); ?>" >
    <?php  echo the_post_thumbnail(); ?>
    </a>
  </figure>
  <?php endif; ?>
  <div class="post-content">
     <h2><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
     <small>Publicado el <?php echo the_date('j F, Y'); ?></small>
     <small class="float-right">Ultima modificación: <?php echo the_modified_date('j F, Y'); ?></small>
     <p><?php  echo the_excerpt(); ?></p>
    <a class='btn btn-primary green float-right' href=<?php echo the_permalink(); ?> >Continuar leyendo <ion-icon name="arrow-forward"></ion-icon></a>
  </div>
  </section>
  <?php
    endwhile;
  else :  ?>
   <div class='row'></div>
   <div class="no-results">
     <ion-icon name="sad"></ion-icon>
     <h3 >No se encontraron resultados para esta busqueda</h3>
   </div>
   <?php 
  endif;  
  ?>
  </article>
</main>
<?php
get_footer();
?>
