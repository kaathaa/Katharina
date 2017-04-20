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
				background-size: cover;
			}
		</style>
	<?php } ?>


	
	
</head>
<body <?php body_class();?>>

	<header id="home">
	<?php get_template_part('template_parts/navi'); ?>
		<div class="container">  
			<div class="row">
				<div class="twelve columns">
				</div> 
			</div>
			<div class="row">
				<div class="twelve columns">	

					<h1><a href="<?php echo home_url('/') ?>"><?php bloginfo('name'); ?></a></h1>
					<h4><?php bloginfo('description'); ?></h4>
				</div>
			</div>
		</div><!-- /.container -->
	</header>
	