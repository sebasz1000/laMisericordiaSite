<?php
get_header();
?>
<div class="container-fluid grey">
 <div class="container" id='page-title'>
   <div class="row">
    <h1 class='col-12'><ion-icon name="warning"></ion-icon><?php the_title();  ?></h1>
    <div class='container'><?php the_content(); ?> </div>
  </div>
 </div>
</div>
<?php
if(have_posts()) :
  while(have_posts()) : the_post(); ?>
<main class="page container" id='contact'>
 <div class="row">
  <article class="col-12" >
     <section class="container" style='padding: 2em;'>
       <div class="row"></div>
       <div class="row"></div>
       <div class="row"></div>
       <div class="row d-flex flex-horizontal-centered">
        <div class="col-sm-12 col-md-9">
        <?php echo do_shortcode('[contact-form-7 id="330" title="Contact form 2"]'); ?>
       
        </div>
      </div>
      <div class="row"></div>
    </section>
  </article>
  </div><!-- row -->
</main>
<?php
  endwhile;
else : 
  echo '<p> No hay contenido para mostrar</p>';
endif;  

get_footer();
?>
