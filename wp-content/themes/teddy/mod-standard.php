<?php 
$teddy_layout = get_post_meta(get_the_ID(), 'teddy_layout_checked', true);
$teddy_color = get_post_meta(get_the_ID(), 'teddy_color_checked', true);

$image_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full'); 

if($teddy_layout != 'teddy_layout_blog'):
?>

            <?php  if(has_post_thumbnail()): ?>
            
            <!-- 2 Cols / Big image and text Unit  -->
			<section class="list_item container <?php if($teddy_color){ echo 'block_bg_'.$teddy_color; }?>">
				<div class="listitem_bigimg span8"><a href="<?php echo $image_thumbnail[0];?>" class="lightbox" rel="post<?php echo get_the_ID();?>"><?php echo get_the_post_thumbnail(get_the_ID(), 'post-list-thumb' );?></a></div><!--End .listitem_bigimg-->
				
				<div class="listitem_info span4">
					<div class="listitem_info_wrap">
						<h3 class="post-title"><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h3>
						<div class="listitem_des"><?php the_excerpt();?></div>
						<!--<div class="listitem_des"><?php the_content();?></div>-->
						<ul class="gallery_meta visible-desktop">
							<?php CustomPostShowMeta('gallery');?>
						</ul>
					</div><!--End .listitem_info_wrap-->
				</div><!--End .listitem_info-->	
			</section>
            
            <?php else: ?>
            
            <!-- Fullwidth text -->
			<section  class="list_item container <?php if($teddy_color){ echo 'block_bg_'.$teddy_color; } ?>">
				<div id="post-<?php the_ID(); ?>" <?php $classes = array( 'listitem_info', 'fulltext'); post_class( $classes ); ?>>
					<div class="listitem_info_wrap">
						<h3 class="post-title"><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h3>
						<div class="listitem_des"><?php the_excerpt();?></div>
						<!--<div class="listitem_des"><?php the_content();?></div>-->
						<ul class="gallery_meta">
							<?php CustomPostShowMeta('gallery');?>
						</ul>
					</div>
				</div><!--End .listitem_info-->	
			</section>
            
            <?php endif;?>

<?php else: ?>
			
			<?php if(has_post_thumbnail()): ?>
            
            <!-- 2 Cols with date / Big image and text Unit 620x380 -->
			<section class="list_item container <?php if($teddy_color){ echo 'block_bg_'.$teddy_color; }?>">
				<div class="listitem_bigimg span8"><a href="<?php echo $image_thumbnail[0];?>" class="lightbox" rel="post<?php echo get_the_ID();?>"><?php echo get_the_post_thumbnail(get_the_ID(), 'post-list-thumb' );?></a></div><!--End .listitem_bigimg-->
				
				<div class="listitem_info span4">
					<span class="date-block"><span class="date-block-big"><?php echo get_the_time('d');?></span><span class="date-block-m"><?php echo get_the_time('M');?></span><span class="date-block-y"><?php echo get_the_time('Y');?></span></span>
					<div class="listitem_info_wrap">
						<h3 class="post-title"><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h3>
						<div class="listitem_des"><?php the_excerpt();?></div>
						<!--<div class="listitem_des"><?php the_content();?></div>-->
						<ul class="gallery_meta visible-desktop">
							<?php CustomPostShowMeta('gallery');?>
						</ul>
					</div><!--End .listitem_info_wrap-->
				</div><!--End .listitem_info-->	
			</section>
            
            <?php else: ?>
            
            <!-- Fullwidth text -->
			<section class="list_item container <?php if($teddy_color){ echo 'block_bg_'.$teddy_color; }?>">
				<div class="listitem_info fulltext">
					<span class="date-block"><span class="date-block-big"><?php echo get_the_time('d');?></span><span class="date-block-m"><?php echo get_the_time('M');?></span><span class="date-block-y"><?php echo get_the_time('Y');?></span></span>
					<div class="listitem_info_wrap">
						<h3 class="post-title"><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h3>
						<div class="listitem_des"><?php the_excerpt();?></div>
						<!--<div class="listitem_des"><?php the_content();?></div>-->
						<ul class="gallery_meta">
							<?php CustomPostShowMeta('gallery');?>
						</ul>
					</div>
				</div><!--End .listitem_info-->	
			</section>
            
            <?php endif;?>
            
			
<?php endif; ?>