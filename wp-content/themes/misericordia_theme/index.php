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
<main class="page container-fluid" id='home-page-content'>
  <article id='novedades' class="container">
   <a href=<?php echo get_category_link(get_cat_ID('novedades')); ?>><h2 class="align-center blue-text"><ion-icon name="megaphone"></ion-icon> Novedades</h2></a>
   <br>
  
   <?php
     $posts = get_posts(array(
       'numberposts'=> 1,
       'category' => get_cat_ID('novedades')
     ));

       if($posts != null){
        foreach($posts as $post){
    ?>
     <section class="post-item row">
      <figure class="col-12 col-md-5">
       <?php if(has_post_thumbnail($post)) : ?>
        <a href=<?php echo get_permalink($post->ID); ?> >
            <?php echo get_the_post_thumbnail($post); ?> 
        </a>
        <?php else: ?>
        <a href=<?php echo get_permalink($post->ID); ?> >
        <img src=<?php echo get_stylesheet_directory_uri() . '/static/novedades-default.png'; ?> />
        </a>
       <?php endif; ?>
      </figure>
      <div class="post-content col-12 col-md-7"> 
       <div class="row"></div>
        <div class="row"></div>
         <div class="row"></div>      
       <a href=<?php echo get_permalink($post->ID); ?> ><h3><?php echo $post->post_title; ?></h3></a>
       <div class="row"></div>
        <p><?php 
          if(has_excerpt($post->ID)){
            echo $post->post_excerpt; 
          }else{
            echo $post->post_content;
          }?>
        </p>
         <a class='btn btn-primary green float-right' href=<?php echo get_permalink($post->ID); ?> >Continuar leyendo <ion-icon name="arrow-forward"></ion-icon></a>
       </div>
      </section>   
    <?php      
        }}
    ?>
    
  </article>
  
  <article id='services' class="fluid-container">
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