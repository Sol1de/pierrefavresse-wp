<?php

function mes_styles_scripts() {
    //css thème parent
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'mes_styles_scripts');

register_nav_menus(
    array(
        'header' => 'Header - Menu du header',
        'footer' => 'Footer - Menu du footer',
        'Admin' => 'Admin - Menu réservé aux admins du site',
    )
);