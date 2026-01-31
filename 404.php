<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 */
get_header(); ?>
<div class="container">
  <h1 class="mt-5"><?php _e( 'Not Found', 'wpreboot' ); ?></h1>
					<h2><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'wpreboot' ); ?></h2>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'wpreboot' ); ?></p>
					<?php get_search_form(); ?>
            </div>
<?php get_footer(); ?>
