<?php
/*
Template Name:Plantilla Post de servicio
*/
get_header();
?>
<main class="page container">
  <?php
  if(have_posts()) :
    while(have_posts()) : the_post(); ?>
  <article class="post">
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
    
    <?php 
      if(get_previus_page_id() != null){
        $post_parent = get_post(get_previus_page_id());
    ?>
     <h3>
      <a href=<?php echo get_permalink($post_parent->ID); ?>>
       ⬅ <?php echo $post_parent->post_title; ?>
      </a>
     </h3>
     <?php } ?>
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
