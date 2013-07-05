<?php get_header(); ?>
		<!----------
		    List
		---------->
		<div id="list_wrap" class="container">
		
			<div class="search_results"><?php printf( __( 'Search Results for %s', 'teddy' ), '<span>"' . get_search_query() . '"</span>' ); ?></div>
			
			<?php CustomPostLists('archive'); ?>
            
			<div id="pagenums" class="clearfix"> 
			<?php
		 	kriesi_pagination($pages = '', $range = 2); 
			?>
			</div><!--end #pagenums -->
			
		</div><!--End #list_wrap-->
		
		<!--End list-->
		
<?php get_footer(); ?>