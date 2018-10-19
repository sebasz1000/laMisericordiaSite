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
       <div id='main-logo-container'>
         <h3><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h3>
         <h5><?php bloginfo('description'); ?></h5>
       </div>
       <div class='align-right'>
         <small>Calle 43 26-3 , Calarcá-Colombia   <b>CONSULTA EXTERNA</b>  CLL 18N 14-36  <b>PBX</b> (+57) 036 7436722</small>
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
     </div> <!--container -->
  </header>
  <aside id='extra-links'>
   <a href=<?php echo get_permalink(get_id_by_slug('notificaciones-judiciales')) ?>>Notificaciones judiciales</a>
   <a href=<?php echo get_permalink(get_id_by_slug('quejas-y-reclamos')) ?>>Quejas y reclamos</a>
   <a href=''>Descarga nuestro boletín</a>
  </aside>

   
  
