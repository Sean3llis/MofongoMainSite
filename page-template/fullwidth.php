<?php
/* Template Name: Full Width Page */

get_header(); ?>

			
	<?php get_template_part('partials/hero', 'video'); ?>

	<?php get_template_part('partials/bio'); ?>

	<?php // get_template_part('partials/whatis'); ?>

	<?php if( !wp_is_mobile() ) : ?>
	<div id="insta">
		<?php echo do_shortcode('[instagram-feed]'); ?>
	</div>
	<?php endif; ?>

	<?php get_template_part('partials/press'); ?>


	<?php get_template_part('partials/founder'); ?>

	<?php if( !wp_is_mobile() ) : ?>
	<div id="map">
		<?php echo do_shortcode('[wpgmza id="1"]'); ?>
	</div>
	<?php endif; ?>


<?php get_footer(); ?>