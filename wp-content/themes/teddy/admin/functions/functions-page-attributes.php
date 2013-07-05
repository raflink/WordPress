<div class="teddy_form clearfix clear formatpage">
    <div class="teddy_form_para" rel="tfb_teddy_page_list tfb_teddy_page_static">
        <div class="teddy_form_desc"><?php _e('Template', 'teddy'); ?></div>
        <div class="teddy_form_content">
            <div class="teddy_page_attributes_box">
                <select name="teddy_page_attributes_select">
                    <option value="teddy_page_list" selected="selected"><?php _e('List Page', 'teddy'); ?></option>
                    <option value="teddy_page_static"><?php _e('Static Page', 'teddy'); ?></option>
                </select>
                <?php 
				if(CustomMeta('teddy_page_attributes_checked') == ''){
					$teddy_page_attributes_checked = 'teddy_page_list';
				}else{
					$teddy_page_attributes_checked = CustomMeta('teddy_page_attributes_checked');
				}?>
                <input name="teddy_page_attributes_checked" type="hidden" value="<?php echo $teddy_page_attributes_checked;?>" />
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>