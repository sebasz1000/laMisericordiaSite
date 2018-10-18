<?php
get_header();
?>
<main class="page container">
  <?php
  if(have_posts()) :
    while(have_posts()) : the_post(); ?>
  <article class="post">
  <?php if( has_children()  OR $post->post_parent > 0 ){ ?>
   <nav class="breadcrumb">
    <span class="parent-link"><a href=<?php echo  get_permalink(get_top_ancestor_id()) ?>><?php echo get_the_title(get_top_ancestor_id())?></a></span>
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