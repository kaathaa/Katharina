<?php 
	$my_anchor = get_post_meta( get_the_ID(), 'child_anchor', true);

	if( ! empty( $my_anchor ) ) { ?>
		<section id="<?php echo $my_anchor; ?>">
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
		<?php
	} 
?>