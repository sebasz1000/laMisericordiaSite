<?php
get_header();
?>
<main class="page container">
  <?php
  if(have_posts()) :
    while(have_posts()) : the_post(); ?>
  <article class="post">
    <h1><?php the_title();  ?></h1>
    <p><?php the_content() ?></p>
    <ul>
      <?php 
          $pages = get_pages(array('child_of' => $post->ID));
          if($pages != null){
            foreach($pages as $page){
        ?>
        <h3><a href=<?php echo get_permalink($page->ID); ?>><?php echo $page->post_title; ?></a></h3>
        <span>Publicado el <?php echo date('j F, Y',strtotime($page->post_date)); ?></span><br>
        <span>Modificado el <?php echo date('j F, Y',strtotime($page->post_modified)); ?></span>
      <?php
            }
          }
      ?>
    </ul>
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




<?php 
          $args = array(
            'child_of' => get_top_ancestor_id(),
            'title_li' => '',
            'show_date' => 'modified',
            'link_after' => '<p>Modificado en </p>'
          );
          wp_list_pages($args); 
      ?>