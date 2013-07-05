<?php get_header(); 

?>
		
        <?php 
		$teddy_page_attributes_checked = get_post_meta(get_the_ID(), 'teddy_page_attributes_checked', true);
		$teddy_page_background_spacer_checked = get_post_meta(get_the_ID(), 'teddy_page_background_spacer_checked', true);
		
		if($teddy_page_background_spacer_checked == 'yes'){
			$spacer_style = 'style="margin-top:480px;"';
			$spacer_style_list  = 'style="margin-top:400px;"';
		}else{
			$spacer_style = '';
			$spacer_style_list  = '';
		}
		
		$teddy_page_pagenation_checked = get_post_meta(get_the_ID(), 'teddy_page_pagenation_checked', true);
		if(!$teddy_page_pagenation_checked) { $teddy_page_pagenation_checked = 'number'; }
		
		?>
		
		<?php if($teddy_page_attributes_checked == 'teddy_page_list'): ?>
		
		
        <!----------
		    List
		---------->
		<div id="list_wrap" class="container" <?php echo $spacer_style_list; ?>>
		
			<?php CustomPostLists('page'); 	?>
			
			<!--Pagenation-->
			
<?php 
		if($teddy_page_pagenation_checked =='number') { ?>
			
			<div id="pagenums" class="clearfix"> 
<?php
		 	kriesi_pagination($pages = '', $range = 2); 
?>
			</div><!--end #pagenums -->
			
		</div><!--End #list_wrap-->
		
<?php 
		} else if($teddy_page_pagenation_checked =='twitter') { ?>
		
		
		
		</div><!--End #list_wrap-->
		
		<div id="pagenums" class="tw_style">
			  <?php if (of_get_option('pagenavi-btn')) {  next_posts_link(__(of_get_option('pagenavi-btn'),'ux')); }else{ next_posts_link(__('Load more','ux')); } ?>
		</div>
		
<script>
  jQuery(function(){

	var $container = jQuery('#list_wrap');
	$container.infinitescroll({
		// callback		: function () { console.log('using opts.callback'); },
		navSelector  	: "#pagenums",
		nextSelector 	: ".tw_style a:last",
		itemSelector 	: ".list_item",
		dataType	 	: 'html',
		behavior		: 'twitter',
		loading: {
		img				: "<?php if (of_get_option('infi-loading')) { echo of_get_option('infi-loading'); } else { echo get_template_directory_uri(); ?>/img/loading.gif <?php  } ?>",
		msg				: null,
		msgText			: "<?php _e('Loading...','ux'); ?>",
		finishedMsg     : "<?php _e('No posts','ux'); ?>",
        }, 	
		errorCallback: function() { 
		// fade out the error message after 2 seconds
		jQuery('.tw_style a').fadeOut(400);
		jQuery('#infscr-loading').fadeOut(400); 
		}
    }, function(newElements){
    		
			jQuery('.tw_style a').fadeIn(200);
			
			/*After Infinits Scroll the new items, Need Re-run some js for them. */
			
			/* Call Nicescroll to resize window */
			
			jQuery("html").getNiceScroll().resize();
			
			/*Call Audio plsyer again */
			
			function audio_play_click(){
				jQuery('.pause').click(function(){
					var _id = jQuery(this).attr("id");
					jQuery('.audiobutton').removeClass('play');
					jQuery('.audiobutton').addClass('pause');
					jQuery(this).removeClass('pause')
					jQuery(this).addClass('play');
					jQuery("#jquery_jplayer").jPlayer("setMedia", {
						mp3: jQuery(this).attr("rel")
					});
					jQuery("#jquery_jplayer").jPlayer("play");
					jQuery("#jquery_jplayer").bind(jQuery.jPlayer.event.ended, function(event) {
						jQuery('#'+_id).removeClass('play');
						jQuery('#'+_id).addClass('pause');
					});
					audio_pause_click();
					audio_play_click();
				})
			}
			function audio_pause_click(){
				jQuery('.play').click(function(){
					jQuery(this).removeClass('play')
					jQuery(this).addClass('pause');
					jQuery("#jquery_jplayer").jPlayer("stop");
					audio_play_click();
				})
			}
			audio_play_click();
		//End audio player
		
		/*Call lightbox*/
jQuery('.lightbox').lightbox();

/* Mouseover effect*/
	if( jQuery('.images-grid-wrap').length > 0 ) {
		
		jQuery(".images-grid-wrap").hover(function(){							   
			jQuery(this).find(".back").fadeIn(200);
			var BlockW = jQuery(this).width();
			var BlockPading =  (BlockW - 112)/2;
			jQuery(this).find(".icozoom").animate({ left:BlockPading}, 300 );
			jQuery(this).find(".icomore").animate({ right:BlockPading}, 300 );
		},function() {
			jQuery(this).find(".back").fadeOut(100);
			jQuery(this).find(".icozoom").animate({ left:"0"}, 200 );
			jQuery(this).find(".icomore").animate({ right:"0"}, 200 );
		});
		
	}
             
    });  
});
</script>
<?php } else if ($teddy_page_pagenation_checked =='infinitescroll') { ?>

	
	
	</div><!--End #list_wrap-->
	
	<div id="page-nav"><?php next_posts_link('MORE'); ?></div>
	
<script>

	jQuery(function(){
		
          var $container = jQuery('#list_wrap');
          $container.infinitescroll({
        	navSelector  : '#page-nav',    // selector for the paged navigation 
        	nextSelector : '#page-nav a',  // selector for the NEXT link (to page 2)
        	itemSelector : '.list_item',     // selector for all items you'll retrieve
        	loading: {
			img				: "<?php if (of_get_option('infi-loading')) { echo of_get_option('infi-loading'); } else { echo get_template_directory_uri(); ?>/img/loading.gif<?php } ?>",
			msg				: null,
            selector        : '#content',
			msgText			: "<?php _e('Loading...','ux'); ?>",
			finished        : undefined,
			finishedMsg     :  '',
			},
			errorCallback: function() { jQuery('#infscr-loading').fadeOut('normal'); }
        },
        function( newElements ) {
              
               /*
			   After Infinits Scroll the new items, Need Re-run some js for them.
               */
			    			
			   
          }) 
	})
</script>
<?php } else { echo "<div class='page-buttom-space'></div></div><!--End #list_wrap-->"; } //End if pagenation type ?>

		<!--End list-->
		
		<?php else: ?>
		
			<?php while ( have_posts() ) : the_post(); ?>
            
                    <!-------------------
                        Snale/Page wrap
                    --------------------->	
                        
                        <div id="content" class="container" <?php echo $spacer_style; ?>>
                            <?php CustomPostHeadPicture(); ?>
                            
                            <!--Main wrap-->
                            <?php 
                            $teddy_sidebar = get_post_meta(get_the_ID(), 'teddy_sidebar_checked', true);
                            
                            if($teddy_sidebar == 'teddy_sidebar_right'){
                                $sidebar_class = ' class="span8"';
                            }elseif($teddy_sidebar == 'teddy_sidebar_left'){
                                $sidebar_class = ' class="span8 pull-right leftbar-layout"';
                            }elseif($teddy_sidebar == 'teddy_sidebar_no'){
                                $sidebar_class = '';
                            }
                            
                            ?>
                            
                            <div id="single-wrap"<?php echo $sidebar_class;?>>
                            <h1 class="content-title"><?php the_title(); ?></h1>	
                                <div class="entry">
                                    <?php the_content(); ?>
                                </div><!--End .entry-->
                         
                                
                            </div><!--End #single_wrap-->
                            
                            <!--End Main wrap-->
                            
                            <!--Sidebar-->
                            <?php if($teddy_sidebar != 'teddy_sidebar_no'):?>
                            <aside id="sidebar" class="span4">	
                                <ul class="sidebar_widget">
                                    <?php $_sidebars = get_post_meta(get_the_ID(), "teddy_sidebars_checked", true);
									if($_sidebars != 'none'){
										if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('teddy-'.$_sidebars) ) : endif;
									}else{
										dynamic_sidebar('teddy-sidebar_default');
										
									}?>	
                                </ul>
                            </aside>
                            <?php endif;?>
                            <!--END Sidebar-->
                            
                        </div><!--End #content-->
                    
                    <!--End Snale/Page wrap-->
                    
            <?php endwhile; ?>

		<?php endif; ?>

<?php get_footer(); ?>