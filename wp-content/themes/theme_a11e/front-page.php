<?php get_header(); ?>



<div class="margin">

    <main class="main__landing_page">

        <!--<p class="main__landing_page__title_mobile">
            Découvrons ensemble une communauté qui n'est pas assez entendue
        </p> -->

        <iframe src="https://www.youtube.com/embed/Sf7mLlImkYI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <?php $loop = new WP_Query((array('post_type' => 'liens', 'order' => 'ASC'))); ?>
<?php while ($loop->have_posts()) : $loop->the_post(); ?>
<div class="main__landing_page__miniature">
            <div class="main__landing_page__miniature__group">
                <p class="main__landing_page__miniature__group__text">
                    <span class="main__landing_page__miniature__group__text__titre"><?php the_title() ?></span> <br>
                    <span class="main__landing_page__miniature__group__text__description"><?php the_content() ?></span>
                </p>
            </div>
            <?php the_post_thumbnail() ?>
        </div>
<?php endwhile;
wp_reset_query(); ?>

    </main>

</div>

<?php get_footer(); ?>