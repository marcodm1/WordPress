
<!-- Cabecera -->
<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
				
		<?php 
				if ( have_posts() ) : 

					// loop.
					while ( have_posts() ) :

						the_post();
						//incluimos el template content.php
						// get_template_part( 'content' ); // get template llama a un archivo
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h1>
				<?php the_title();?>
			</h1>
					
			<div>
				<?php the_content();?>
			</div><!-- entry-content -->
		</article>
		<?php// Fin loop.
			endwhile;

			else :
			//incluimos el template content-none.php es una plantillas content es el archivo y el none es el "parametro"
			echo "No se han encontrado entrasas";
			endif;			

		?>
	</main><!-- .site-main -->
</div><!-- .content-area -->


<?php get_footer(); ?>




