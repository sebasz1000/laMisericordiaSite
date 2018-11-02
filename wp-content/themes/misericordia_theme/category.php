<?php
/*
Template Name:Plantilla Listado
*/
get_header();
$cat_name = single_cat_title('',false);
switch($cat_name){
  case 'Novedades':
    $default_img =  get_stylesheet_directory_uri() . '/static/novedades-default.png';
    $icon = 'megaphone';
    $color = 'green';
    break;
  case 'Contrataciones':
    $default_img =  get_stylesheet_directory_uri() . '/static/contrataciones-default.png';
    $icon = 'people';
    $color = 'green';
    break;
  default:
    $default_img =  get_stylesheet_directory_uri() . '/static/informes-default.png';
    $icon = 'paper';
    $color = 'grey';
}

?>
<div class="container-fluid <?php echo $color; ?>">
 <div class="container" id='page-title'>
 
    <h1><ion-icon name="<?php echo $icon; ?>"></ion-icon><?php echo single_cat_title();  ?></h1>
    <p>Aquí encontrarás todo sobre <?php echo single_cat_title();  ?> de nuestro hospital</p>
 </div>
</div>
<main class="page container">
 <article>
      <div class="nav-previous  float-left"><?php previous_posts_link( '« Anterior' ); ?></div>
      <div class="nav-next  float-right"><?php next_posts_link( 'Siguiente »'  ); ?></div>
  <?php
  if(have_posts()) :
    while(have_posts()) : the_post(); ?>
  <section class="post-item row">
  <figure class="col-12 col-md-3">
   <a href=<?php echo the_permalink(); ?> >
    <?php if(!has_post_thumbnail($post)){ ?>
    <img src=<?php echo $default_img; ?> />
    <?php 
     }else{  echo the_post_thumbnail();  }
    ?>
    </a>
  </figure>
  
  <div class="post-content col-12 col-md-9">
   <?php 
    $status_color = '';
    $post_status = get_post_meta($post->ID, 'Estado', true);

    if($post_status != null){
      $status_color = (strtolower($post_status) == 'activo' ? 'active-post-status' : 'dead-post-status');
    }
    if($post_status != null) : ?>
    <span class='<?php echo $status_color; ?> post-status' >
    <?php echo strtoupper($post_status); ?>
    </span>
    <?php endif; ?>
     <h2><a href=<?php the_permalink(); ?>><?php the_title(); ?></a></h2>
     <small>Publicado el <?php echo the_date('j F, Y'); ?></small>
     <small class="float-right">Ultima modificación: <?php echo the_modified_date('j F, Y'); ?></small>
     <p><?php  the_excerpt(); ?></p>
    <a class='btn btn-primary <?php echo $color;?> float-right' href=<?php echo the_permalink(); ?> >Continuar leyendo <ion-icon name="arrow-forward"></ion-icon></a>
  </div>
  
  </section>
  <?php
    endwhile;
    ?>
      <div class="nav-previous  float-left"><?php previous_posts_link( '« Anterior' ); ?></div>
      <div class="nav-next  float-right"><?php next_posts_link( 'Siguiente »'  ); ?></div>
    <?php
  else : 
    echo '<p> There is not content to display </p>';
  endif;  
  ?>
  </article>
</main>
<?php
get_footer();
?>
