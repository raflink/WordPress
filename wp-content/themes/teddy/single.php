<?php get_header(); ?>

        <?php 

		if(has_post_format('gallery')){

			get_template_part('single','gallery');

		}else{

			get_template_part('single','standard');

		}

		?>

<?php get_footer(); ?>