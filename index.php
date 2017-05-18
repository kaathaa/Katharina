<?php get_header(); ?>	
		<div class="container">  
			<div class="row">
				<div class="twelve columns">	
					<?php	
						if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<div class="static-content">
								<h3><?php the_title(); ?></h3>
								<?php the_content(); ?>
							</div>
							<?php endwhile;
						else :
							_e( 'Sorry, no posts matched your criteria.', 'katharina' );
						endif;
					?>				
				</div>
			</div>
		</div>
<?php get_footer(); ?>
