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
 <div class="container-fluid" id='logos-footer-container'>
    <div class="container">colocar logos!</div>
 </div>
 <footer>
  <div class='container'>
   <div class='row'>
    <div class='col-sm-12 col-md-3 footer-item'>
      <article >
        <small style='color:#FFF !important;'><?php bloginfo("name"); ?> - &copy; <?php echo date('Y'); ?></small>
      </article>
    </div> 
    <div class='col-6 col-md-3 footer-item' >
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
    <div class='col-6 col-md-3 footer-item'>
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
    <div class='col-sm-12 col-md-3 footer-item' id='footer-contact-block'>
      <article> 
        <small><b>CONTACTO</b></small>
        <p>hospitalcalarca.gov.co</p>
        <p>PBX (+57) 036 7436722</p>
        <p>Calle 43 26-3 , Calarcá-Colombia</p>
        <p><b>CONSULTA EXTERNA</b> <br> CLL 18N 14-36</p>
      </article>
    </div>
  </div>
  </div><!-- container -->
</footer>
<?php wp_footer(); ?>

</body>
</html>