<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>
    <div class="test">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pictures/deafgroup.png" alt="Une leçon de langue des signes">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <p class="text_landingpage text_lsf"><?php the_title(); ?></p>
        <?php endwhile;
        endif; ?>


        <header>
                <?php the_custom_logo() ?>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'main',
                    'menu_class' => 'menu_pc', // ma classe personnalisée 
                )
            );
            ?>

            <!--         <div class="menu_button">
            <div class="cross">x</div>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="menu_mobile">
            <a href="interview.php">Interview</a>
            <a href="stat.php">Statistiques</a>
            <a href="lsf.php">LSF</a>
            <a href="sous_titres_page.php">Les sous-titres</a>
        </div>
        <div class="menu_pc">
            <a href="interview.php">Interview</a>
            <a href="stat.php">Statistiques</a>
            <a href="lsf.php">LSF</a>
            <a href="sous_titres_page.php">Les sous-titres</a>
        </div> -->
        </header>
    </div>