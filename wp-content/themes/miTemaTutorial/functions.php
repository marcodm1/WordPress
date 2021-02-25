<?php

function miTemaTutorial_css_js() {
  wp_enqueue_style( 'miEstilo', get_template_directory_uri(). '/style.css' );
 
//   wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);

}
add_action( 'wp_enqueue_scripts', 'miTemaTutorial_css_js' );