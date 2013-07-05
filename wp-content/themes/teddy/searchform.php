<form id="search" name="search" method="get" class="search-form searchwidget" action="<?php echo home_url(); ?>/">	
<span></span><input type="text" onblur="if (this.value == '') {this.value = '<?php _e('Click here to search','ux'); ?>';}" onfocus="if (this.value == '<?php _e('Click here to search','ux'); ?>') {this.value = '';}" id="s" name="s" value="<?php _e('Click here to search','ux'); ?>" class="textboxsearch"> 
<input type="submit" value="" class="submitsearch" name="submitsearch">
</form>
