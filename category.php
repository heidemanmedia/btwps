<?php
/**
 * Template Name: category.php
 * Description: list of posts in a specific category
 */
get_header(); ?>

  	<div class="content">
			<div class="row-fluid">
				
				<!-- CONTENT -->
				<div class="span8">
				
						<!-- THE LOOP -->
						<?php while(have_posts()) : the_post(); ?>
    					<div class="row">	
    						<div class="span4">
    						
    							<!-- FEATURED IMAGE -->
    							<?php // check if the post has a Post Thumbnail assigned to it with length en height in array 
								if ( has_post_thumbnail() ) {
								the_post_thumbnail();
								} ?> 
    						</div>	
    						<div class="span8">	
    								<h2><?php the_title();?></h2>
    								<?php the_excerpt(); ?>
    								<a href="<?php the_permalink();?>">Lees verder</a>
    						</div>
    					</div>
    					<hr>
    					<?php endwhile; ?>
				</div>
				
				<!-- SIDEBAR -->
				<?php get_sidebar();?>
				
			</div> <!-- END ROW-FLUID -->
		</div><!-- END CONTENT -->
	
	
	<?php get_footer();?>	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
