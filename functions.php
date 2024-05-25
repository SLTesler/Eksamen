function enqueue_custom_script() {
    wp_enqueue_script('custom-script', 'flow1/wp-content/themes/twentytwentyfour/custom.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_script');
