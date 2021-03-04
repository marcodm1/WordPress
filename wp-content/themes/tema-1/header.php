<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Hello, world!</title>
    <?php
      wp_head(); // esto añade lo de function wp_enqueue_style 
    ?>
  </head>
  <body>

    <!-- menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <!-- <div class="container-fluid"> -->
          <a class="navbar-brand" href="#">LogoCorporativo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <?php
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