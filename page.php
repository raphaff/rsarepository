<?php get_header(); ?>

<div class="container">
  
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <h2><?php the_title(); ?></h2>
          By: <?php the_author(); ?>
          <p> <?php the_content(); ?> </p>

<?php endwhile; else : ?>
        <p>Sorry, no page content was found!</p>
<?php endif; ?>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>