<?php
function your_theme_enqueue_scripts() {
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/dist/bundle.js', [], '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'your_theme_enqueue_scripts' );