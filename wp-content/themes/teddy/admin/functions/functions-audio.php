<div class="teddy_form clearfix clear formatpost">
    <div class="teddy_form_para" rel="tfb_audio">
        <div class="teddy_form_desc"><?php _e('Layout', 'teddy'); ?></div>
        <div class="teddy_form_content" rel="layout_audio">
            <div id="teddy_layout_self_hosted_audio" class="teddy_layout_box" rel="tfb_audio" style="display:none;">
                <div class="checked_btn"></div>
                <img src="<?php echo ASSETS_PATH;?>images/self_hosted_audio.png" width="106" height="43" />
            </div>
            <div id="teddy_layout_soundcloud" class="teddy_layout_box" rel="tfb_audio" style="display:none;">
                <div class="checked_btn"></div>
                <img src="<?php echo ASSETS_PATH;?>images/soundcloud.png" width="106" height="43" />
            </div>
            <?php 
			if(CustomMeta('teddy_audio_layout_checked') == ''){
				$teddy_audio_layout_checked = 'teddy_layout_self_hosted_audio';
			}else{
				$teddy_audio_layout_checked = CustomMeta('teddy_audio_layout_checked');
			}?>
            <input id="teddy_audio_layout_checked" name="teddy_audio_layout_checked" type="hidden" value="<?php echo $teddy_audio_layout_checked;?>" />
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="teddy_form_hr" rel="tfb_audio"></div>
    <div class="teddy_form_para audio_self" rel="tfb_audio">
        <div class="teddy_form_desc"><?php _e('Artist', 'teddy'); ?></div>
        <div class="teddy_form_content">
            <div class="teddy_artist_name">
                <input type="text" id="teddy_artist_name" name="teddy_artist_name" size="25" value="<?php echo CustomMeta('teddy_artist_name'); ?>" />
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="teddy_form_para audio_self" rel="tfb_audio">
        <div id="teddy_mp3_content" class="teddy_form_content">
            <?php 
			global $post;
			$teddy_mp3_title = get_post_meta($post->ID, 'teddy_mp3_title', true);
			$teddy_mp3_url = get_post_meta($post->ID, 'teddy_mp3_url', true);
			
			if($teddy_mp3_title == ''): ?>
            
				<div class="teddy_mp3_infor" rel="1">
                    <div class="teddy_mp3_title">
                        <div class="teddy_form_desc"><?php _e('MP3 Title', 'teddy'); ?></div>
                        <div class="teddy_mp3_input"><input type="text" name="teddy_mp3_title[]" value="" size="20" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="teddy_mp3_url">
                        <div class="teddy_mp3_name"><?php _e('URL', 'teddy'); ?></div>
                        <div class="teddy_mp3_input"><input type="text" name="teddy_mp3_url[]" value="" size="40" /></div>
                        <div class="teddy_mp3_add" rel="1"></div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                
			<?php else: ?>
            
				<?php foreach($teddy_mp3_title as $num => $t): ?>
                <?php if($num == 0){$teddy_mp3_class = 'teddy_mp3_add';}else{$teddy_mp3_class = 'teddy_mp3_remove';}?>
                
                <div id="teddy_mp3_each<?php echo $num+1;?>"  class="teddy_mp3_infor" rel="<?php echo $num+1;?>">
                    <div class="teddy_mp3_title">
                        <div class="teddy_form_desc"><?php _e('MP3 Title', 'teddy'); ?></div>
                        <div class="teddy_mp3_input"><input type="text" name="teddy_mp3_title[]" value="<?php echo $teddy_mp3_title[$num];?>" size="20" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="teddy_mp3_url">
                        <div class="teddy_mp3_name"><?php _e('URL', 'teddy'); ?></div>
                        <div class="teddy_mp3_input"><input type="text" name="teddy_mp3_url[]" value="<?php echo $teddy_mp3_url[$num];?>" size="40" /></div>
                        <div class="<?php echo $teddy_mp3_class;?>" rel="<?php echo $num+1;?>"></div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                
                <?php endforeach; ?>
                
			<?php endif; ?>
            
            
        </div>
        <div class="clear"></div>
    </div>
    
    <div class="teddy_form_para audio_soundcloud" rel="tfb_audio">
        <div class="teddy_form_desc"><?php _e('Code for WP', 'teddy'); ?></div>
        <div class="teddy_form_content">
            <div class="teddy_embeded_code">
                <textarea id="teddy_soundcloud_code" name="teddy_soundcloud_code" class="teddy_text" rows="4"><?php echo CustomMeta('teddy_soundcloud_code');?></textarea><?php _e(' *Format', 'teddy');?>: https://soundcloud.com/imam-lepast-konyol/maher-zain-always-be-there-1 
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>