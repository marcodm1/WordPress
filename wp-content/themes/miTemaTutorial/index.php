<?php
/*
**** MAIN TEMPLATE ****
*/
?>
<!-- Cabecera -->
<header>
	<?php get_header(); ?>
</header>
<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
<?php 
		if ( have_posts() ) : 

			// loop.
			while ( have_posts() ) :
				
				the_post();
				echo "-----------------Aqui separamos en el loop cada post--------------------";
				//incluimos el template content.php
				get_template_part( 'content' );
				
			// Fin loop.
			endwhile;
			
		else :
			//incluimos el template content-none.php
			get_template_part( 'content', 'none' );
		endif;			
			
?>
		</main><!-- .site-main -->
</div><!-- .content-area -->

<aside class="sidebar">
	<?php get_sidebar();?>
</aside>
<!-- Pie de pagina -->
<footer>
    <?php get_footer(); ?>
</footer>



