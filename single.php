<?php get_header(); ?>

<div class="container">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <h2><?php the_title(); ?></h2>
          By: <?php the_author(); ?>
       <?php the_content(); ?>
<?php endwhile; else : ?>
        <p>Sorry, no post was found!</p>
<?php endif; ?>
</div>

<?php get_footer(); ?>