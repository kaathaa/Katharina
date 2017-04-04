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
</head>
<body <?php body_class();?>>
	
	<header>
		<div class="container">  
			<div class="row">
				<div class="twelve columns">
					<?php get_template_part('template_parts/navi'); ?>
				</div> 
			</div>
			<div class="row">
				<div class="twelve columns">
					<h1>KS</h1>
					<h2>Hallo ich bin Katharina</h2>
				</div>
			</div>
		</div><!-- /.container -->
	</header>
	