<?php
get_header();


if(have_posts()) :
  while(have_posts()) : the_post(); ?>
<main class="page container" id='contact'>
  <article  style='width:65%'>
     <h1><?php the_title();  ?></h1>
     <section class="flex border">
        <form>
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
      <article >
        <small>Calle 43 26-3 <br>Calarcá-Colombia</small>
        <small><b>CONSULTA EXTERNA</b><br>Calle18N 14-36 </small>
        <small><b>PBX</b> (+57) 036 7436722</small><br>
        <small>hospitalcalarca.gov.co</small>
      </article>
    </section>
  </article>
   <article style='width:35%; overflow: hidden'>
    <img style='width:270%' src='http://geoawesomeness.com/wp-content/uploads/2017/10/maps-broadcom.png'/>
  </article>
</main>
 
<?php
  endwhile;
else : 
  echo '<p> There is not content to display </p>';
endif;  

get_footer();
?>
