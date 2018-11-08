<!-- poll -->
 

 <?php if ( function_exists( 'vote_poll' ) && ! in_pollarchive() ): ?>
  <aside id='poll'class='rounded'>
   <h3 class="d-inline-flex"><ion-icon name="happy" size='large'></ion-icon> ¡Danos tu opinión! </h3>
<?php  get_poll(2); ?>
  <button id='poll-toggle-btn' type="button" class="btn transparent btn-block" data-toggle="button" aria-pressed="false" autocomplete="off">
  <ion-icon id='icon-down' name='arrow-dropdown' size='large'></ion-icon>
  <ion-icon id='icon-up' name='arrow-dropup' size='large'></ion-icon>
  </button>
  <?php $page_id = get_id_by_slug('pollsarchive'); ?>
  <a class="poll-archive-anchor float-right" href=<?php echo get_permalink($page_id); ?>><small>Más detalle</small></a>
  </aside>
<?php endif; ?>

<!-- floating links -->
 
  <aside id='extra-links' class='rounded'>
   <a href=<?php echo get_permalink(get_id_by_slug('boletin')) ?>><small><ion-icon name='download'></ion-icon>Descarga nuestro boletín</small></a>
  </aside>
  
</div><!--This close div mantains poll container stick to the bottom but to the footer! -->
 
<footer id='footer' class="position-relative">
 <div class="container-fluid light-green" >
     <div class="row color-row">
     <div class="col-5 blue"></div>
     <div class="col-4 green"></div>
     <div class="col-3 pink"></div>
  </div>
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
  <div class='container'>
  <div class="row" ></div>
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
          <br>
          <img width='80%' src=<?php echo get_stylesheet_directory_uri() . '/static/supersalud.png' ?> >
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
        <?php echo do_shortcode('[page_visit_counter_md_total_sites_visit]');?>
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

</body>

</html>