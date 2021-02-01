<?php
get_header();
do_action( 'qm/debug', 'Este es mi error' );
?>

<?php //wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

<?php //get_search_form(); ?>
<div class="quitado-with_sidebar">

<main>
<?php if (have_posts()):  while (have_posts()): the_post(); ?>
<article <?php post_class(); ?>>
    <header>
      <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    </header>
    <div><?php the_excerpt(); ?></div>

    <footer><p>
      By <a href="<?php esc_url(get_the_author_meta('url')); ?>"><?php the_author(); ?></a> |
      <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
      <?php if(has_category()) { ?>
        | Categories: <?php the_category(','); ?>
      <?php } ?>
      <?php if(has_tag()) { ?>
        | Tags: <?php the_tags(','); ?>
      <?php } ?>
    </p></footer>

  </article>
<?php endwhile; endif; ?>
<?php //the_posts_pagination(array('screen_reader_text' => 'Mi paginación')); ?>
</main>

<aside>
<?php //get_sidebar('primary-sidebar'); ?>
</aside>

</div>

<?php
get_footer();
