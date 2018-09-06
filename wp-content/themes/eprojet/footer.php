    </div><!-- cette balise ferme un div ouvert dans header.php -->
</section><!-- cette balise ferme une section ouvert dans header.php -->

<footer class="container-fluid align-items-center">

    <div class="container">
        <div class="row">

            <div class="col-lg-4">
                <!-- footer de gauche -->
            		        <?php 
                		        dynamic_sidebar('colonne-bas-gauche');  
            		        ?>
            </div>

            <div class="col-lg-4">
                <p>&copy; Mes petites annonces - 2018</p>
            </div>

            <div class="col-lg-4">
                <!-- code à venir (menus) -->
                <?php
                     wp_nav_menu('secondary'); // On appelle la zone de menus d'id "secondary" directement dans un string (sans array) quand il n'y que l'id en argument
                ?>
            </div>

        </div><!-- fin .row -->
    </div><!-- fin .container -->
</footer>




<?php 
    wp_footer(); // permet d'inclure les éventuels script avant la fermeture du body s'ils sont déclarés dans le fichier functions. Cette inclusion est obligatoire.
?>


</body>
</html>