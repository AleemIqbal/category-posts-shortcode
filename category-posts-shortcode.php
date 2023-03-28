<?php
/**
 * Plugin Name: Category Posts Shortcode
 * Plugin URI: https://www.bigtechies.com
 * Description: A simple plugin that adds a shortcode to display posts from a specified category.
 * Version: 1.0.0
 * Author: Your Name
 * Author URI: https://www.bigtechies.com
 * License: GPL2
 */

 // Add shortcode for displaying category posts with a heading
function category_posts_shortcode( $atts ) {
    // Set default attributes
    $atts = shortcode_atts( array(
        'category' => '',
    ), $atts );

    // Get the category ID from the slug
    $category = get_category_by_slug( $atts['category'] );
    $cat_id = $category->term_id;
  // Get the category link
    $cat_link = get_category_link( $cat_id );
	
    // Query the posts in the category
    $args = array(
        'category__in' => array( $cat_id ),
        'posts_per_page' => -1,
    );
    $query = new WP_Query( $args );

    // Start the output string
    $output = '';

    // Add the category heading to the output
    $output .= '<section data-next="latest" class="listingResultsWrapper mixedPrimary mixedPrimary"><h2 class="list-title"><a class="list-heading-link"  href="' . $cat_link . '"> ' . $category->name . '</a></h2>';

    // Loop through the posts and add them to the output
    if ( $query->have_posts() ) {
        $output .= '<div class="ListingResults" data-sort="page" data-listkey="mixedPrimary">';
        while ( $query->have_posts() ) {
            $query->the_post();
            $output .= '<div class="listingResult small"><a href="' . get_permalink() . '"> <h3 class="article-name">' . get_the_title() . '</h3></a></div>';
        }
        $output .= '</div></section>';
    } else {
        $output .= 'No posts found.';
    }

    // Reset the post data and return the output
    wp_reset_postdata();
    return $output;
}
add_shortcode( 'category_posts', 'category_posts_shortcode' );

function category_posts_shortcode_enqueue_styles() {
    wp_enqueue_style( 'category-posts-shortcode', plugin_dir_url( __FILE__ ) . 'css/category-posts-shortcode.css' );
}
add_action( 'wp_enqueue_scripts', 'category_posts_shortcode_enqueue_styles' );