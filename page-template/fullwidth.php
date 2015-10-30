<?php
/* Template Name: Full Width Page */

get_header(); ?>

	<?php get_template_part('partials/hero', 'main'); ?>

	<?php get_template_part('partials/bio'); ?>

	<?php get_template_part('partials/whatis'); ?>

	<?php get_template_part('partials/founder'); ?>

	<?php get_template_part('partials/press'); ?>


	<div id="insta" <?php fadeDownIn(20); ?>>
		<?php echo do_shortcode('[instagram-feed]'); ?>
	</div>


	<div id="map" >
		<?php echo do_shortcode('[wpgmza id="1"]'); ?>
	</div>

<?php get_footer(); ?>