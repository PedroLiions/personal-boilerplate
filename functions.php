<?php

// navbar
function register_my_menus()
{
    register_nav_menus([
        'header-menu' => __('Header Menu'),
    ]);

    register_nav_menus([
        'footer-menu' => __('Footer menu'),
    ]);
}

add_action('init', 'register_my_menus');

function node_modules_path () {
    return get_template_directory_uri() . "/node_modules";
}
