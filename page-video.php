<?php
/*
Template Name: Video Page 
 */
get_header(); ?>

<h1 class="post-title entry-title"><?php echo the_title(); ?></h1>

<div class="video">

<?php while ( have_posts() ) : the_post(); ?>
					
	<?php the_content(); ?>
	
<?php endwhile; ?> 


</div>




<?php get_footer(); ?>