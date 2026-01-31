<?php get_header(); ?>
<div class="container m">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          By: <?php the_author(); ?>
        <p><?php the_excerpt(); ?></p>
<?php endwhile; else : ?>
        <p>Sorry, no posts were found!</p>
<?php endif; ?>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>