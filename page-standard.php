<?php
/*
Template Name: Standard Page 
 */
get_header(); ?>

<h1 class="post-title entry-title"><?php echo the_title(); ?></h1>

<div class="standard">

<?php while ( have_posts() ) : the_post(); ?>
					
	<?php the_content(); ?>
	
<?php endwhile; ?> 


</div>




<?php get_footer(); ?>