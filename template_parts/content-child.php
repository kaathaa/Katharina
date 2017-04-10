<?php 
	$my_anchor = get_field('child_anchor');

	
	if( ! empty( $my_anchor )  ) { ?>
		<section id="<?php echo $my_anchor; ?>" <?php if ( get_field('background-image') ) { echo 'style="background-image: url(' . get_field('background-image') . ')"'; } ?>>
	<?php 
	} ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
				<div class="row">
					<div class="twelve columns">
						<h3><?php the_title(); ?></h3>
					</div>
						
					<div class="twelve columns">
						<?php the_content(); ?>
					</div>					
				</div>
			</div>
		</section>

