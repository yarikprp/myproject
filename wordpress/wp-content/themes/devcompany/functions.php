
<?php

function devcompany_enqueue_assets(): void
{
    wp_enqueue_style(
        'devcompany-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );
}

add_action('wp_enqueue_scripts', 'devcompany_enqueue_assets');
