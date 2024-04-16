<?php

function twentytwenty_child_enqueue_styles()
{
    wp_enqueue_style(
        'twentytwenty-style', 
        get_template_directory_uri() . '/style.css'
    );

    wp_enqueue_style(
        'child-style',
        get_stylesheet_uri(),
        ['twentytwenty-style']
    );
}

add_action('wp_enqueue_scripts', 'twentytwenty_child_enqueue_styles');