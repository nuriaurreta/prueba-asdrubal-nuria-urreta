<?php
function load_files() {
    wp_enqueue_style(
        'prueba-asdrubal-nuria-urreta-style',
        get_template_directory_uri() . '/assets/css/styles.css',
        array(),
        '1.0',
        'all'
    );

    wp_enqueue_script(
        'prueba-asdrubal-nuria-urreta-script',
        get_template_directory_uri() . '/assets/js/script.js',
        array(),
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'load_files');