<?php
/**
 * Template Name: page-left-sidebar.php
 * Description: page template with sidebar
 */
get_header(); ?>


  	<div class="content">
			<div class="row-fluid">
				
				
				<!-- SIDEBAR -->
				<?php get_sidebar();?>
				
				
				<!-- CONTENT -->
				<div class="span8">
					
					<!-- THE LOOP -->
					<?php while(have_posts()) : the_post(); ?>
    					<div class="post">
	   						<div class="text page">
	    						<?php the_content(); ?>
	    					</div>
    					</div>
    					<?php endwhile; ?>
    					
				</div>
				
				
				
			</div> <!-- END ROW-FLUID -->
		</div><!-- END CONTENT -->	
	
	<?php get_footer();?>	
