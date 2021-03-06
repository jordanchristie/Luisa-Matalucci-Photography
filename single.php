<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Luisa_Matalucci_Photography
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="single-page">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() ); 

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		<?php get_sidebar(); ?>
		</main><!-- #main -->	
	</div><!-- #primary -->

<?php get_footer(); ?>


