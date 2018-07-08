<?php
/**
 * Template Name: Film Listing Template
 *
 * This is the template that displays film listing
 */

get_header(); ?>

	<div id="primary" class="content-area col-sm-12 col-md-8">
		<main id="main" class="site-main" role="main">
			<?php do_action('get_films_listing', '-1'); ?>
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div id="content" role="main">
					<?php  the_content(); ?>
				</div><!-- #content -->
			<?php endwhile; endif; ?>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
