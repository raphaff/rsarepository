<?php get_header(); ?>
<div class="container-fluid bg-dark p-2">
       <h2 class="text-white display-4 text-center"><?php the_title(); ?></h2>
</div>
<div class="container mt-3">
	<div class="row g-5 justify-content-center">
		<div class="col-md-8">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
       <?php the_content(); ?>
<?php endwhile; else : ?>
        <p>Sorry, no post was found!</p>
<?php endif; ?>
		</div> <!-- page.php.page -->
  </div>
</div>
<?php get_footer(); ?>