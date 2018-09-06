<?php
    get_header(); // inclusion de header.php
?>




    <div class="col-lg-9">
    <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
    ?>

            <h2 class="col-lg-12"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="col-lg-12"><?php the_content(); ?></div>
            <div class="col-lg-12"><?php the_field('code_postal'); ?> - <?php the_field('ville'); ?></div>
            <div class="col-lg-12"><?php the_field('telephone'); ?></div>


    <?php
            endwhile;
            
        else :
            echo '<p>Aucun professionnel ne correspond à votre demande...</p>';
        endif;
    ?>


        <div class="col-lg-12"><p><a href="<?php bloginfo('url'); ?>/professionnel">Retour vers la sélection de professionnels</a></p></div>
    </div>

    <div class="col-lg-3">
        <?php
            get_sidebar('droite');  // inclusion du fichier qui s'appelle sidebar-droite.php
        ?>
    </div>
 



<?php
    get_footer(); // inclusion de footer.php
?>