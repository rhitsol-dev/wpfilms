<?php
/**
 * Enqueue Styles.
 */
if ( ! function_exists( 'unite_child_scripts' ) ) {
	
	function unite_child_scripts() {

		$parent_style = 'unite-parent-style';
	 
		wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'unite-child-style',
			get_stylesheet_directory_uri() . '/style.css',
			array( $parent_style ),
			wp_get_theme()->get('Version')
		);
	}
	add_action( 'wp_enqueue_scripts', 'unite_child_scripts' );
}

/**
 * Films custom post type
 */
require get_stylesheet_directory() . '/inc/film-cpt.php';

/**
* Function to get the selected taxonomies
*/
if ( ! function_exists( 'get_films_taxonomies_func' ) ) {
	
	function get_films_taxonomies_func( $post_id , $taxonomy_name )  {
			
		$selected_taxonomies = get_the_terms( $post_id, $taxonomy_name ); //get the selected terms
		if( $selected_taxonomies ) {
			foreach ( $selected_taxonomies as $value) {
				if ($value === end($selected_taxonomies)) { //If last element
					echo $value->name;
				} else {
					echo $value->name.", ";
				}
			}
		} else {
			echo "-";
		}
	}
	add_action( 'get_films_taxonomies', 'get_films_taxonomies_func', 10, 2 );
}


/**
* Function to get the films listing (WP Query)
*/
if ( ! function_exists ( 'get_films_listing_func' ) ) {
	
	function get_films_listing_func($no_of_films) {
		
		$args = array(
			'post_type'        => 'films',
			'posts_per_page'   => $no_of_films
		);
		$query = new WP_Query( $args ); //WP Query to get the films
		if ( $query->have_posts() ) {
			?>
			<div class="row">
			<?php 
				while ( $query->have_posts() ) {
				$query->the_post();
					?>
					<div class="col-md-12 film-wrap">
						<a href="<?php the_permalink(); ?>" rel="bookmark">
							<?php the_post_thumbnail( 'unite-featured', array( 'class' => 'thumbnail' )); ?>
							<h3 class="film-entry-title"><?php the_title(); ?></h3>
						</a>
						<div class="entry-content">
							<?php the_excerpt(); ?>
						</div><!-- .entry-content -->
						
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
						<hr class="section-divider">
					</div>
					
					<?php
				} // end while
				?>
			</div>
			<?php 
		} // end if
		wp_reset_query();
	}
	add_action( 'get_films_listing', 'get_films_listing_func' );
}

/**
* Shortcode for listing films
*/
if ( ! function_exists ( 'films_listing_shortcode_func' ) ) {
	
	function films_listing_shortcode_func( $atts ) {
		extract( shortcode_atts( array(
			'no_of_films'  => '-1',
		), $atts ) );
		
		$output = '';
		ob_start();
		
			do_action('get_films_listing', $no_of_films);
			
		$output = ob_get_contents();
		ob_end_clean();
		return $output;
	}
	add_shortcode( 'films_listing', 'films_listing_shortcode_func' );
}