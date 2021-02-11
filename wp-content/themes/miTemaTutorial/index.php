<!-- formado por 4 partes. 
Header: es la cabecera WordPress, y para mostrarla tendremos que hacer una llamada a la función get_header()
Content: aquí irá el cuerpo de nuestra web, llamadas a partes de plantillas, y donde se realizará el loop de WordPress.
Sidebar: si deseamos que nuestro blog tenga la típica barra lateral o sidebar, donde suele ir el archivo de entradas y 
            otros bloques característicos, lo haremos en este apartado haciendo una llamada a la función get_sidebar()
Footer: es el final o pie de nuestro blog o página de WordPress. Lo llamaremos con la función get_footer()
-->

<!-- lo mas basico seria algo asi: -->



<?php
/*
**** MAIN TEMPLATE ****
*/
/*--------- HEADER --------------*/
get_header();
/*--------- CONTENT -------------*/

			// loop.
			while ( have_posts() ) :
				
				the_post();

				the_title();
				the_content('Continua leyendo...', get_the_title());


				// Fin loop.
			endwhile;


/*--------- SIDEBAR -------------*/
get_sidebar();
/*--------- FOOTER -------------*/
get_footer();


?>






