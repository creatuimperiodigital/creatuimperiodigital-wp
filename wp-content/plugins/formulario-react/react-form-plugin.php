<?php
/*
Plugin Name: React Form Plugin
Description: Un plugin para integrar el formulario React en WordPress como shortcode.
Version: 1.0
Author: Pipolincito el hermoso tutito
*/
function enqueue_react_form_styles() {
    wp_enqueue_style( 'react-form-styles', plugins_url( '/build/static/css/main.css', __FILE__ ) );
}
add_action( 'wp_enqueue_scripts', 'enqueue_react_form_styles' );


function react_form_shortcode() {
    ob_start();
    ?>
    <div id="root"></div>
    <script src="<?php echo plugins_url( '/build/static/js/', __FILE__ ) . 'main.js' ?>"></script>
    <?php
    return ob_get_clean();
}

add_shortcode('react_form', 'react_form_shortcode');
?>