<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 */
get_header(); ?>
<div class="container-fluid bg-dark p-2">
  <h1  class="text-white text-center display-4"><?php _e( '404 Not Found', 'wpreboot' ); ?></h1>
  </div>
<div class="container mt-3 text-center">
					<h2><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'wpreboot' ); ?></h2>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'wpreboot' ); ?></p>
					<?php get_search_form(); ?>
					<img src=<?php echo get_template_directory_uri().'/assets/404.png' ?> width="200px">
            </div> <!-- 404.php.page -->
<?php get_footer(); ?>