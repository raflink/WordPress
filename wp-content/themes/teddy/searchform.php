<form id="search" name="search" method="get" class="search-form searchwidget" action="<?php echo home_url(); ?>/">	
<input type="text" onblur="if (this.value == '') {this.value = '<?php _e('أضغط هنا للبحث','ux'); ?>';}" onfocus="if (this.value == '<?php _e('أضغط هنا للبحث','ux'); ?>') {this.value = '';}" id="s" name="s" value="<?php _e('أضغط هنا للبحث','ux'); ?>" class="textboxsearch"> 
<input type="submit" value="" class="submitsearch" name="submitsearch">
</form>
