<?php
/*
Template Name: Home Page 
 */
get_header(); 


$gif = get_field('gif');


?>



<div class="home-wrap">
	
	<?php
	if($gif){ ?>
		<img src="<?php echo $gif['url']; ?>" alt="gif" class="gif"> 
	<?php } ?>	
	
	<?php while ( have_posts() ) : the_post(); ?>
					
		<?php the_content(); ?>
		
	<?php endwhile; ?> 
</div>



<?php get_footer(); ?>