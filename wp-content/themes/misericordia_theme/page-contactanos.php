<?php
get_header();


if(have_posts()) :
  while(have_posts()) : the_post(); ?>
<main class="page container" id='contact'>
 <div class="row">
  <article class="col-sm-12 col-lg-6" >
     <h1><?php the_title();  ?></h1>
     <section class="container border">
       <div class="row">
        <form class="col-sm-7">
          <label for='name'>Nombre</label><br>
          <input type='text' id='name'/><br>
          <label for='email'>Email</label><br>
          <input type='text' id='email'/><br>
          <label for='subject'>Asunto</label><br>
          <input type='text' id='subject'/><br>
          <label for='message'>Mensaje</label><br>
          <input type='text' id='message'/><br>
          <input type="submit" value="Enviar">
        </form>
        <div class="col-sm-5">
          <small>Calle 43 26-3 <br>Calarcá-Colombia</small>
          <small><b>CONSULTA EXTERNA</b><br>Calle18N 14-36 </small>
          <small><b>PBX</b> (+57) 036 7436722</small><br>
          <small>hospitalcalarca.gov.co</small>
        </div>
      </div>
    </section>
  </article>
   <article class="col-sm-12 col-lg-6">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2534.67896844873!2d-75.64209763526596!3d4.533065988117725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e38f466fee25c41%3A0x78d3e0fe87674c80!2sHospital+La+Misericordia+de+Calarca!5e0!3m2!1sen!2sco!4v1540326734458" width="100%" height="800" frameborder="0" style="border:0" allowfullscreen></iframe>
  </article>
  </div><!-- row -->
</main>
 
<?php
  endwhile;
else : 
  echo '<p> There is not content to display </p>';
endif;  

get_footer();
?>
