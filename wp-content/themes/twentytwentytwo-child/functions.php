

<?php

function twentytwentytwo_child_enqueue_styles()
{
    // Enqueue parent theme's stylesheet
    wp_enqueue_style(
        'twentytwentytwo-style', // Make sure to use the correct handle for the parent theme
        get_template_directory_uri() . '/style.css'
    );

    // Enqueue child theme's stylesheet
    wp_enqueue_style(
        'twentytwentytwo-child-style',
        get_stylesheet_uri(),
        ['twentytwentytwo-style'] // Include the parent theme's stylesheet as a dependency
    );
}

add_action('wp_enqueue_scripts', 'twentytwentytwo_child_enqueue_styles');
