<?php
get_header();
?>
<main class="page container">
  <article>
    <img width='100%' src='https://designm.ag/wp-content/uploads/2016/06/victorian_damask_pattern_by_arsgrafik.png' />
  </article>
  <article id='services'>
   <h2>Nuestros Servicios</h2>
   <ul>
   <?php
     $top_page_ID = get_id_by_slug('nuestros-servicios');
     $pages = get_pages(array('child_of'=>$top_page_ID));
       if($pages != null){
        foreach($pages as $post){
    ?>
     <li>
       <a href=<?php echo get_permalink($post->ID); ?> >
          <h4><?php echo $post->post_title; ?></h4>
        </a>
      </li>   
    <?php      
        }}
    ?>
    </ul>
  </article>
  <article id='maps'>
    <img width='100%' src='http://geoawesomeness.com/wp-content/uploads/2017/10/maps-broadcom.png' />
  </article>
</main>
<?php
get_footer();
?>