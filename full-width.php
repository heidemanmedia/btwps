<?php
/**
 * Template Name: full-width.php
 * Description: page template without sidebar
 */
get_header(); ?>


  	<div class="content">
			<div class="row-fluid">
				
				<!-- CONTENT -->
				<div class="span12">
					
					<!-- THE LOOP -->
					<?php while(have_posts()) : the_post(); ?>
    					<div class="post">
	   						<div class="text page">
	    						<?php the_content(); ?>
	    					</div>
    					</div>
    					<?php endwhile; ?>
    					
				</div><!-- END SPAN12 -->
				
			</div> <!-- END ROW-FLUID -->
		</div><!-- END CONTENT -->
	
	<?php get_footer();?>	
