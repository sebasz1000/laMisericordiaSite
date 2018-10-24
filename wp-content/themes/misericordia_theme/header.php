<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" >
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?>>
  
   <header>
     <div class="container" id='site-header'>
      <div class='row'>
      <small class='align-right col-12'>Calle 43 26-3 , Calarcá-Colombia   <b>CONSULTA EXTERNA</b>  CLL 18N 14-36  <b>PBX</b> (+57) 036 7436722</small>
      </div>
      <br>
      <div class="row">
       <div id='main-logo-container' class='col-sm-12 col-md-4 col-lg-3'>
        <figure>
           <h3><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h3>
           <h5><?php bloginfo('description'); ?></h5>
         </figure>
       </div>
       <div class='align-right col-sm-12 col-md-8 col-lg-9' >
         <form action="">
            <input type="text" name="searchText">
            <input type="submit" value="Buscar">
         </form>
         <nav class='site-nav clear-list-style'>
          <?php 
           $args = array(
                'theme_location' => 'primary'
           );
           wp_nav_menu($args); 
           ?>
          </nav>
        </div>
      </div>
     </div> <!--container -->
  </header>
  <div class="container-fluid color-row">
    <div class="row">
       <div class="col-5 blue"></div>
       <div class="col-4 green"></div>
       <div class="col-3 pink"></div>
    </div>
  </div>
  <?php if(!is_front_page()){ ?>
  <div class="container">
      <?php 
        $args = array('show_browse' => false, 'show_title' => false, 
                      'labels' => array( 'home' => esc_html__('','') ));
        if ( function_exists( 'breadcrumb_trail' ) ) breadcrumb_trail($args); ?>
  </div> 
  <?php } ?>
  <aside id='extra-links'>
   <a href=<?php echo get_permalink(get_id_by_slug('notificaciones-judiciales')) ?>>Notificaciones judiciales</a>
   <a href=<?php echo get_permalink(get_id_by_slug('quejas-y-reclamos')) ?>>Quejas y reclamos</a>
   <a href=''>Descarga nuestro boletín</a>
  </aside>

   
  
