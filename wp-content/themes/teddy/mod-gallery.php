<?php 
$teddy_layout = get_post_meta(get_the_ID(), 'teddy_layout_checked', true);
$teddy_color = get_post_meta(get_the_ID(), 'teddy_color_checked', true);

$teddy_gallery_images = get_post_meta(get_the_ID(), 'teddy_gallery_selected_images', true);


if($teddy_layout == 'teddy_layout_a'):
?>
            <!-- 2 Cols / Carousel Sldider Unit 620x380 -->
			<section class="list_item container <?php if($teddy_color){ echo 'block_bg_'.$teddy_color; }?>">
				<div id="post<?php echo get_the_ID();?>" class="listitem_slider carousel slide span8">
					<div class="carousel-inner">
						<?php
						if($teddy_gallery_images != ''):
						foreach($teddy_gallery_images as $num => $image):
							$thumb_src = wp_get_attachment_image_src( $image, 'full');
							$thumb_src_preview = wp_get_attachment_image_src( $image, 'post-list-thumb');
							if($num == 0){ $class = 'active '; } else { $class = ''; }
						
						?>
                        <div class="<?php echo $class;?>item"><a href="<?php echo $thumb_src[0];?>" class="lightbox slider-img-wrap" rel="post<?php echo get_the_ID();?>"><img src="<?php echo $thumb_src_preview[0];?>" /></a></div>
                        <?php endforeach; endif; ?>
					</div><!--End .listitem_slider-->
					<a class="carousel-control left" href="#post<?php echo get_the_ID();?>" data-slide="prev"></a>
					<a class="carousel-control right" href="#post<?php echo get_the_ID();?>" data-slide="next"></a>
				</div><!--End .listitem_slider-->
				
				<div class="listitem_info span4">
					<div class="listitem_info_wrap">
						<h3 class="post-title"><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h3>
						<div class="listitem_des text_des"><?php the_excerpt();?></div>
						<!--<div class="listitem_des text_des"><?php the_content();?></div>-->
						<ul class="gallery_meta visible-desktop">
							<p>ghahahahahaha</p>
							<?php CustomPostShowMeta('gallery');?>
						</ul>
					</div><!--End .listitem_info_wrap-->
				</div><!--End .listitem_info-->	
			</section>


<?php elseif($teddy_layout == 'teddy_layout_b'): ?>

			<!-- 2 Cols / 1 big and 2 thumbs and text -->
			<section class="list_item container <?php if($teddy_color){ echo 'block_bg_'.$teddy_color; }?>">
				<div class="images-grid big-2thumbs-text span8">
					<?php
					if($teddy_gallery_images != ''):
					foreach($teddy_gallery_images as $num => $image):
						$thumb_src = wp_get_attachment_image_src( $image, 'full');
						if($num == 0){
							$thumb_src_preview = wp_get_attachment_image_src( $image, 'post-gallery-429x380');
							echo '<a href="'.$thumb_src[0].'" class="lightbox" rel="post'.get_the_ID().'"><img src="'.$thumb_src_preview[0].'"></a>';
						}elseif($num == 1){
							$thumb_src_preview = wp_get_attachment_image_src( $image, 'post-gallery-190x190');
							echo '<a href="'.$thumb_src[0].'" class="lightbox" rel="post'.get_the_ID().'"><img src="'.$thumb_src_preview[0].'" width="190" height="189"></a>';
						}elseif($num == 2){
							$thumb_src_preview = wp_get_attachment_image_src( $image, 'post-gallery-190x190');
							echo '<a href="'.$thumb_src[0].'" class="lightbox" rel="post'.get_the_ID().'"><img src="'.$thumb_src_preview[0].'"></a>';
						}
					?>
                    <?php endforeach; endif; ?>
				</div><!--End .listitem_imgs-->
				
				<div class="listitem_info span4">
					<div class="listitem_info_wrap">
						<h3 class="post-title"><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h3>
						<div class="listitem_des text_des"><?php the_excerpt();?></div>
						<!--<div class="listitem_des text_des"><?php the_content();?></div>-->
						<ul class="gallery_meta visible-desktop">
							<?php CustomPostShowMeta('gallery');?>
						</ul>
					</div><!--End .listitem_info_wrap-->
				</div><!--End .listitem_info-->	
			</section>

<?php elseif($teddy_layout == 'teddy_layout_c'): ?>

			<!-- 2 Cols / 1 big and 3 thumbs -->
			<section class="list_item container <?php if($teddy_color){ echo 'block_bg_'.$teddy_color; }?>">
				<div class="images-grid big-3thumbs">
					<?php
					if($teddy_gallery_images != ''):
					foreach($teddy_gallery_images as $num => $image):
						$thumb_src = wp_get_attachment_image_src( $image, 'full');
						if($num == 0){
							$thumb_src_preview = wp_get_attachment_image_src( $image, 'post-gallery-559x380');
							$images_grid_wrap = 'images-grid-wrap-big';
							$thumb_img_width = 'style="width:100%;height:100%;"';
						}elseif($num == 1){
							$thumb_src_preview = wp_get_attachment_image_src( $image, 'post-gallery-190x190');
							$images_grid_wrap = 'images-grid-wrap-small';
							$thumb_img_width = 'width="190" height="189"';
						}elseif($num == 2){
							$thumb_src_preview = wp_get_attachment_image_src( $image, 'post-gallery-190x190');
							$images_grid_wrap = 'images-grid-wrap-small';
							$thumb_img_width = 'width="189" height="189"';
						}elseif($num == 3){
							$thumb_src_preview = wp_get_attachment_image_src( $image, 'post-gallery-380x190');
							$images_grid_wrap = 'images-grid-wrap-normal';
							$thumb_img_width = '';
						}
					?>
                    <?php if(($num == 0) or ($num == 1) or ($num == 2) or ($num == 3)): ?>
                    <div class="images-grid-wrap <?php echo $images_grid_wrap;?>">
                        <div class="back"><div class="backbg"></div>
                            <a class="lightbox" rel="post<?php the_ID(); ?>" title="<?php the_title(); ?>" href="<?php echo $thumb_src[0];?>"><div class="icozoom"></div></a>
                            <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><div class="icomore"></div></a>
                        </div><img src="<?php echo $thumb_src_preview[0];?>" <?php echo $thumb_img_width;?>>
                    </div><!--End .images-grid-wrap-->
                    <?php endif; endforeach; endif; ?>
				</div><!--End .listitem_imgs-->
			</section>

