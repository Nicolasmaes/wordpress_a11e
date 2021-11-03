<footer>
    <img src="<?= get_template_directory_uri(); ?>/assets/images/pictures/Sans-titre-2.png" alt="Bannière bleue">
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'footer',
            'menu_class' => 'footer_menu', // ma classe personnalisée 
        )
    );
    ?>

    <!--         <div class="footer_menu">
            <a href="../pages/credits.php">Sources</a> 
            <a href="../pages/mentions_legales.php">Mentions légales</a>
            <a href="../pages/contact.php">Contact</a>
        </div> -->
</footer>
<?php wp_footer(); ?>
</body>

</html>