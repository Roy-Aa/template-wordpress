<?php

function raa_enqueue_assets() {

    wp_enqueue_style(
        'raa-style',
        get_stylesheet_uri(),
        [],
        filemtime(get_template_directory() . '/style.css')
    );

    wp_enqueue_style(
        'raa-tailwind',
        get_template_directory_uri() . '/assets/css/output.css',
        [],
        filemtime(get_template_directory() . '/assets/css/output.css')
    );

    wp_enqueue_script(
        'raa-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        filemtime(get_template_directory() . '/assets/js/main.js'),
        true
    );

}

add_action('wp_enqueue_scripts', 'raa_enqueue_assets');