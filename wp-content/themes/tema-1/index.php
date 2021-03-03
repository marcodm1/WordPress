<?php
  get_header();// pega aqui todo el contenido de header.php
?>
      <div class="row">
        <!-- Entradas -->
        <div class="col-lg-9">

          
          <?php get_header();
            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <!-- Entrada1 -->
              <div class="card-body">
                <a href="<?php the_permalink();/* aqui cargamos el link de cada entrada*/?>">
                  <h2><?php the_title();/* aqui cargamos el titulo de cada entrada*/ ?></h2>     
                </a>
                <p class="small mb-0">Fecha: <?php the_time('F j, Y');/* aqui cargamos el tiempo de cada entrada*/ ?></p>
                <p class="small mb-0">Autor: <?php the_author();/* aqui cargamos el autor de cada entrada*/ ?></p>
                <p class="small">Categorías: <?php the_category(' / ');/* aqui cargamos cada categoria separada por / de cada entrada*/?>   
                                  Etiquetas: <?php the_tags('', ' ', '' );/* aqui cargamos cada etiqueta separada por / de cada entrada*/?> 
                
                <?php
                  if ( has_post_thumbnail() ) { // con este if, estamos construyendo las clases de la img, pero la img la pone wp
                    the_post_thumbnail('post-thumbnails', array( // el post-thumbnails es el nombre del functions
                      'class' =>'img-fluid mb-3'
                    ));
                  }
                ?>
                                  <!-- the_post_thumbnail( 'thumbnail', array( 'class' => 'alignleft' ) ); -->
                <!-- <img src="imgCentral.jpg" class="img-fluid mb-3" alt=""> -->
                <?php
                  the_excerpt(); // aqui cargamos el parrafo/contenido de cada entrada
                ?>
                <a href="<?php the_permalink();/* aqui cargamos el link de cada entrada*/?>" class="btn btn-primary">Mas info...</a>
              </div>
              <!-- fin Entrada1 -->
              <?php endwhile; endif; 
          ?>  

          <!-- paginacion -->
          <!-- car-body envuelve todo el widget -->
            <div class="car-body"> 
              <?php get_template_part('template-parts/content', 'paginacion'); ?> <!-- para acceder a la carpeta template-->
            </div>
          <!-- fin paginacion -->

        </div>
        <!-- fin Entradas -->

        <!-- aside -->
        <?php
          get_sidebar();
        ?>
        <!-- cierre aside -->

      </div>
    </div>
    <!-- fin Blog -->

<?php
  get_footer(); // aqui pega todo el archivo del footer.php
?>