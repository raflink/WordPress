<div class="teddy_form clearfix clear formatpost">
    <div class="teddy_form_gallery">
        <div class="teddy_form_gallery_selected_image">
            <?php CustomMeta('teddy_gallery_selected_images');?>
        </div>
    </div>
    <div class="teddy_form_hr" rel="tfb_0 tfb_gallery"></div>
    <div class="teddy_form_gallery">
        <div class="teddy_form_gallery_image_list"></div>
        <table class="teddy_form_gallery_image_list_page">
            <tr><td align="center" valign="middle">
            <?php 
            $gallery_count = wp_count_posts('attachment')->inherit;
            $gallery_paged = ceil($gallery_count/12);
            ?>
            <div class="lp_prev"></div>
            <div class="lp_num">
            <?php for ($i=1; $i<=$gallery_paged; $i++){ if($i==1){$class="set";}else{$class="";} ?>
            <span class="<?php echo $class;?>" rel="span_<?php echo $i;?>"><?php echo $i;?></span>
			<?php } ?>
            </div>
            <div class="lp_next"></div>
            <input type="hidden" name="lp_val" value="1" />
            <div class="clear"></div>
            </td></tr>
        </table>
    </div>
    

</div>
