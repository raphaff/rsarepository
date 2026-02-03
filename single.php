<?php get_header(); ?>
<div class="container mt-3">
	<div class="row g-5">
		<div class="col-md-8">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <h2><?php the_title(); ?></h2>
          <p><small>By: <?php the_author(); ?></small></p>
		  <p class=""><small class="text-muted">By: <?php the_author(); ?> | Category: <?php the_category( ', ' ); ?> | Tags: <?php the_tags(); ?> | Posted: <?php the_date('F j, Y'); ?> at: <?php the_time('g:i a'); ?></small></p>
          <p> <?php the_content(); ?> </p>
<?php endwhile; else : ?>
        <p>Sorry, no page content was found!</p>
<?php endif; ?>
		</div> <!-- single.php.page -->
	<?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>