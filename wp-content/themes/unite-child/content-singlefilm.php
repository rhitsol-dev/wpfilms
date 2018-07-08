<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header page-header">
		<?php 
			if ( of_get_option( 'single_post_image', 1 ) == 1 ) :
					the_post_thumbnail( 'unite-featured', array( 'class' => 'thumbnail' )); 
			endif;
		?>
		<h1 class="entry-title "><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		
		<h3><?php _e('MOVIE INFO', 'unite-child') ?> </h3>
		<ul class="film-details">
			<li>
				<!-- Country -->
				<strong><?php _e('Country', 'unite-child') ?> :</strong>
				<?php do_action('get_films_taxonomies', get_the_ID(), 'country'); ?>
			</li>
			<li>
				<!-- Genre -->
				<strong> <?php _e('Genre', 'unite-child') ?> :</strong>
				<?php do_action('get_films_taxonomies', get_the_ID(), 'genre'); ?>
			</li>
			<li>
				<!-- Ticket Price -->
				<strong> <?php _e('Ticket Price', 'unite-child') ?> :</strong>
				<?php 
					if( get_field('ticket_price') ) {
						echo "$".get_field('ticket_price');
					} else {
						echo "-";
					}
				?>
			</li>
			<li>	
				<!-- Release Date -->
				<strong> <?php _e('Release Date', 'unite-child') ?> :</strong>
				<?php 
					if( get_field('release_date') ) {
						the_field('release_date');
					} else {
						echo "-";
					}
				?>
			</li>
		</ul>
		
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<hr class="section-divider">
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
