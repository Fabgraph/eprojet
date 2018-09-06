<?php
    get_header(); // inclusion de header.php
?>





    <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
    ?>

            <h2 class="col-lg-12"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="col-lg-12"><?php the_content(); ?></div>

    <?php
            endwhile;
            
        else :
            echo '<p>Aucun contenu ne correspond à votre demande...</p>';
        endif;
    ?>
        <!-- Bloc de gauche -->
        <div class="col-lg-6">
            <?php
            // Affichage de la dernière annonce parue :

            // On fait notre propre requête en BDD pour sélectionner le premier post de type "annonce" :

                $arg = array (
                    'post_type'     => 'annonce',  // slug du CPT "annonce"
                    'posts_per_page' => 1          // correspond à LIMIT 1 dans SQL pour sélectionner le prmeier élément 
                );

            $query = query_posts($arg);

            // SELECT * FROM post WHERE post_type = 'annonce' ORDER BY date DESC LIMIT 1 voilà ce que fait le query_post($arg)
            ?>

            <div>

            <h2>Dernière annonce</h2>

            <?php  
                if (have_posts()) :
                    while (have_posts()) : the_post();
            ?>

                    <div>
                        <a href="<?php the_permalink(); ?>"><img class="img-fluid" src="<?php the_field('photo'); ?>" alt=""></a>

                        <h3><?php the_title(); ?></h3>

                        <div>Au prix de <?php the_field('prix'); ?> euros</div>
                    </div>
            <?php
                    endwhile;
                else :
                    echo 'Pas encore d\'annonce...';
                endif;
            ?>
        
            </div>

            <?php

            wp_reset_query(); // on n'oublie pas de restaurer la requête principale après un query_posts()

            ?>
        </div>
        

        <!-- Bloc de gauche -->       
        <div class="col-lg-6">

        <?php
            // Affichage de la dernière annonce parue :

            // On fait notre propre requête en BDD pour sélectionner le premier post de type "annonce" :

                $arg = array (
                    'post_type'     => 'professionnel',  // slug du CPT "professionnel"
                    'posts_per_page' => 3          // correspond à LIMIT 1 dans SQL pour sélectionner le prmeier élément 
                );

            $query = query_posts($arg);

            // SELECT * FROM post WHERE post_type = 'annonce' ORDER BY date DESC LIMIT 1 voilà ce que fait le query_post($arg)
            ?>

            <div>

            <h2>Les professionnel du jour</h2>

            <?php  
                if (have_posts()) :
                    while (have_posts()) : the_post();
            ?>

                    <div>

                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p>Code postal : <?php the_field('code_postal'); ?></p>
                        <p>Ville : <?php the_field('ville'); ?></p>
                        <hr>
                    </div>
            <?php
                    endwhile;
                else :
                    echo 'Pas encore de professionnel...';
                endif;
            ?>
        
            </div>

            <?php

            wp_reset_query(); // on n'oublie pas de restaurer la requête principale après un query_posts()

            ?>
            
        </div>
        
        </div>

<?php
    get_footer(); // inclusion de footer.php
?>