<?php
/*
Template Name: contact
*/
get_header();
?>

<?php $loop = new WP_Query((array('post_type' => 'équipes', 'order' => 'ASC'))); ?>
<?php while ($loop->have_posts()) : $loop->the_post(); ?>
    <div class="main__contact__duo">
        <div class="main__contact__duo__card">
                <?php the_post_thumbnail() ?>
                <?php the_content() ?>
        </div>
    </div>
<?php endwhile;
wp_reset_query(); ?>

<?php get_footer(); ?>