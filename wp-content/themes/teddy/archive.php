<?php get_header(); ?>
		<!----------
		    List
		---------->
		<div id="list_wrap" class="container">
		
		<div class="archive_title"><?php 
		if( is_category()) { 
			
			_e('Category: ','ux'); echo single_cat_title(); } 
		
		elseif(is_archive()){
			
			if(is_day()){
				printf( __( 'Archives: %s', 'ux' ), get_the_date());
			
			}elseif(is_month()){
				printf( __( 'Archives: %s', 'ux' ), get_the_date(_x( 'F Y', 'monthly archives date format', 'ux' )));
			
			}elseif(is_year()){
				printf( __( 'Archives: %s', 'ux' ), get_the_date(_x( 'Y', 'yearly archives date format', 'ux' )));
			
			}else{
				_e( 'Archives', 'twentytwelve' );
			
			};
		} 
?>
		</div>
			
			<?php CustomPostLists('archive'); ?>
			
			<div id="pagenums" class="clearfix"> 
			<?php
		 	kriesi_pagination($pages = '', $range = 2); 
			?>
			</div><!--end #pagenums -->
            
		</div><!--End #list_wrap-->
		
		<!--End list-->
		
<?php get_footer(); ?>