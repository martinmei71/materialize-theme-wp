<?php
function materialize_theme_assets() {
    $uri = get_template_directory_uri();

    wp_enqueue_style('materialize-style', $uri . '/assets/css/styles.css', array(), '1.0');
    wp_enqueue_script('materialize-script', $uri . '/assets/js/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'materialize_theme_assets');
?>
