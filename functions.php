<?php
function register_custom_header_menu() {
    register_nav_menu('header-menu', __('Menu header'));
}

add_action('after_setup_theme', 'register_custom_header_menu');

?>

