<?php
get_header();

/* contextual settings  for special categories */
$post_header_color = '';
$status_color = '';
$post_status = get_post_meta($post->ID, 'Estado', true);
if(has_category('Novedades') OR has_category('Contrataciones')){
  $category_name = (has_category('Novedades') ? 'Novedades' : 'Contrataciones');
  $post_header_color = 'green-text';
}else{
  $category_name = null;
}
if($post_status != null){
  $status_color = (strtolower($post_status) == 'activo' ? 'active-post-status' : 'dead-post-status');
}

?>
<div class="container-fluid ligth-grey" id='breadcrumb'>
  <div class="container">
  <?php  if (function_exists('wp_bac_breadcrumb')) wp_bac_breadcrumb();  ?>
  </div>
</div> 
<main class="page container">
  <?php
  if(have_posts()) :
    while(have_posts()) : the_post(); ?>
  <article class="post">
   <div class="post-head row">
   <?php 
      if($category_name != null){
      ?>
      <div class='col-2 col-md-1'> 
      <ion-icon class=<?php echo $post_header_color; ?> name='people'></ion-icon>
      </div>
    <?php } ?>
    <div class="col-10 col-md-11" >
      <h1 class=<?php echo $post_header_color; ?>><?php the_title();  ?></h1>
      <small class='post-info'>Publicado en <?php the_time('F jS, Y'); ?></small>
      <?php
      if($post_status != null){
      ?>
      <span class='<?php echo $status_color; ?> float-right'><?php echo strtoupper($post_status); ?></span>
      <?php } ?>
    </div>
   </div>
   <figure >
    <?php if(has_post_thumbnail()) echo the_post_thumbnail(); ?>
  </figure>

    
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
