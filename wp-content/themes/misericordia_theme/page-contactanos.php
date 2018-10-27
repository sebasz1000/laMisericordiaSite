<?php
get_header();
?>
<div class="container-fluid pink">
 <div class="container" id='page-title'>
   <div class="row">
    <h1 class='col-12 col-sm-12 col-md-7'><ion-icon name="call"></ion-icon><?php the_title();  ?></h1>
    <?php the_content(); ?> 
  </div>
 </div>
</div>
<?php
if(have_posts()) :
  while(have_posts()) : the_post(); ?>
<main class="page container" id='contact'>
 <div class="row">
  <article class="col-sm-12 col-md-12 col-lg-7" >
     <section class="container" style='padding: 2em;'>
       <div class="row">
        <form class="col-sm-12 col-md-9">
         <div class="form-group">
          <label for='name'>Nombre</label><br>
          <input class='form-control md' type='text' id='name'/><br>
         </div>
         <div class="form-group">
          <label for='email'>Email</label><br>
          <input class='form-control md' type='text' id='email'/><br>
         </div>
         <div class="form-group">
          <label for='subject'>Asunto</label><br>
          <input class='form-control md' type='text' id='subject'/><br>
         </div>
         <div class="form-group">
          <label for='message'>Mensaje</label><br>
           <textarea class='form-control' type='text' id='message'  rows="8" cols="25"></textarea><br>
         </div>
         <div class="form-group">
          <input class='btn btn-primary btn-lg btn-block pink no-border' type="submit" value="Enviar">
         </div>
         
        </form>
      </div>
      <div class="row"></div>
    </section>
  </article>
   <article class="d-none d-sm-none d-md-none d-lg-block col-lg-5">
   <iframe id='contact-maps-iframe' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2534.67896844873!2d-75.64209763526596!3d4.533065988117725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e38f466fee25c41%3A0x78d3e0fe87674c80!2sHospital+La+Misericordia+de+Calarca!5e0!3m2!1sen!2sco!4v1540326734458" width="100%" height="800" frameborder="0" style="border:0" allowfullscreen></iframe>
  </article>
  </div><!-- row -->
</main>
<div class="container-fluid d-sm-block  d-md-block d-lg-none
">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2534.67896844873!2d-75.64209763526596!3d4.533065988117725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e38f466fee25c41%3A0x78d3e0fe87674c80!2sHospital+La+Misericordia+de+Calarca!5e0!3m2!1sen!2sco!4v1540326734458" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<?php
  endwhile;
else : 
  echo '<p> There is not content to display </p>';
endif;  

get_footer();
?>
