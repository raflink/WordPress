<?php while ( have_posts() ) : the_post(); ?>
        
        <!-------------------
		    Snale/Page wrap
		--------------------->	
            
            <div id="content" class="container clearfix">
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
					
					<ul class="post_meta">
                        <?php CustomPostShowMeta('post');?>
                    	<?php the_author_image();?>
					</ul><!--End .post_meta-->  
					
                    <?php 
					
					$teddy_post_share = get_post_meta(get_the_ID(), 'teddy_post_share', true);
					$teddy_post_comment = get_post_meta(get_the_ID(), 'teddy_post_comment', true);
					
					?>
                    <?php if($teddy_post_share == 'true'): ?>
                    
					<ul class="post_social">
						<li>
							<iframe scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:71px; height:20px;" allowtransparency="true" src="http://www.facebook.com/plugins/like.php?href=<?php the_permalink() ?>&layout=button_count&show_faces=true&width=80&action=like&colorscheme=light"></iframe>
						</li>
						<li>
							<iframe scrolling="no" frameborder="0" style="width:78px; height:20px; overflow:hidden;" src="http://platform.twitter.com/widgets/tweet_button.html?&show_count=true&url=<?php the_permalink() ?>" allowtransparency="true"></iframe>
						</li>
						<li>
							<iframe scrolling="no" frameborder="0" align="left" style="border:none; overflow:hidden; height:20px; width:60px;" src="https://plusone.google.com/u/0/_/+1/fastbutton?url=<?php the_permalink() ?>&amp;size=medium&amp;annotation=bubble&amp;lang=en">
							</iframe>
						</li>
						
					</ul><!--End .post_social-->
                    
                    <?php endif; ?>
                    
                    <?php if($teddy_post_comment == 'true'): 		
					
					////////////////
					//comments area
					////////////////
					 if (comments_open()) { comments_template(); } 
                    
                     endif; ?>
					
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