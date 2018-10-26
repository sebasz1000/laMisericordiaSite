<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" >
    <meta name="viewport" content="width=device-width">
    <script src="https://unpkg.com/ionicons@4.4.6/dist/ionicons.js"></script>
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?>>
  
   <header id='site-header'>
     <div class="container" >
      <div class="row">
       <div id='main-logo-container' class='col-5 col-md-4 col-lg-3 responsive-site-logo'>
        <figure>
               <?php if(has_custom_logo()) echo the_custom_logo(); ?>
        </figure>
        <h5><?php bloginfo('description'); ?></h5>  
       </div>
       <div class='col-7 col-md-8 col-lg-9 d-block d-sm-block d-md-none align-right' > <!-- Search bar for small screens -->
         <div class="row">
            <small class='align-right col-12'>Calle 43 26-3 , Calarcá-Colombia   <b>CONSULTA EXTERNA</b>  CLL 18N 14-36  <b>PBX</b> (+57) 036 7436722</small>
         </div>
         <div class="row"></div>
         <div class="row">
           <form action="" id='search-box' class='rounded col-12'>
               <button type="submit" class="btn transparent" ><ion-icon  name="search"></ion-icon></button>
               <input type="text" name="searchText" placeholder="Buscar" class="form-control">    
           </form>
         </div>
        </div>
       <div class='col-sm-12 col-md-8 col-lg-9' >
        <div class='rounded d-none d-md-block align-right '> <!-- Search bar for large screens -->
           <small class='align-right'>Calle 43 26-3 , Calarcá-Colombia   <b>CONSULTA EXTERNA</b>  CLL 18N 14-36  <b>PBX</b> (+57) 036 7436722</small>
           <br>
           <form action="" id='search-box' class='rounded'>
               <button type="submit" class="btn transparent" ><ion-icon  name="search"></ion-icon></button>
               <input type="text" name="searchText" placeholder="Buscar" class="form-control">    
           </form>
        </div> 
        <div class="dropdown dropleft" id='menu-hamburguesa'>
            <button class="btn dropdown-toggle" id='hamburger' type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <ion-icon name='menu' size='large'></ion-icon></button>
            <?php 
              $args = array(
                'theme_location' => 'hamburguer',
                'menu_class' => 'dropdown-menu'
              );
              wp_nav_menu($args);
            ?>
           </div>
         <nav class='clear-list-style'>
          <?php 
           $args = array(
                'theme_location' => 'primary',
                'menu_id' => 'primary-menu',
           );
           wp_nav_menu($args); 
           ?>
           <script>
            var servicioLink = document.getElementsByClassName('primary-menu-servicios')[0].getElementsByTagName('a')[0];
            var servicioIcon = document.createElement('ion-icon');
             servicioIcon.setAttribute('name','heart');
            servicioLink.appendChild(servicioIcon);
             var contratacionesLink = document.getElementsByClassName('primary-menu-contrataciones')[0].getElementsByTagName('a')[0];
            var contratacionesIcon = document.createElement('ion-icon');
             contratacionesIcon.setAttribute('name','people');
            contratacionesLink.appendChild(contratacionesIcon);
             var contactanosoLink = document.getElementsByClassName('primary-menu-contactanos')[0].getElementsByTagName('a')[0];
            var  contactanosIcon = document.createElement('ion-icon');
             contactanosIcon.setAttribute('name','call');
            contactanosoLink.appendChild(contactanosIcon);
           </script>
          </nav><!-- nav -->
           
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

   
  
