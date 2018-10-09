<footer class="site-footer">
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
</footer>
</div><!-- container -->
<?php wp_footer(); ?>

</body>
</html>