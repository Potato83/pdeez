<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet" href="<?=get_stylesheet_directory_uri()?>/assets/css/style.min.css" />
	<?php if(get_field('title_font', 'option')) : ?>
	<link href="https://fonts.googleapis.com/css?family=<?php the_field('title_font', 'option'); ?>" rel="stylesheet">
	<?php endif; ?>
	<?php if(get_field('menu_font', 'option')) : ?>
	<link href="https://fonts.googleapis.com/css?family=<?php the_field('menu_font', 'option'); ?>" rel="stylesheet">
	<?php endif; ?>
	<?php if(get_field('body_font', 'option')) : ?>
	<link href="https://fonts.googleapis.com/css?family=<?php the_field('body_font', 'option'); ?>" rel="stylesheet">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<style>

	/* BODY */
	<?php if(get_field('body_font', 'option')) : ?>
	body{
		font-family: <?php the_field('body_font', 'option'); ?>, <?php the_field('menu_fallback', 'option'); ?>;
	}
	<?php endif; ?>

	<?php if(get_field('body_size', 'option')) : ?>
	body{
		font-size: <?php the_field('body_size', 'option'); ?>px;
	}
	<?php endif; ?>

	/* SITE TITLE */
	<?php if(get_field('title_font', 'option')) : ?>
	.site-title a{
		font-family: <?php the_field('title_font', 'option'); ?>, <?php the_field('title_fallback', 'option'); ?>;
	}
	<?php endif; ?>

	<?php if(get_field('title_size', 'option')) : ?>
	.site-title a{
		font-size: <?php the_field('title_size', 'option'); ?>px;
	}
	<?php endif; ?>

	/* MENU */
	<?php if(get_field('menu_font', 'option')) : ?>
	.menu-item a{
		font-family: <?php the_field('menu_font', 'option'); ?>, <?php the_field('menu_fallback', 'option'); ?> !important;
	}
	<?php endif; ?>

	<?php if(get_field('menu_size', 'option')) : ?>
	.menu-item a, li.menu-item a{
		font-size: <?php the_field('menu_size', 'option'); ?>px !important;
	}
	<?php endif; ?>

	/* HOVER COLOR */
	<?php if(get_field('hover_color', 'option')) : ?>
	.menu-item a:hover, .sub-menu > .menu-item a:hover, .copyright a:hover{
		color: <?php the_field('hover_color', 'option'); ?>!important;
	}
	<?php endif; ?>

</style>

<body class="<?php hybrid_body_class(); ?>">

	<?php do_atomic( 'open_body' ); // hatch_open_body ?>

	<div id="container">
		
		<div class="wrap">

			<?php do_atomic( 'before_header' ); // hatch_before_header ?>
	
			<div id="header">
	
				<?php do_atomic( 'open_header' ); // hatch_open_header ?>
	
					<div id="branding">
						
					<?php the_custom_logo(); ?>
					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        
					<?php else : ?>
						<?php if (!get_field('hide_title', 'option')) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>	
						<?php endif; ?>
						
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<h2 class="site-description"><?php echo $description; ?></h2>
					<?php endif; ?>
					</div><!-- #branding -->
					
					<?php get_template_part( 'menu', 'primary' ); // Loads the menu-primary.php template. ?>				
	
					<?php do_atomic( 'header' ); // hatch_header ?>
	
				<?php do_atomic( 'close_header' ); // hatch_close_header ?>
	
			</div><!-- #header -->
	
			<?php do_atomic( 'after_header' ); // hatch_after_header ?>
	
			<?php do_atomic( 'before_main' ); // hatch_before_main ?>
	
			<div id="main">
				
	
				<?php do_atomic( 'open_main' ); // hatch_open_main ?>