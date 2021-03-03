<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hello, world!</title>
    <?php
      wp_head(); // esto añade lo de function wp_enqueue_style 
    ?>+
  </head>
  <body>
    <!-- menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-nav ml-auto">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
              <a class="nav-link" href="#">Blog</a>
              <a class="nav-link" href="#">Contacto</a>
            </div>
            
          </div>
        </div>
      </div>
    </nav>
    <!-- fin menu -->

    <!-- Blog -->
    <div class="container">
      <h2 class="my-5 text-center text-primary"> Mi blog personal</h2>
        <hr>