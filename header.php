<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php wp_title('|',true,'right');?><?php bloginfo('name');?></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php if( get_field( 'favicon' , 'option' ) ): ?>
		<link rel="shortcut icon" href="<?php the_field( 'favicon' , 'option' ); ?>" />
	<?php endif; ?>

	<?php wp_head();?>
</head>
<body <?php body_class(); ?>>

	<header>
		<!-- Static navbar -->
		<nav class="navbar navbar-expand-md mb-4">
	    	<a class="navbar-brand" href="<?php echo home_url(); ?>">
          		<?php if( get_field('site_logo' , 'option') ): ?>
	          		<img src="<?php the_field('site_logo' , 'option'); ?>" alt="<?php bloginfo('name');?>" />
	          	<?php endif; ?>
          	</a>
	      	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	        	<span class="navbar-toggler-icon"></span>
	      	</button>
	      	<div class="collapse navbar-collapse" id="navbarCollapse">
	      		<?php
	            	$defaults = array(
		                'menu'            => 'Main Menu',
		                'container'       => false,
		                'menu_class'      => 'menu',
		                'echo'            => true,
		                'fallback_cb'     => 'wp_page_menu',
		                'items_wrap'      => '<ul id="%1$s" class="%2$s navbar-nav mr-auto">%3$s</ul>',
		                'depth'           => 0
	              	);
	              	wp_nav_menu( $defaults );
	            ?>
	      	</div>
	    </nav>
	</header>