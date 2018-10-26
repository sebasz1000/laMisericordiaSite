  <aside id='quality-form-box'>
   <h3>¡Danos tu opinión!</h3>
   <p>¿Cómo te parecen nuestros servicios?</p>
    <form>
      <input type='radio' name='quality' id='excelente' value='Excelente'/>
      <label for='excelente'>Excelente</label><br>
      <input type='radio' name='quality' id='bueno' value='Bueno'/>
      <label for='bueno'>Email</label><br>
      <input type='radio' name='quality' id='regular' value='Regular'/>
      <label for='regular'>Asunto</label><br>
      <input type='radio'  name='quality' id='malo' value='Malo'/>
      <label for='malo'>Mensaje</label><br>
      <input type="submit" value="Enviar"><br>
    </form>
  </aside>
<div class="container-fluid color-row">
  <div class="row">
     <div class="col-5 blue"></div>
     <div class="col-4 green"></div>
     <div class="col-3 pink"></div>
  </div>
</div>
 <div class="container-fluid light-green" >
    <div class="container" style='padding:0;' >
     <br>
      <div id='logos-footer-container'>
        <figure><img width='184' src=<?php echo get_stylesheet_directory_uri() . '/static/contaduria.png'?>></figure>
        <figure><img width='184' src=<?php echo get_stylesheet_directory_uri() . '/static/contraloria.png'?>></figure>
        <figure><img width='184' src=<?php echo get_stylesheet_directory_uri() . '/static/dnp.png'?>></figure>
        <figure><img width='184' src=<?php echo get_stylesheet_directory_uri() . '/static/funcion-publica.png'?>></figure>
        <figure><img width='184' src=<?php echo get_stylesheet_directory_uri() . '/static/gobierno-digital.png'?>></figure>
        <figure><img width='184' src=<?php echo get_stylesheet_directory_uri() . '/static/minsalud.png'?>></figure> 
        <figure><img width='184' src=<?php echo get_stylesheet_directory_uri() . '/static/presidencia-colombia.png'?>></figure>
        <figure><img width='184' src=<?php echo get_stylesheet_directory_uri() . '/static/sice.png'?>></figure>
        <figure><img width='184' src=<?php echo get_stylesheet_directory_uri() . '/static/quindio.png'?>></figure>
        <figure><img width='150' src=<?php echo get_stylesheet_directory_uri() . '/static/paisaje-cultural-cafetero-logo.png'?>></figure>
      </div>   
    </div>
 </div>
 <footer>
  <div class='container'>
   <div class='row'>
    <div class='col-md-3 footer-item d-none d-md-block '>
        <article>
        <figure>
          <a href=<?php echo get_home_url(); ?>>
          <img width='60%' src=<?php echo get_stylesheet_directory_uri() . '/static/logo-hospital-blanco.svg' ?> >
          </a>
        </figure>
        <section>
          <small style='color:#FFF !important;'><?php bloginfo("name"); ?> - &copy; <?php echo date('Y'); ?> <br>
            Diseño y desarrollo web por <a style='color:white;' href='https://www.behance.net/sebasz' target='_blank' ><b>Sebasz1000</b></a>
          </small>
        </section>
        </article>  
    </div> 
    <div class='col-4 col-md-3 footer-item' >
      <article>
      <small><b>MENÚ</b></small>
        <nav>
            <?php 
             $args = array(
                  'theme_location' => 'general-footer'
             );
             wp_nav_menu($args); 
            ?>
        </nav>
      </article>
    </div>
    <div class='col-4 col-md-3 footer-item'>
     <article>
      <small><b>INFORMACIÓN INSTITUCIONAL</b></small>
        <nav>
          <?php 
           $args = array(
                'theme_location' => 'info-footer'
           );
           wp_nav_menu($args); 
          ?>
        </nav>
     </article>
    </div>
    <div class='col-4 col-md-3 footer-item' id='footer-contact-block'>
      <article>
        <small><b>CONTACTO</b></small>
        <section>
        <p><ion-icon name="call"></ion-icon>PBX (+57) 036 7436722</p>
        <p><ion-icon name="pin"></ion-icon>Calle 43 26-3,Calarcá-Colombia</p>
        <span style='display:inline-flex;'><ion-icon name="medkit"></ion-icon><p><b>CONSULTA EXTERNA</b> <br>CLL 18N 14-36</p></span>
        </section> 
      </article>
    </div>
  </div>
  <div class="row"></div> 
  </div><!-- container -->
   <div class="container-fluid d-block d-sm-block d-md-none">
    <article class='row dark-blue' id='responsive-footer-cop-info' >
     <div class="col-1"></div>
      <figure class="col-3">
        <a href=<?php echo get_home_url(); ?>>
          <img width='80%' src=<?php echo get_stylesheet_directory_uri() . '/static/logo-hospital-blanco.svg' ?> >
        </a>
      </figure>
      <section class="col-7">
        <small style='color:#FFF !important;'><?php bloginfo("name"); ?> - &copy; <?php echo date('Y'); ?> <br>
                Diseño y desarrollo web por <a style='color:white;' href='https://www.behance.net/sebasz' target='_blank' ><b>Sebasz1000</b></a>
              </small>
        <img width='80%' src=<?php echo get_stylesheet_directory_uri() . '/static/supersalud.png' ?> >
      </section>
      <br/><br><br>
    </article> 
    <div class="row d-none d-md-block"></div> 
   </div><!-- container -->
</footer>
<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>