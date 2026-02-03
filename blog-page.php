<?php /* Template Name: Blog-page.php */ ?>

<?php get_header(); ?>
<div class="container mt-3">
	<div class="row g-5">
		<div class="col-md-8">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h5 class="card-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
	<?php the_post_thumbnail(); ?>
    <p><?php the_excerpt(); ?></p>
    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Ler mais</a>
    <p class=""><small class="text-muted">By: <?php the_author(); ?> | Category: <?php the_category( ', ' ); ?> | Tags: <?php the_tags(); ?> | Posted: <?php the_date('F j, Y'); ?> at: <?php the_time('g:i a'); ?></small></p>
<?php endwhile; else : ?>
        <p>Sorry, no posts were found!</p>
<?php endif; ?>
		</div> <!-- Blog-page.php.page -->
	<?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>