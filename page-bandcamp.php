<?php
/*
Template Name: Bandcamp Page 
 */
get_header(); ?>

<h1 class="post-title entry-title"><?php echo the_title(); ?></h1>

<?php while ( have_posts() ) : the_post(); ?>
					
	<?php the_content(); ?>
	
<?php endwhile; ?> 







<?php get_footer(); ?>