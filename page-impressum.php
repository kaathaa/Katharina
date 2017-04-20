<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?></title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
	<?php wp_enqueue_script('jquery');?>
	<?php wp_head(); ?>
	
	<?php if(is_front_page()) { ?>
		<style>
			header {
				background:url(<?php header_image();?>) top center no-repeat;
			}
		</style>
	<?php } else { ?>
		<style>
			header {
				height:auto;
			}
			footer {
				position: absolute;
				width: 100%;
				bottom: 0;
			}
		</style>
	<?php } ?>


	
	
</head>
<body <?php body_class();?>>

	<header id="home">
		<?php 
		$args= array(
			'theme_location' => 'static_nav',
			'container' => 'nav',
			'menu_id'      => 'menu',
		);
		wp_nav_menu($args);
		?>
	</header>
		<div class="container">  
			<div class="row">
				<div class="twelve columns">
				
					<?php	
						if( have_posts()) : while (have_posts() ) : the_post(); ?>
							<div class="static-content">
								<h3><?php the_title(); ?></h3>
								<?php the_content(); ?>
							</div>
							<?php endwhile;
						else :
							__( 'Sorry, no posts matched your criteria.', 'katharina' );
						endif;
					?>				
				
				</div> 
			</div><!-- /.row-->
		</div><!-- /.container -->
	</header>

<?php get_footer(); ?>