<?php get_header(); ?>
<body <?php body_class();?>>


		<div class="container">  
			<div class="row">
				<div class="twelve columns">
				
					<?php	
						if( have_posts()) : while (have_posts() ) : the_post(); ?>
							<div class="static-content">
								<?php the_content(); ?>
							</div>
							<?php endwhile;
						else :
							__( 'Sorry, no posts matched your criteria.', 'katharina' );
						endif;
					?>				
				
				</div> 
			</div><!-- /.row-->
		</div><!-- /.container -->
	</header>

<?php get_footer(); ?>