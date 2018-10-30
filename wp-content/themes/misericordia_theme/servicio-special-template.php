<?php
/*
Template Name:Plantilla Post de servicio
*/
get_header();
?>
<div class="container-fluid light-blue">
 <div class="container servicio" id='page-title'>
  <div class="row">
    <?php 
      if(get_previus_page_id() != null){
        $post_parent = get_post(get_previus_page_id());
    ?>
     <h5>
      <a href=<?php echo get_permalink($post_parent->ID); ?>>
       <ion-icon name='arrow-round-back'></ion-icon> <?php echo $post_parent->post_title; ?>
      </a>
     </h5>
     <?php } ?>
  </div>
  <div class="row">
   <div class="d-md-block d-md-block d-lg-flex col-s-12 col-md-9">
    <figure><?php echo the_post_thumbnail(); ?></figure>
    <h1><?php the_title();  ?></h1>
   </div>
   <div class="d-none d-md-block col-md-3 ">
          <?php if( has_children()  OR $post->post_parent > 0 ){ ?>
   <nav id="services-menu" class="clear-list-style">
    <ul>
      <?php 
          $args = array(
            'child_of' => get_top_ancestor_id(),
            'title_li' => ''
          );
          wp_list_pages($args); 
      ?>
     </ul>
    </nav>
    <?php } ?>
   </div>
  </div>
   
 </div>
</div>
<main class="page container">
  <?php
  if(have_posts()) :
    while(have_posts()) : the_post(); ?>
  <article class="post">
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
