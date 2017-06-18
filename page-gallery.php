<?php
/*
Template Name: Gallery Page 
 */
get_header(); ?>

<div class="gallery-wrap">
<?php while ( have_posts() ) : the_post(); ?>
					
	<?php the_content(); ?>
	
<?php endwhile; ?> 
</div>






<?php get_footer(); ?>