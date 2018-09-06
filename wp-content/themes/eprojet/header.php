<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"><!-- la fonction bloginfo() fournit des infos sur le site, ici elle fait un echo de son charset -->
    <title><?php bloginfo('name'); ?></title><!-- ici on fait un echo du nom du site qui est paramétré dans back-office > réglages > général > titre du site -->

    <!-- CSS Bootstrap4 -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- CSS du thème -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css"><!-- ici on fait un echo du chemin du dossier du thème actif dans lequel on est -->

    <?php
        wp_head(); // intègre des éléments indispensable a WP, comme les fichiers CSS et JS inclus dans functions.php, ou la barre d'administration en front quand on est connecté en tant qu'admin. Cette fonction est obligatoire ici.
    ?>
</head>
<body <?php body_class(); ?> ><!-- on affiche les classes de la balise body générées automatiquement par WP -->

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <div class="row" style="width:100%" >

                <div class="navbar-brand col-lg-3">
                    <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a><!-- bloginfo('url') fait un echo de l'url du site paramétrée dans BO > réglages > général > url -->
                </div>

                <p class="col-lg-9 texte-description"><?php bloginfo('description'); ?></p><!-- fait un echo du slogan paramétré dans BO > réglages > slogan -->

                <div class="col-lg-12">
                    <!-- ici le menu de navigation -->
                    <?php
                        wp_nav_menu(array(  // cette fonction permet d'appeler le menu que nous avons déclaré dans functions.php
                            'theme_location'    => 'primary',  // correspond à l'id du menu déclaré dans functions.php
                            'menu_class'        => 'navbar-nav'  // pour ajouter une classe CSS à notre menu
                        ));
                    ?>
                </div>

                </div><!-- fin .row -->
            </div><!-- fin .container -->
        </nav>
    </header>

    <!-- ici le bandeau -->
    <?php
        if(is_front_page()) :  // si on est sur la pagge d'accueil, on affiche l'entête avec sa zone de widgets
    ?>

    <div id="entete" class="align-items-center">

        <div class="container">
            <?php 
                dynamic_sidebar('region-entete');  // appelle la zone de widget d'id "region-entete" déclarée dans functions.php
            ?>
        </div>
    
    </div>

    <?php
        endif;
    ?>


    <section class="container">
        <div class="row">   <!-- attention : ces 2 balises sont fermées dans le fichier footer.php -->
