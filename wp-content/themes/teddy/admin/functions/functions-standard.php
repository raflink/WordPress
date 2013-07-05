<div class="teddy_form clearfix clear formatpost">
    <div class="teddy_form_title" rel="tfb_0 tfb_gallery"><?php _e('BLOCK IN LIST', 'teddy'); ?></div>
    <div class="teddy_form_para" rel="tfb_0 tfb_gallery">
        <div class="teddy_form_desc"><?php _e('Layout', 'teddy'); ?></div>
        <div class="teddy_form_content" rel="layout_s">
            <div id="teddy_layout_standard" class="teddy_layout_box" rel="tfb_0">
                <div class="checked_btn"></div>
                <img src="<?php echo ASSETS_PATH;?>images/standard_article.png" width="106" height="43" />
                <span><?php _e('Standard', 'teddy'); ?></span>
            </div>
            <div id="teddy_layout_blog" class="teddy_layout_box" rel="tfb_0">
                <div class="checked_btn"></div>
                <img src="<?php echo ASSETS_PATH;?>images/standard_blog.png" width="106" height="43" />
                <span><?php _e('Blog', 'teddy'); ?></span>
            </div>
            <div id="teddy_layout_a" class="teddy_layout_box" rel="tfb_gallery" style="display:none;">
                <div class="checked_btn"></div>
                <img src="<?php echo ASSETS_PATH;?>images/portfolio_a.png" width="106" height="43" />
                <span><?php _e('A', 'teddy'); ?></span>
            </div>
            <div id="teddy_layout_b" class="teddy_layout_box" rel="tfb_gallery" style="display:none;">
                <div class="checked_btn"></div>
                <img src="<?php echo ASSETS_PATH;?>images/portfolio_b.png" width="106" height="43" />
                <span><?php _e('B', 'teddy'); ?></span>
            </div>
            <div id="teddy_layout_c" class="teddy_layout_box" rel="tfb_gallery" style="display:none;">
                <div class="checked_btn"></div>
                <img src="<?php echo ASSETS_PATH;?>images/portfolio_c.png" width="106" height="43" />
                <span><?php _e('C', 'teddy'); ?></span>
            </div>
            <div id="teddy_layout_d" class="teddy_layout_box" rel="tfb_gallery" style="display:none;">
                <div class="checked_btn"></div>
                <img src="<?php echo ASSETS_PATH;?>images/portfolio_d.png" width="106" height="43" />
                <span><?php _e('D', 'teddy'); ?></span>
            </div>
            <div id="teddy_layout_e" class="teddy_layout_box" rel="tfb_gallery" style="display:none;">
                <div class="checked_btn"></div>
                <img src="<?php echo ASSETS_PATH;?>images/portfolio_e.png" width="106" height="43" />
                <span><?php _e('E', 'teddy'); ?></span>
            </div>
            <div id="teddy_layout_f" class="teddy_layout_box" rel="tfb_gallery" style="display:none;">
                <div class="checked_btn"></div>
                <img src="<?php echo ASSETS_PATH;?>images/portfolio_f.png" width="106" height="43" />
                <span><?php _e('F', 'teddy'); ?></span>
            </div>
            <?php 
			if(CustomMeta('teddy_layout_checked') == ''){
				$teddy_layout_checked = 'teddy_layout_standard';
			}else{
				$teddy_layout_checked = CustomMeta('teddy_layout_checked');
			}?>
            <input id="teddy_layout_checked" name="teddy_layout_checked" type="hidden" value="<?php echo $teddy_layout_checked;?>" />
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="teddy_form_para" rel="tfb_0 tfb_audio tfb_gallery">
        <div class="teddy_form_desc"><?php _e('Color', 'teddy'); ?></div>
        <div class="teddy_form_content">
            <div class="teddy_color_box"><?php /*?>
				<span title="color code" class="color-style, admin/assets/css/adminstyle.css -> bottom"></span>
				
				<?php */?>
                <span title="color1" class="color_color1"></span>
				<span title="color2" class="color_color2"></span>
                <span title="color3" class="color_color3"></span>
				<span title="color4" class="color_color4"></span>
                <span title="color5" class="color_color5"></span>
                <span title="color6" class="color_color6"></span>
                <span title="color7" class="color_color7"></span>
                <span title="color8" class="color_color8"></span>
            </div>
            <?php 
			if(CustomMeta('teddy_color_checked') == ''){
				$teddy_color_checked = 'FFFFFF';
			}else{
				$teddy_color_checked = CustomMeta('teddy_color_checked');
			}?>
            <input id="teddy_color_checked" name="teddy_color_checked" type="hidden" value="<?php echo $teddy_color_checked;?>" />
        </div>
        <div class="clear"></div>
    </div>
    <div class="teddy_form_hr audio_soundcloud" rel="tfb_0 tfb_audio tfb_gallery"></div>
    <div class="teddy_form_title" rel="tfb_0 tfb_video tfb_gallery"><?php _e('POST PAGE', 'teddy'); ?></div>
    <div class="teddy_form_para" rel="tfb_0 tfb_video tfb_gallery">
        <div class="teddy_form_desc"><?php _e('Sidebar', 'teddy'); ?></div>
        <div class="teddy_form_content">
            <div class="teddy_sidebar" rel="tfb_0 tfb_video tfb_gallery">
                <div id="teddy_sidebar_right" class="teddy_sidebar_box" rel="tfb_0 tfb_video tfb_gallery">
                    <div class="checked_btn"></div>
                    <img src="<?php echo ASSETS_PATH;?>images/sidebar_right.png" width="126" height="80" />
                </div>
                <div id="teddy_sidebar_left" class="teddy_sidebar_box" rel="tfb_0 tfb_video tfb_gallery">
                    <div class="checked_btn"></div>
                    <img src="<?php echo ASSETS_PATH;?>images/sidebar_left.png" width="126" height="80" />
                </div>
                <div id="teddy_sidebar_no" class="teddy_sidebar_box" rel="tfb_0 tfb_video">
                    <div class="checked_btn"></div>
                    <img src="<?php echo ASSETS_PATH;?>images/sidebar_no.png" width="126" height="80" />
                </div>
                <?php 
				if(CustomMeta('teddy_sidebar_checked') == ''){
					$teddy_sidebar_checked = 'teddy_sidebar_right';
				}else{
					$teddy_sidebar_checked = CustomMeta('teddy_sidebar_checked');
				}?>
                <input id="teddy_sidebar_checked" name="teddy_sidebar_checked" type="hidden" value="<?php echo $teddy_sidebar_checked;?>" />
                <div class="clear"></div>
            
            </div>
            <div class="teddy_sidebar" rel="tfb_0">
                <select name="teddy_sidebar_select">
                    <option value="none" selected="selected"><?php _e('Please select', 'teddy'); ?></option>
                    <?php
					global $sidebar_array;
					foreach($sidebar_array as $num => $sidebar):
					?>
                    <option value="<?php echo $sidebar['id']; ?>"><?php echo $sidebar['name']; ?></option>
                    
                    <?php endforeach; ?>
                </select>
                <?php 
				if(CustomMeta('teddy_sidebars_checked') == ''){
					$teddy_sidebars_checked = 'none';
				}else{
					$teddy_sidebars_checked = CustomMeta('teddy_sidebars_checked');
				}?>
                <input id="teddy_sidebars_checked" name="teddy_sidebars_checked" type="hidden" value="<?php echo $teddy_sidebars_checked;?>" />
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="teddy_form_para" rel="tfb_gallery" style="display:none;">
        <div class="teddy_form_desc"><?php _e('List Type', 'teddy'); ?></div>
        <div class="teddy_form_content">
            <div class="teddy_listtype_box">
                <select name="teddy_listtype_select">
                    <option value="teddy_listtype_verticle" selected="selected"><?php _e('Verticle List', 'teddy'); ?></option>
                    <option value="teddy_listtype_slider"><?php _e('Slider', 'teddy'); ?></option>
                    <option value="teddy_listtype_masonry"><?php _e('Masonry', 'teddy'); ?></option>
                </select>
                <?php 
				if(CustomMeta('teddy_listtype_checked') == ''){
					$teddy_listtype_checked = 'teddy_listtype_verticle';
				}else{
					$teddy_listtype_checked = CustomMeta('teddy_listtype_checked');
				}?>
                <input name="teddy_listtype_checked" type="hidden" value="<?php echo $teddy_listtype_checked;?>" />
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="teddy_form_para" rel="tfb_0 tfb_video tfb_gallery">
        <div class="teddy_form_desc"><?php _e('Show', 'teddy'); ?></div>
        <div class="teddy_form_content">
            <div class="teddy_postshow_box">
                <label id="teddy_post_featured" class="enabled" rel="tfb_0 tfb_gallery"><?php _e('Top Image(Featured Images)', 'teddy'); ?></label>
                <label id="teddy_post_author" class="enabled"><?php _e('Author', 'teddy'); ?></label>
                <label id="teddy_post_date" class="enabled"><?php _e('Date', 'teddy'); ?></label>
                <label id="teddy_post_tag" class="enabled"><?php _e('Tag', 'teddy'); ?></label>
                <label id="teddy_post_share" class="enabled"><?php _e('Share', 'teddy'); ?></label>
                <label id="teddy_post_comment" class="enabled"><?php _e('Comments', 'teddy'); ?></label>
                
                <?php 
				if(CustomMeta('teddy_post_featured') == ''){
					$teddy_post_featured = 'true';
				}else{
					$teddy_post_featured = CustomMeta('teddy_post_featured');
				}
				
				if(CustomMeta('teddy_post_author') == ''){
					$teddy_post_author = 'true';
				}else{
					$teddy_post_author = CustomMeta('teddy_post_author');
				}
				
				if(CustomMeta('teddy_post_date') == ''){
					$teddy_post_date = 'true';
				}else{
					$teddy_post_date = CustomMeta('teddy_post_date');
				}
				
				if(CustomMeta('teddy_post_tag') == ''){
					$teddy_post_tag = 'true';
				}else{
					$teddy_post_tag = CustomMeta('teddy_post_tag');
				}
				
				if(CustomMeta('teddy_post_share') == ''){
					$teddy_post_share = 'true';
				}else{
					$teddy_post_share = CustomMeta('teddy_post_share');
				}
				
				if(CustomMeta('teddy_post_comment') == ''){
					$teddy_post_comment = 'true';
				}else{
					$teddy_post_comment = CustomMeta('teddy_post_comment');
				}?>
                <input name="teddy_post_featured" type="hidden" value="<?php echo $teddy_post_featured;?>" />
                <input name="teddy_post_author" type="hidden" value="<?php echo $teddy_post_author;?>" />
                <input name="teddy_post_date" type="hidden" value="<?php echo $teddy_post_date;?>" />
                <input name="teddy_post_tag" type="hidden" value="<?php echo $teddy_post_tag;?>" />
                <input name="teddy_post_share" type="hidden" value="<?php echo $teddy_post_share;?>" />
                <input name="teddy_post_comment" type="hidden" value="<?php echo $teddy_post_comment;?>" />
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
