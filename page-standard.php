<?php
/*
Template Name: Standard Page 
 */
get_header(); 
$gif = get_field('gif');
?>

<h1 class="post-title entry-title"><?php echo the_title(); ?></h1>

<div class="standard">

<?php while ( have_posts() ) : the_post(); ?>
					
	<?php the_content(); ?>
	
<?php endwhile; 

if($gif){ ?>
	 <img src="<?php echo $gif['url']; ?>" alt="gif" class="gif">
<?php } ?> 





</div>




<?php get_footer(); ?>