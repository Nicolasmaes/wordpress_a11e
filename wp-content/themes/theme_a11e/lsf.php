<?php
/*
Template Name: lsf
*/
get_header();
?>
<div class="margin">

<div class="main__lsf">
<h2 class="main__lsf__paragraphe__titre" style="margin-bottom:1.5rem;"> Essayez notre traducteur </h2>
<div id="container" style="margin-bottom:1.5rem;">
	<input type="text" id="copy-text" placeholder="Ecrivez le mot à traduire."></textarea>
</div>
<div id="lsf">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
	<?php endwhile;
	endif; ?>
</div>
</div>
</div>
	<?php get_footer(); ?>