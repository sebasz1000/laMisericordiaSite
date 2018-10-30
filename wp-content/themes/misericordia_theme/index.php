<?php
get_header();
?>
<figure class='container-fluid' id="home-main-image">
    <img width='100%' src=<?php echo get_template_directory_uri() . '/static/front-page-img.jpeg' ?> />
</figure>
  <div class="container-fluid color-row">
    <div class="row high">
       <div class="col-5 blue"></div>
       <div class="col-4 green"></div>
       <div class="col-3 pink"></div>
    </div>
  </div>
<main class="page container" id='home-page-content'>
  
  <article id='services'>
   <a href=<?php echo get_permalink(get_page_by_path('nuestros-servicios')); ?>><h2 class="align-center blue-text"><ion-icon name="heart"></ion-icon> Nuestros Servicios</h2></a>
   <br>
   <ul class="container">
   <?php
     $top_page_ID = get_id_by_slug('nuestros-servicios');
     $pages = get_pages(array('child_of'=>$top_page_ID));
       if($pages != null){
        foreach($pages as $page){
    ?>
     <li class="row">
       <a href=<?php echo get_permalink($page->ID); ?> >
        <figure><?php echo get_the_post_thumbnail($page); ?> </figure>
        <h4><?php echo $page->post_title; ?></h4>
        </a>
      </li>   
    <?php      
        }}
    ?>
    </ul>
  </article>
</main>
<div class='maps'>
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2534.67896844873!2d-75.64209763526596!3d4.533065988117725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e38f466fee25c41%3A0x78d3e0fe87674c80!2sHospital+La+Misericordia+de+Calarca!5e0!3m2!1sen!2sco!4v1540326734458" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<?php
get_footer();
?>