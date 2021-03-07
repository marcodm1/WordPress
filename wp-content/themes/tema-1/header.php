<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <!-- lenguaje dinamico -->
    <html <?php language_attributes(); ?>> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- <title>Hello, world!</title> -->
    <?php
      wp_head(); // esto añade lo de function wp_enqueue_style 
    ?>
  </head>
  <body>
   <body <?php body_class(); ?>> <!--sirve para identificar en que pagina estamos -->
    <!-- menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <!-- <div class="container-fluid"> -->
          <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <?php // configuracion de wordpress que lo que hace es pintar el menu
            wp_nav_menu( array(
              'theme_location'    => 'menu-principal',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse',
              'container_id'      => 'navbarSupportedContent',
              'menu_class'        => 'nav navbar-nav ml-auto',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
          ?>
        <!-- </div> -->
      </div>
    </nav>
    <!-- fin menu -->

    <!-- Blog -->
    <div class="container">
      <h2 class="my-5 text-center text-primary"> Mi blog personal</h2>
        <hr />