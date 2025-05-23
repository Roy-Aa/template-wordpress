<?php

function template_enqueue_styles() {
    wp_enqueue_style('my-style', get_stylesheet_uri());

    wp_enqueue_style('tailwind-output', get_template_directory_uri() . '/src/output.css');
}

add_action('wp_enqueue_scripts', 'template_enqueue_styles');
