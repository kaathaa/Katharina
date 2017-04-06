<?php get_header(); ?> 				
	<div class="site-content">         
		<?php 
			global $post;
			$child_pages_query_args = array(
									'post_type'     =>  'page',
									'post_parent'   =>  $post->ID,
									'post_status'   =>  'publish',
									'orderby'       =>  'menu_order',
									'order'         =>  'ASC',
									'posts_per_page'=>   -1,
									'nopaging'      =>  true
									);
									
			$child_pages = new WP_Query( $child_pages_query_args );
			if ( $child_pages->have_posts() ) : while ( $child_pages->have_posts() ) 	: $child_pages->the_post();
				get_template_part('template_parts/content-child');
			endwhile;
			endif;  
		  wp_reset_postdata(); 
		?>          
	</div> 		
<?php
get_footer();