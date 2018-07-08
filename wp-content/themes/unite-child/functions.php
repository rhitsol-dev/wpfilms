<?php
if ( ! function_exists( 'unite_child_scripts' ) ) :
    /**
     * Enqueue Styles.
     */
    function unite_child_scripts() {

        $parent_style = 'unite-parent-style';

        wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'unite-child-style',
            get_stylesheet_directory_uri() . '/style.css',
            array( $parent_style ),
            wp_get_theme()->get('Version')
        );
    }
endif;
add_action( 'wp_enqueue_scripts', 'unite_child_scripts' );

/**
 * Films custom post type
 */
require get_stylesheet_directory() . '/inc/film-cpt.php';