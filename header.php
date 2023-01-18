<!DOCTYPE html>

<html lang="fr">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="WoWFans est un blog dédié aux joueurs de World of Warcraft. Il permet de s’informer des actualités liées au jeu vidéo et de suivre des guides">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="desktop" id="header">
        <?php wp_nav_menu(array(
        'theme_location' => 'menu-desktop',
        'container' => 'nav')); ?>
    </header>

    <header class="mobile" id="header">
        <a class="title" href="<?php bloginfo('url') ; ?>">WoWFans</a>
        <span class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </span>
        <div id="myLinks">
            <?php wp_nav_menu(array(
                'theme_location' => 'menu-mobile',
                'container' => 'nav')); ?>
        </div>
    </header>