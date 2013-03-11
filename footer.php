@@ -0,0 +0,20 @@
+   <div class="footer">
+ 		<div class="row-fluid">
+ 			<div class="span4">
+ 				<?php dynamic_sidebar('footer-left'); ?>
+ 			</div>
+ 			
+ 			<div class="span4">
+ 				<?php dynamic_sidebar('footer-middle'); ?>
+ 			</div>
+ 			
+ 			<div class="span4">
+ 				<?php dynamic_sidebar('footer-right'); ?>
+ 			</div>
+ 	</div>
+ </div><!-- END CONTAINER -->
+ 
+ <!-- WP FOOTER JAVASCRIPT PLUGINS -->
+ <?php wp_footer(); ?> 
+ 
+ </body>
