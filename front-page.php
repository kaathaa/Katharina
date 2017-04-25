<?php get_header(); ?> 	

		<?php	
		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile;
		else :
			_e( '' );
		endif;
		?>	
	     
		<?php 
			global $post;
			$child_pages_args = array(
									'post_type'     =>  'page',
									'post_parent'   =>  $post->ID,
									'post_status'   =>  'publish',
									'orderby'       =>  'menu_order',
									'order'         =>  'ASC',
									'posts_per_page'=>   -1,
									'nopaging'      =>  true
									);
									
			$child_pages = new WP_Query( $child_pages_args );
			if ( $child_pages->have_posts() ) : while ( $child_pages->have_posts() ) : $child_pages->the_post();
				get_template_part('template_parts/content-child');
			endwhile;
			endif;  
		  wp_reset_postdata(); 
		?>          
	
<?php
get_footer();