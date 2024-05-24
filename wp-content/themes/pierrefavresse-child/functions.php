<?php

function mes_styles_scripts() {
    //css thème parent
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}
add_action('wp_enqueue_scripts', 'mes_styles_scripts');

function wpb_hook_javascript() {
	if (is_home()) { 
		?>
			<script type="text/javascript" src="wp-content/themes/pierrefavresse-child/js/script.js"></script>
		<?php
	}
}
add_action('wp_footer', 'wpb_hook_javascript');


register_nav_menus(
    array(
        'header' => 'Header - Menu du header',
        'footer' => 'Footer - Menu du footer',
        'Admin' => 'Admin - Menu réservé aux admins du site',
    )
);