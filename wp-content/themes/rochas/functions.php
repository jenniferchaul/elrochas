<?php

define('THEME_VERSION', '1.0.0');

add_action('after_setup_theme', 'rochas_initializeTheme');

if (!function_exists('rochas_initializeTheme')) {
    function rochas_initializeTheme()
    {
        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');

        add_theme_support('menus');

        add_theme_support('page-attributes');
    }
}

add_action('wp_enqueue_scripts', function () {

    wp_enqueue_style(
        'rochas-styles',
        get_theme_file_uri('assets/css/style.css'),
        [],
        THEME_VERSION
    );

    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Parisienne&family=Satisfy&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css',
        [],
        '5.15.4'
    );

    wp_enqueue_style(
        'aos-css',
        'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css',
        [],
        null
    );

    wp_enqueue_script(
        'aos-js',
        'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js',
        [],
        null,
        true
    );

wp_add_inline_script('aos-js', 'AOS.init({
    once: true,
    duration: 800,
    delay: 100,
    offset: 120,
    easing: "ease-in-out",
});');

    wp_enqueue_script(
        'main-js',
        get_theme_file_uri('assets/js/main.js'),
        [],
        '1.0.0',
        true
    );
});
