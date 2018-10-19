<?php
/*
Template Name:Plantilla de servicios
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
    
     <?php $post_parent_ID = $post->post_parent; ?>
     <?php if($post_parent_ID > 0){ 
           $post_parent = get_post($post_parent_ID);
    ?>
     <h3><a href=<?php echo get_permalink($post_parent_ID); ?>> ⬅ <?php echo $post_parent->post_title; ?></a></h3>
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
