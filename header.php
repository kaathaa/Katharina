 <!DOCTYPE html>
<html lang="de">
<head>

	<meta charset="utf-8">
	<title>Katharina</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

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