<?php elseif($teddy_layout == 'teddy_layout_d'): ?>
			
            <!-- fullwidth / Carousel Sldider Unit 940x380 -->
			<section class="list_item container <?php if($teddy_color){ echo 'block_bg_'.$teddy_color; }?>">
				<div id="post<?php echo get_the_ID();?>" class="listitem_slider carousel slide span12">
					<div class="carousel-inner">
						<?php
						if($teddy_gallery_images != ''):
						foreach($teddy_gallery_images as $num => $image):
							$thumb_src = wp_get_attachment_image_src( $image, 'full');
							$thumb_src_preview = wp_get_attachment_image_src( $image, 'post-gallery-940x380');
							if($num == 0){ $class = 'active '; } else { $class = ''; }
						
						?>
                        <div class="<?php echo $class;?>item"><a href="<?php the_permalink(); ?>" class="slider-img-wrap" rel="post<?php echo get_the_ID();?>"><img src="<?php echo $thumb_src_preview[0];?>"></a></div>
                        <?php endforeach; endif ?>
					</div><!--End .listitem_slider-->
					<a class="carousel-control left" href="#post<?php echo get_the_ID();?>" data-slide="prev">&lsaquo;</a>
					<a class="carousel-control right" href="#post<?php echo get_the_ID();?>" data-slide="next">&rsaquo;</a>
				</div><!--End .listitem_slider-->
			</section>

<?php elseif($teddy_layout == 'teddy_layout_e'): ?>

			<!-- 2 Cols / 2 thumbs -->
			<section class="list_item container <?php if($teddy_color){ echo 'block_bg_'.$teddy_color; }?>">
				<div class="images-grid double-thumbs">
					<?php
					if($teddy_gallery_images != ''):
					foreach($teddy_gallery_images as $num => $image):
						$thumb_src = wp_get_attachment_image_src( $image, 'full');
						$thumb_src_preview = wp_get_attachment_image_src( $image, 'post-gallery-470x380');
						if($num == 0){
							$thumb_img_width = 'style="width:469px;height:380px;"';
						}elseif($num == 1){
							$thumb_img_width = '"';
						}
					?>
                    <?php if($num < 2): ?>
                    <div class="images-grid-wrap images-grid-wrap-big">
                        <div class="back"><div class="backbg"></div>
                            <a class="lightbox" rel="post<?php the_ID(); ?>" title="<?php the_title(); ?>" href="<?php echo $thumb_src[0];?>"><div class="icozoom"></div></a>
                            <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><div class="icomore"></div></a>
                        </div><img src="<?php echo $thumb_src_preview[0];?>" <?php echo $thumb_img_width;?>>
                    </div><!--End .images-grid-wrap-->
                    <?php endif; endforeach; endif; ?>
				</div><!--End .listitem_imgs-->
			</section>

<?php elseif($teddy_layout == 'teddy_layout_f'): ?>

			<!-- 2 Cols / 1 big and 2 thumbs -->
			<section class="list_item container  <?php if($teddy_color){ echo 'block_bg_'.$teddy_color; }?>">
				<div class="images-grid big-2thumbs">
					<?php
					if($teddy_gallery_images != ''):
					foreach($teddy_gallery_images as $num => $image):
						$thumb_src = wp_get_attachment_image_src( $image, 'full');
						if($num == 0){
							$thumb_src_preview = wp_get_attachment_image_src( $image, 'post-list-thumb');
							$images_grid_wrap = 'images-grid-wrap-big';
							$thumb_img_width = '';
						}elseif($num == 1){
							$thumb_src_preview = wp_get_attachment_image_src( $image, 'post-gallery-380x190');
							$images_grid_wrap = 'images-grid-wrap-normal';
							$thumb_img_width = '';
						}elseif($num == 2){
							$thumb_src_preview = wp_get_attachment_image_src( $image, 'post-gallery-380x190');
							$images_grid_wrap = 'images-grid-wrap-normal';
							$thumb_img_width = '';
						}
					?>
                    <?php if($num < 3): ?>
                    <div class="images-grid-wrap <?php echo $images_grid_wrap;?>">
                        <div class="back"><div class="backbg"></div>
                            <a class="lightbox"rel="post<?php the_ID(); ?>" title="<?php the_title(); ?>" href="<?php echo $thumb_src[0];?>"><div class="icozoom"></div></a>
                            <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><div class="icomore"></div></a>
                        </div><img src="<?php echo $thumb_src_preview[0];?>" <?php echo $thumb_img_width;?>>
                    </div><!--End .images-grid-wrap-->
                    <?php endif; endforeach; endif; ?>	
				</div><!--End .listitem_imgs-->
			</section>
			
<?php endif; ?>