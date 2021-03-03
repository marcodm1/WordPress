<?php
    function tema1_agragar_css_js() {
        wp_enqueue_style('style', get_stylesheet_uri()); // es nuestro css el uri, nos lleva a nuestro archivo automaticamenter
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css'); // añado mi bootstrap
        wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js', array ('jquery'), 1.14, true); // añadimos popper porque jquery bootstrap ya lo utiliza
        wp_enqueue_script('bootstrapJS', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js', array ('popper'), 5, true); // añadimos popper porque jquery bootstrap ya lo utiliza
    }
    // aqui llamamos a nuestra funcion
    add_action( 'wp_enqueue_scripts', 'tema1_agragar_css_js' );

    // soporte de las imagenes
    if (function_exists( 'add_theme_support' )) {
        add_theme_support( 'post-thumbnails');
     
    }

    // añadimos sidebar

    function tema1_widgets() {
        register_sidebar(array(
            'id' => 'widgets_derecha',
            'name' => __('Widget Derecha'),
            'description' => __('Arrastra lo que quieras'),
            'before_widget' => '<div class="car-body">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4><hr>'
        ));
    }
    add_action('widgets_init', 'tema1_widgets');