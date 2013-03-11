<?php
/**
 * Template Name: gallery.php
 * Description: page to display posts in a gallery view
 */

get_header(); ?>
  	
		<!-- CONTENT -->
		<div class="content">
			<div class="row">
				<div class="span12">
					<div class="row">
						
						<!-- QUERY -->
						<?php $wp_query->query('showposts=12&cat='.get_query_var('cat').'&paged='.$paged);?>
						
						<!-- THE LOOP -->
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="span4" style="min-height:350px;">
							<h4><?php the_title();?></h4>
							<a href="<?php the_permalink() ?>">
								<?php if (has_post_thumbnail()): ?>
								<?php the_post_thumbnail('thumbnail'); ?><?php endif ?>
							</a>
							<?php the_excerpt();?>
							<p class="read-more"><a href="<?php the_permalink() ?>">Lees Verder</a></p>
						</div><!-- end span4 -->
						
						<?php endwhile; endif;?>
						<div class="row">
						  <div class="span6"><?php previous_posts_link('&laquo; Terug') ?></div>
						  <div class="offset4 span2"><?php next_posts_link('Oudere berichten &raquo;') ?></div>
						</div>
						
					</div> <!-- END ROW-FLUID -->
				</div><!-- END SPAN12 -->
			</div> <!-- END ROW-FLUID -->
		</div><!-- END CONTENT -->

	
	<?php get_footer();?>	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
