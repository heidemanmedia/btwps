<?php
/**
 * Template Name: single.php
 * Description: standalone post template
 */
get_header(); ?>


  	<div class="content">
			<div class="row-fluid">
				
				<!-- CONTENT -->
				<div class="span8">
					
					<!-- THE LOOP -->
					<?php while(have_posts()) : the_post(); ?>
    					<div class="post">
    						<div class="title">
    							<h1><?php the_title();?> <span><?php the_date();?></span></h1>
    						</div>
							<div class="separator">
								
							</div>
							<div class="text page">
    							<?php the_content(); ?>
    						</div>
    					</div><!-- END POST -->
    					<?php endwhile; ?>
    					
    					<!-- COMMENTS -->
    					<hr>
    					<?php comments_template('',true); ?>
				</div>
				
				<!-- SIDEBAR -->
				<?php get_sidebar();?>
				
				
			</div> <!-- END ROW-FLUID -->
		</div><!-- END CONTENT -->
	
	
	
	<?php get_footer();?>	
