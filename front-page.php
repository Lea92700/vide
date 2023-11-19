</div>
<?php 
/*
Template Name: front page
*/ 

?>
<?php get_header (); ?>

<img class="photo_event" src="wp-content/themes/test/assets/photo_header.png">

<div class="filtre">
    <div class="filtre_taxo">
        <div class="filtre_categ">
            <form class="js-filter-form" method="post">
                <?php
                $terms = get_terms('categorie');
                $select = "<div class='filtre'><select name='categorie' id='cat1' class='postform'>";
                $select .= "<option value='-1'>CATÉGORIES</option>";
                foreach ($terms as $term) {
                    if ($term->count > 0) {
                        $select .= "<option value='" . $term->slug . "'>" . $term->name . "</option>";
                    }
                }
                $select .= "</select></div>";
                echo $select;
                ?>
            </form>
        </div>
    </div>
</div>

        <div class="filtre_form">
            <form class="js-filter-form" method="post">
                <?php
                $terms = get_terms('formats');
                echo "<div class='filtre'><select name='format' id='format1' class='postform'>";
                echo "<option value='-1'>FORMATS</option>";
                foreach ($terms as $term) {
                    if ($term->count > 0) {
                        echo "<option value='" . esc_attr($term->slug) . "'>" . esc_html($term->name) . "</option>";
                    }
                }
                echo "</select></div>";
                ?>
            </form>
        </div>
    </div>
    <div class="filtre_tri">
        <form class="js-filter-form" method="post">
            <div class='date'>
                <select name='date' id='date1' class='postform'>
                    <option value='-1'>TRIER PAR</option>
                    <option value='nouveaute'>Nouveauté</option>
                    <option value='anciens'>Les plus anciens</option>
                </select>
            </div>
        </form>
    </div>
</div>
<section class="accueil_aleatoire">
    <div class="accueil_aleatoire_photo">
        <?php query_posts(
            array(
                'post_type' => 'photos',
                'posts_per_page' => 5,
                'orderby' => 'rand',
            )
        ); ?>
        <?php if (have_posts()):
            while (have_posts()):
                the_post(); ?>
                <img class="photoaleatoire"src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>" <?php endwhile;
        endif; ?>>
    </div>
    </section>
    
   
