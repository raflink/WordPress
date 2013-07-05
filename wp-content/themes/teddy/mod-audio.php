<?php
$teddy_artist_name = get_post_meta(get_the_ID(), 'teddy_artist_name', true);
$teddy_mp3_title = get_post_meta(get_the_ID(), 'teddy_mp3_title', true);
$teddy_mp3_url = get_post_meta(get_the_ID(), 'teddy_mp3_url', true);
$teddy_color = get_post_meta(get_the_ID(), 'teddy_color_checked', true);
$teddy_audio_layout = get_post_meta(get_the_ID(), 'teddy_audio_layout_checked', true);

if($teddy_audio_layout == 'teddy_layout_self_hosted_audio'):
?>
            <!-- 2 Cols / Big image and audio player -->
			<section class="list_item container <?php if($teddy_color){ echo 'block_bg_'.$teddy_color; }?>">
			
				<div class="listitem_bigimg span8"><?php echo get_the_post_thumbnail(get_the_ID(), 'post-list-thumb' );?></div><!--End .listitem_bigimg-->
				
				<div class="listitem_info span4">
					<div class="listitem_info_wrap">
                        <h3 class="post-title"><?php the_title();?></h3>
                        <div class="listitem_des"><?php _e('Artist: ', 'teddy'); ?><?php echo CustomMeta('teddy_artist_name'); ?></div>
						<?php if($teddy_mp3_title != ''): ?>
                        
                        <?php 
						
						if(count($teddy_mp3_title) > 5){
							$audio_player_container = 'audio_player_container';
							
						}elseif(count($teddy_mp3_title) <= 5){
							$audio_player_container = '';
						}
						
						?>
                        
							<ul id="<?php echo $audio_player_container;?>" class="listitem_des audio_player_list">
							<?php foreach($teddy_mp3_title as $num => $t): ?>
                            <li class="audio-unit"><span id="audio<?php echo get_the_ID(). $num; ?>" class="audiobutton pause" rel="<?php echo $teddy_mp3_url[$num]; ?>"></span><span class="songtitle" title="<?php echo $teddy_mp3_title[$num];?>"><?php echo CustomStrCut($teddy_mp3_title[$num],25);?></span>
                            </li>
                            
                            <?php endforeach; ?>
                            </ul>
                            
						 <?php endif; ?>
                        
					</div><!--End .listitem_info_wrap-->	
				</div><!--End .listitem_info-->	
			</section>

<?php elseif($teddy_audio_layout == 'teddy_layout_soundcloud'):?>
            
            <!-- 2 Cols / Big image and audio player -->
			<section class="list_item container <?php if($teddy_color){ echo 'block_bg_'.$teddy_color; }?>">
			<div class="soundcloud-wrap">
				<?php $teddy_soundcloud_code = get_post_meta(get_the_ID(), 'teddy_soundcloud_code', true); ?>
                <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=<?php echo $teddy_soundcloud_code;?>&amp;color=ff3900&amp;auto_play=false&amp;show_artwork=true"></iframe>
			</div><!--end .soundcloud-wrap-->
			</section>
            
            

<?php endif; ?>