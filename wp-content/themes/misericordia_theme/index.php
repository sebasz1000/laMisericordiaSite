<?php
get_header();
?>
<figure class='container-fluid' id="home-main-image">
    <img width='100%' src='https://designm.ag/wp-content/uploads/2016/06/victorian_damask_pattern_by_arsgrafik.png' />
  </figure>
<main class="page container">
  
  <article id='services'>
   <h2>Nuestros Servicios</h2>
   <br>
   <ul>
   <?php
     $top_page_ID = get_id_by_slug('nuestros-servicios');
     $pages = get_pages(array('child_of'=>$top_page_ID));
       if($pages != null){
        foreach($pages as $page){
    ?>
     <li>
       <a href=<?php echo get_permalink($page->ID); ?> >
          <h4><?php echo $page->post_title; ?></h4>
        </a>
      </li>   
    <?php      
        }}
    ?>
    </ul>
  </article>
</main>
<div class='maps' style='max-height:450px;'>
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2534.67896844873!2d-75.64209763526596!3d4.533065988117725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e38f466fee25c41%3A0x78d3e0fe87674c80!2sHospital+La+Misericordia+de+Calarca!5e0!3m2!1sen!2sco!4v1540326734458" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<?php
get_footer();
?>