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
 <footer>
   <div class='container site-footer'>
    <div>
      <small><?php bloginfo("name"); ?> - &copy; <?php echo date('Y'); ?></small>
    </div> 
    <div>
    <small><b>MENÚ</b></small>
      <nav>
          <?php 
           $args = array(
                'theme_location' => 'general-footer'
           );
           wp_nav_menu($args); 
          ?>
      </nav>
    </div>
    <div>
    <small><b>INFORMACIÓN INSTITUCIONAL</b></small>
      <nav>
        <?php 
         $args = array(
              'theme_location' => 'info-footer'
         );
         wp_nav_menu($args); 
        ?>
      </nav>
    </div>
    <div id='footer-contact-block'>
      <small><b>CONTACTO</b></small>
      <p>hospitalcalarca.gov.co</p>
      <p>PBX (+57) 036 7436722</p>
      <p>Calle 43 26-3 , Calarcá-Colombia</p>
      <p><b>CONSULTA EXTERNA</b> <br> CLL 18N 14-36</p>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>