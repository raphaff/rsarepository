<?php /* Template Name: ALLPAGES */ ?>

<?php get_header(); ?>
<div class="container-fluid bg-dark p-2">
       <h2 class="text-white display-4 text-center"><?php the_title(); ?></h2>
</div>
<div class="container mt-3">
	<div class="row g-5">
		<div class="col-md-8">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php wp_list_pages(array('sort_column' => 'post_date', 'sort_order' => 'desc')); ?>
<?php
$debut = 0; //The first article to be displayed
?>
<?php
$myposts = get_posts('numberposts=-1&offset=$debut');
foreach($myposts as $post) :
?>
<li><?php the_time('d/m/y') ?>: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?>
</ul>
       <?php /* the_content(); */ ?>
<?php endwhile; else : ?>
        <p>Sorry, no post was found!</p>
<?php endif; ?>
		</div> <!-- alllpages.php.page Sitemap -->
	<?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>