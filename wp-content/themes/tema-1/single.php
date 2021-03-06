<?php
  get_header();// pega aqui todo el contenido de header.php
?>
    <div class="row">
    <!-- Entradas -->
        <div class="col-lg-12">
            <?php 
              if ( have_posts() ) : while ( have_posts() ) : the_post(); 
            ?>
                
            <!-- Entrada1 -->
            <div class="card-body">
                <h2><?php the_title();/* aqui cargamos el titulo de cada entrada*/ ?></h2>     
                </a>
                <p class="small mb-0">Fecha: <?php the_time('F j, Y');/* aqui cargamos el tiempo de cada entrada*/ ?></p>
                <p class="small mb-0">Autor: <?php the_author();/* aqui cargamos el autor de cada entrada*/ ?></p>
                <p class="small">Categorías: <?php the_category(' / ');/* aqui cargamos cada categoria separada por / de cada entrada*/?>   
                                Etiquetas: <?php the_tags('', ' ', '' );/* aqui cargamos cada etiqueta separada por / de cada entrada*/?>
                </p>
                <?php
                  if ( has_post_thumbnail() ) { // con este if, estamos construyendo las clases de la img, pero la img la pone wp
                    the_post_thumbnail('post-thumbnails', array( // el post-thumbnails es el nombre del functions
                      'class' =>'img-fluid mb-3'
                    ));
                  }
                ?>
                                
                <?php
                    the_content(); // esto pinta todo el contenido de la entrada
                ?>
            </div>
            <!-- fin Entrada1 -->
            <?php endwhile; endif; 
        ?>  
    </div>
    <!-- fin Entradas -->
    <!-- fin Blog -->

    <div class="">
        <?php // copiado de ruben, intente modificalo pero no lo consegui
            $id_autor = get_the_author_meta($field = 'ID', $user_id = false); // esto hacerlo con una funcion de wp
            $args = array(
              'author' => $id_autor,
              'posts_per_page' => 4,
            );
            $my_query = new WP_Query($args);

            if ($my_query->have_posts() ): 
        ?>
            <h3 class="col-12">Posts mas recientes del autor: <h3>

        <?php
            while ($my_query->have_posts() ) :
            $my_query->the_posts();
        ?>

        <div class="col-md-6 col-ms-12">
            <p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"> <?php the_title(); ?></a></p>
        </div>

        <?php
                endwhile;
            else:
        ?>

        <div class="col-12"> 
            <p>No se encontraron mas post de este autor.</p>
        </div>
        <?php
            endif;
            wp_reset_postdata();
        ?>
    </div>

<?php
  get_footer(); // aqui pega todo el archivo del footer.php
?>