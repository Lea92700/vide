<!DOCTYPE html>
<html lang="fr">
<head>
    <link href="<?php echo get_template_directory_uri(); ?> '/css/style.css'" rel="stylesheet">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belanosima&family=Just+Another+Hand&family=Raleway:wght@100&family=Space+Mono&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <?php wp_head() ?>
</head>
<body> 
    <header>
    <div class="collapse" id="navbarSupportedContent">
        <div id="logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo get_template_directory_uri(); ?> '/assets/logo.png'" alt="Votre Logo">
            </a>
        </div>
        <div class="menu">
        <?php wp_nav_menu([
            'theme_location' => 'header', 
            'container' => false,
            'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0'
        ]) 
        ?>
        </div>
        </div>
        </header>


<div class="container">
    

