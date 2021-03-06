<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name');?></title>
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
	<?php } else { ?>
		<style>
			header {
				height: auto;
			}
			.header-content {
				display:none;
			}
			footer {
				position: absolute;
				width: 100%;
			}
		</style>
	<?php } ?>


	
	
</head>
<body <?php body_class();?>>

	<header id="home">
	<?php if(is_front_page()) { 
			get_template_part('template_parts/navi');
		} else { 
			get_template_part('template_parts/static_nav');
		}
	?>
		<div class="container">  
			<div class="row">
				<div class="twelve columns header-content">
					<?php if ( function_exists( 'the_custom_logo' ) ) {
						the_custom_logo();
					} ?>				
					<h1 class="animated-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Hallo, ich bin <?php bloginfo('name'); ?>.</a></h1>				
				</div>
			</div>
		</div><!-- /.container -->
	</header>
	