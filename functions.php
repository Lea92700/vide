<?php

function theme_enqueue_style()
{
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/css/style.css');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_style');

?>

<?php
function montheme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post_thumbnails');
    add_theme_support('menus');
    register_nav_menu('header','En tête du menu');
    register_nav_menu('footer','Pied de page');
     
}
add_action('after_setup_theme', 'montheme_setup');
?>

<?php
function enqueue_custom_fonts() {
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css2?family=Belanosima&family=Just+Another+Hand&family=Raleway:wght@100&family=Space+Mono&display=swap', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_fonts');

?>

