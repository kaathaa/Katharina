	<?php $backgroundImage = get_field('background-image'); ?>
	
	<section id="<?php the_title(); ?>" 
		<?php if(!empty($backgroundImage)): ?>
			style="background-image: url(<?php echo $backgroundImage['url']; ?>); background-size:cover;" 
		<?php endif; ?>	
	>
	
	
	

		<div id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
			<div class="row">			
				<?php 
				global $post;
				if( ! has_shortcode( $post->post_content, 'columns') ) { ?>
					<div class="twelve columns">
						<?php the_content(); ?>
					</div>	
				<?php 
				} else { 
					the_content();
				}?>					
			</div><!--/row-->
		</div>
	</section>

