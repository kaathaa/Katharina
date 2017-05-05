	<?php $backgroundImage = get_field('background-image'); ?>
	
	<section id="<?php the_title(); ?>" 
		<?php if(!empty($backgroundImage)): ?>
			style="background-image: url(<?php echo $backgroundImage['url']; ?>); background-size:cover;" 
		<?php endif; ?>>
	
	
	

		<div id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
		
			<!--
			<div class="row">
				<div class="twelve columns">
					<h2 class="icon"><?php// the_title(); ?></h2>
				</div>
			</div>
			-->
		
		
			
						
				<?php 
				global $post;
				if( ! has_shortcode( $post->post_content, 'columns') && ! has_shortcode( $post->post_content, 'icon') ) { ?>
					<div class="row">
						<div class="twelve columns">
							<?php the_content(); ?>
						</div>
					</div>	<!--/row-->				
				<?php 
				} else { ?>		
					<div class="row">
						<?php the_content(); ?>	
					</div><!--/row-->	
				<?php }?>					
			
		</div>
	</section>
					

