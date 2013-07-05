 <?php get_header(); ?>
		<!----------
		    List
		---------->
		<div id="list_wrap" class="container">
		
			<?php CustomPostLists(); ?>
			
			<div id="pagenums" class="clearfix"> 
			<?php
		 	kriesi_pagination($pages = '', $range = 2); 
			?>
			</div><!--end #pagenums -->
            
		</div><!--End #list_wrap-->
		
		<!--End list-->
		
<?php get_footer(); ?>