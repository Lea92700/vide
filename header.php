<!DOCTYPE html>
<html lang="fr">
    <head>
<link href="wp-content/themes/vide/style.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Belanosima&family=Just+Another+Hand&family=Raleway:wght@100&family=Space+Mono&display=swap" rel="stylesheet">
<?php wp_head() ?>
</head>
<body>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php wp_nav_menu([
            'theme_location' => 'header', 
            'container' => false,
            'menu_class' =>'navbar-nav me-auto mb-2 mb-lg-0'
            ]) 
            ?>

