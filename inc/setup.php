<?php

function raa_theme_setup() {

    register_nav_menus([
        'header' => __('Header menu', 'raa'),
        'footer'  => __('Footer menu', 'raa'),
        'mobile' => __('Mobiel menu', 'raa'),
    ]);

}

add_action('after_setup_theme', 'raa_theme_setup');