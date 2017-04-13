	<section id="<?php the_title(); ?>" <?php if ( get_field('background-image') ) { echo 'style="background-image: url(' . get_field('background-image') . ')"'; } ?>>

		<div id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
			<div class="row">
				<div class="twelve columns">
					<h3><?php the_title(); ?></h3>
				</div>
			</div><!--/row-->
			<div class="row">
			
				<?php 
				global $post;
				if( !is_a( $post, 'WP_Post' ) && has_shortcode( $post->post_content, 'columns') ) { ?>
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

