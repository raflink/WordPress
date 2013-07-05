<?php while ( have_posts() ) : the_post(); ?>
        
        <!-------------------
		    Snale/Page wrap
		--------------------->	
			
			<div id="content" class="container">
				<?php CustomPostHeadPicture(); ?>
				
				<!--Main wrap-->
                
                <?php 
				$teddy_sidebar = get_post_meta(get_the_ID(), 'teddy_sidebar_checked', true);
				
				if($teddy_sidebar == 'teddy_sidebar_right'){
					$sidebar_class = ' class="span8"';
				}elseif($teddy_sidebar == 'teddy_sidebar_left'){
					$sidebar_class = ' class="span8  pull-right leftbar-layout"';
				}
				
				$teddy_listtype_checked = get_post_meta(get_the_ID(), 'teddy_listtype_checked', true);
				$gallerys = get_post_meta(get_the_ID(), 'teddy_gallery_selected_images', true);
				
				?>
				
				<div id="single-wrap"<?php echo $sidebar_class;?>>
				
					<?php if($teddy_listtype_checked == 'teddy_listtype_slider'): ?>
                    
                    <div id="gallerypost<?php echo get_the_ID();?>" class="gallery-image carousel slide">
						<div class="carousel-inner">
							<?php
                            if($gallerys != ''){
                                foreach($gallerys as $num => $gallery){
                                    $thumb_src_preview = wp_get_attachment_image_src( $gallery, 'full');
                                    if($num == 0){$active="active ";}else{$active="";}
                                    
                                    echo '<div class="'.$active.'item"><a href="'.$thumb_src_preview[0].'" class="lightbox" rel="prettyPhoto[gallerypost'.get_the_ID().']"><img src="'.$thumb_src_preview[0].'" width="540"></a></div>';
                        
                                }
                            }
                            ?>
                        </div><!--End .carousel-inner-->
                        <a class="carousel-control left" href="#gallerypost<?php echo get_the_ID();?>" data-slide="prev">&lsaquo;</a>
                        <a class="carousel-control right" href="#gallerypost<?php echo get_the_ID();?>" data-slide="next">&rsaquo;</a>
                    </div>
                    
                    <?php else: ?>
                    
                    <div class="gallery-image">
						<?php if($teddy_listtype_checked == 'teddy_listtype_verticle'): ?>
                        
                        <ul class="gallery-grid">
						<?php 
						if($gallerys != ''){
							foreach($gallerys as $gallery){
								$thumb_src_preview = wp_get_attachment_image_src( $gallery, 'full');
								echo '<li><a href="'.$thumb_src_preview[0].'" class="lightbox" rel="prettyPhoto[post'.get_the_ID().']"><img src="'.$thumb_src_preview[0].'" /></a></li>';
					
							}
						}?>
						</ul>
                        
                        <?php endif; ?>
                        
                        <?php if($teddy_listtype_checked == 'teddy_listtype_masonry'): ?>
                        
                        <?php if($gallerys != ''): ?>
                        
                        <?php 
						foreach($gallerys as $num => $gallery){
							$thumb_src_preview = wp_get_attachment_image_src( $gallery, 'full');
							if($num == 0){
								echo '<div class="gallery-big-item"><a href="'.$thumb_src_preview[0].'" class="lightbox" rel="prettyPhoto[post'.get_the_ID().']"><img src="'.$thumb_src_preview[0].'"></a></div>';
							}
						}
						?>
                        
						<ul id="gallery-marsony" class="clearfix">
							<?php 
							foreach($gallerys as $num => $gallery){
								$thumb_src_preview = wp_get_attachment_image_src( $gallery, 'full');
								if($num > 0){
									echo '<li class="gallery-marsony-item"><a href="'.$thumb_src_preview[0].'" class="lightbox" rel="prettyPhoto[post'.get_the_ID().']"><img src="'.$thumb_src_preview[0].'" /></a></li>';
								}
							}
							?>
						</ul>
                        
                        <?php endif; endif; ?>
                        
					</div><!--End .gallery-image-->
                    
                    <?php endif; ?>
                    
                    <?php 
					
					$teddy_post_comment = get_post_meta(get_the_ID(), 'teddy_post_comment', true);
					
					?>
					
					<?php if($teddy_post_comment == 'true'): 
					
					////////////////
					//comments area
					////////////////
					 if (comments_open()) { comments_template(); } 
					
                    
                     endif; ?>
					
				</div><!--End #single_wrap-->
				
				<!--End Main wrap-->
				
				<!--Sidebar-->
				
				<aside id="sidebar" class="span4 siderbar_gallery">	
					<div class="gallery-wrap">
						<h1 class="gallery_title"><?php the_title(); ?></h1>
						<div class="gallery_con"><?php the_content(); ?>
						</div><!--END .gallery_con-->
						<ul class="gallery_meta">
							<?php CustomPostShowMeta('gallery');?>
						</ul><!--End .gallery_meta-->
                        
                        <?php 
						
						$teddy_post_share = get_post_meta(get_the_ID(), 'teddy_post_share', true);
						
						?>
						
						<?php if($teddy_post_share == 'true'): ?>
						
						<ul class="gallery_social">
							<li>
							<iframe scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:20px;" allowtransparency="true" src="http://www.facebook.com/plugins/like.php?href=<?php the_permalink() ?>&layout=button_count&show_faces=true&width=80&action=like&colorscheme=light"></iframe>
							</li>
							<li style="margin-top:4px;">
							<iframe scrolling="no" frameborder="0" style="width:95px; height:20px; overflow:hidden;" src="http://platform.twitter.com/widgets/tweet_button.html?&show_count=true&url=<?php the_permalink() ?>" allowtransparency="true"></iframe>
							</li>
							<li style="margin-top:4px;">
							<iframe scrolling="no" frameborder="0" align="left" style="border:none; overflow:hidden; height:20px;" src="https://plusone.google.com/u/0/_/+1/fastbutton?url=<?php the_permalink() ?>&amp;size=medium&amp;annotation=bubble&amp;lang=en">
							</iframe></li>
						 </ul><!--End .gallery_social-->
                         
                        <?php endif; ?>
                         
					</div> <!--End .gallery-wrap-->
				</aside>
				
				<!--END Sidebar-->
				
			</div><!--End #content-->
		
		<!--End Snale/Page wrap-->
        
<?php endwhile; ?>