<?php
    get_header();
?>

    <?php 
    // Nous faisons ici notre requête personnelle pour sélectionner les posts de type ANNONCE correspondants à la catégorie choisie par l'internaute, et passée en GET dans l'URL :
    $current_cat = get_query_var('category_name');  // cette fonction va chercher la valeur de la catégorie utilisée par la requête principale de WP avant d'entrer dans cette page. Elle correspond à la catégorie sur laquelle on a cliqué et qui est passée dans l'URL.


   // var_dump($current_cat);  // pour vérifier que l'on récupère bien la catégorie
    
    $arg = array (  // un array pour déclarer les variables à passer à la requête de sélection ci-après
        'post_type'     => 'annonce',  // on demande de sélectionner le type "annonce" (slyg du CPT)
        'category_name' => $current_cat  // et de sélectionner la catégorie de $current_cat, celle qui est choisie par l'internaute
    );
    

    $query = query_posts($arg);  // sélectionne en BDD les posts qui correspondent aux arguments mis dans $arg ci dessus (= les annonces de la catégorie choisie). Remarque : cette requête remplace complètement la requête principale de WP => il faut donc en fin de script restaurer cette requête avec la fonction wp_reset_query().
    
    
    ?>


<div class="col-lg-9">

    <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
    ?>

        <div class="row cat-info">
            
            <div class="col-lg-3">
                <a href="<?php the_permalink(); ?>"><img class="img-fluid" src="<?php the_field('photo'); ?>" alt=""></a>
            </div>

            <div class="col-lg-9">
                <h4>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h4>

                <div>
                    <span>Prix : </span><?php the_field('prix'); ?> euros
                </div>
            </div>

        </div>

    <?php
        endwhile;
        else :
            echo '<p>Aucune annonce ne correspond à vos critères...</p>';
        endif;
    ?>

</div>

<div class="col-lg-3">

    <?php
    get_sidebar('droite');   // inclusion de sidebar-droite.php
    ?>

</div>






<?php
    get_footer();

    wp_reset_query(); // on n'oublie pas de restaurer la requête principale
?>