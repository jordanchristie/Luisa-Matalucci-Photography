<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Luisa_Matalucci_Photography
 */

?>

<?php if (!is_front_page()): ?>
<div class="blog-layout">
	<article class="blog-card" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta">
					<?php
					luisamatalucciphotography_posted_on();
					luisamatalucciphotography_posted_by();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<?php luisamatalucciphotography_post_thumbnail(); ?>

		<div class="blog-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->
		<footer class="entry-footer">
			<?php luisamatalucciphotography_entry_footer(); the_post_navigation(); ?>
			
		</footer><!-- .entry-footer -->
	</article><!-- #post-<?php the_ID(); ?> -->
<?php get_sidebar(); endif;?>
</div>


