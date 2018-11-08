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
        <figure><?php if(has_custom_logo()) echo the_custom_logo(); ?> </figure>
        <h5><?php bloginfo('description'); ?></h5>  
       </div>
       <div class='col-7 col-md-8 col-lg-9 d-block  align-right' > <!-- Search bar for small screens -->
         <div class="row d-block">
            <small class='align-right col-12'>Calle 43 26-3 , Calarcá-Colombia   <b>CONSULTA EXTERNA</b>  CLL 18N 14-36  <b>PBX</b> (+57) 036 7436722</small>
            <?php  get_search_form(); ?>
         
           <div class="d-flex" id='secondary-menu-set'>
           <a href=<?php echo get_permalink(get_id_by_slug('notificaciones-judiciales')) ?>><button type='button' class='btn btn-danger'><ion-icon name='warning'></ion-icon>      Notificaciones judiciales</button></a>
          
           <div class="dropdown">
             <button class="btn dropdown-toggle transparent" id='hamburger' type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <ion-icon name='menu' size='large'></ion-icon></button>
              <?php 
                $args = array(
                  'theme_location' => 'hamburguer',
                  'menu_class' => 'dropdown-menu dropdown-menu-right'
                );
                wp_nav_menu($args);
              ?>
             </div>
          </div>
         </div><!-- row-->
        </div><!-- container -->
      </div><!-- row -->
      <div class="row">
        <div class='col-sm-12 flex justify-content-end' >  
          <div class="dropdown-secondary">
          
              <button class="btn btn-secondary dropdown-toggle" id='secondary-dropdown-btn' type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><ion-icon name='document'></ion-icon> Publicación de informes</button>
              <?php 
                $args = array(
                  'theme_location' => 'secondary',
                  'menu_id' => 'secondary-menu',
                  'menu_class' => 'dropdown-menu dropdown-menu-right'
                );
                wp_nav_menu($args)
              ?>
         </div> 
         <nav class='clear-list-style '>
          <?php 
           $args = array(
                'theme_location' => 'primary',
                'menu_id' => 'primary-menu',
           );
           wp_nav_menu($args); 
           ?>
          </nav><!-- nav -->   
        </div>
      </div><!--row -->
     </div> <!--container -->
  </header>
  <div class="container-fluid color-row">
    <div class="row">
       <div class="col-5 blue"></div>
       <div class="col-4 green"></div>
       <div class="col-3 pink"></div>
    </div>
  </div>
  
  <div class='position-relative'><!--This div mantains poll container stick to the bottom but to the footer! -->  
  
  
  
