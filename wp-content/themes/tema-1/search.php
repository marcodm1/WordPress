<?php
  get_header();// pega aqui todo el contenido de header.php
?>
      <div class="row">
        <!-- Entradas -->
        <div class="col-lg-9">

        <!-- titulo del resultado de la busqueda  -->
            <h3 class="bg-primary text-white py-3 mb-5 text-center"> Resultados de busqueda </h3>

          <?php get_header();
            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <!-- Entrada1 -->
              <div class="card-body">
                <a href="<?php the_permalink();/* aqui cargamos el link de cada entrada*/?>">
                  <h2><?php the_title();/* aqui cargamos el titulo de cada entrada*/ ?></h2>     
                </a>
            
              </div>
              <!-- fin Entrada1 -->
              <?php endwhile;  ?>  

              <?php else: ?>

              <h5> No se encontraron resultados... <?php printf(esc_html('%s?'), get_search_query()) ?></h5> <!-- %s? esto va a reemplazar get_search_query(), que es l oque escribio el usuario -->
              <?php get_search_form(); ?>

              <?php endif; ?>

          <!-- paginacion -->
          <!-- car-body envuelve todo el widget -->
            <div class="card-body"> 
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