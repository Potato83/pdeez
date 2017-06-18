<?php
/*
Template Name: Standard Page 
 */
get_header(); 
$gif = get_field('gif');
?>


<div class="standard">

<?php 

if($gif){ ?>
	 <img src="<?php echo $gif['url']; ?>" alt="gif" class="gif">
<?php }  

while ( have_posts() ) : the_post(); ?>
					
	<?php the_content(); ?>
	
<?php endwhile; ?>



</div>




<?php get_footer(); ?>