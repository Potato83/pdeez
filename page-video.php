<?php
/*
Template Name: Video Page 
 */
get_header(); ?>


<div class="video">

<?php while ( have_posts() ) : the_post(); ?>
					
	<?php the_content(); ?>
	
<?php endwhile; ?> 


</div>




<?php get_footer(); ?>