<?php 
get_header ();?>

<div class="content-zone">
    <div class="titre_meta">
    <div class="photo-title">
        <h1><?php the_title(); ?></h1>
    </div>
    <div class="photo-meta">
        <p>RÉFÉRENCE: <?php echo get_field('reference'); ?></p>
        <p class="categ">CATÉGORIE : <?php echo the_terms(get_the_ID(),'categorie', false); ?></p>
        <p class="format">FORMAT : <?php echo the_terms(get_the_ID(),'formats', false); ?></p>
        <p>TYPE: <?php echo get_field('type'); ?></p>
        <p>ANNÉE : <?php $post_date = get_the_date('Y'); 
        echo $post_date; ?></p>
    </div>
</div>
    <div class="photo-image">
        <?php the_post_thumbnail('large'); ?>
    </div>
</div>
<div class="contact_interesse">
    <p>Cette photo vous intéresse?</p>
    <button class="contact-button">Contact</button>
</div>

<div id="banner">
		<img class="arrow arrow_left" src="<?php echo get_template_directory_uri(); ?>'/assets/precedent.png'">
		<img class="banner-img" src="<?php echo get_template_directory_uri(); ?>'/assets/nathalie-0.jpeg'" alt="Banner Print-it">
		<img class=" arrow arrow_right" src="<?php echo get_template_directory_uri(); ?>'/assets/suivant.png'">
	</div>
    <?php
// Récupérer l'ID de la catégorie actuelle de l'article en cours
$current_post_id = get_the_ID();
$categories = get_the_category($current_post_id);

if (!empty($categories)) {
    $current_category_id = $categories[0]->term_id;

    // Configuration de la requête WP_Query pour récupérer les articles de la même catégorie
    $args = array(
        'cat' => $current_category_id, // ID de la catégorie actuelle
        'posts_per_page' => 2, // Nombre d'articles à afficher
        'post__not_in' => array($current_post_id), // Exclure l'article actuel
    );

    $query = new WP_Query($args);

    // Vérifier s'il y a des articles à afficher
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            // Afficher le contenu de l'article de la même catégorie
            ?>
            <div>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div><?php the_excerpt(); ?></div>
            </div>
            <?php
        }

        // Réinitialiser les données de la requête
        wp_reset_postdata();
    } else {
        // Aucun article trouvé
        echo 'Aucun article trouvé dans la même catégorie.';
    }
}
?>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/script.js">