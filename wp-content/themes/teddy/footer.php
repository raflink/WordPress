        <!----------
			Footer
		---------->
		<footer id="footer_wrap">
			<div id="footer_bar"><?php if (of_get_option('footer-copyright')) {echo of_get_option('footer-copyright'); } 
			
			if(of_get_option('footer_layout')=='footer_a') {
			
			?><span id="footer_trigger" class="footer_open"></span></div>
				<div id="foot_widget_wrap" style="display:none"><div class="foot_widget_wrap_mask"><ul class="container" id="foot_widget">
					<?php dynamic_sidebar('teddy-footer'); 
				echo "</ul></div></div>";
					
			} else if (of_get_option('footer_layout')=='footer_b') {
			?><span id="footer_trigger" class="footer_close"></span></div>
				<div id="foot_widget_wrap" style="display:block"><div class="foot_widget_wrap_mask"><ul class="container" id="foot_widget">
					<?php dynamic_sidebar('teddy-footer'); 
				echo "</ul></div></div>";	
			} else { echo '</div>'; } ?>	
		</footer>
		<!--End Footer-->
	</div><!--End #wrap-->

<!--Back Top button-->
<?php  
if (of_get_option('back-top') == '1' ) { 
?>
<div id="backtop"></div>
<?php
} 



wp_footer();


?>
<script>
jQuery(document).ready(function($){ 

// Contact form  verification

	if(jQuery('li.widget-container.widget_uxconatactform').length>0) {
		jQuery('li.widget-container form#contact-form').submit(function() {
			//$('form#contact-form .error').remove();
			//$('form#contact-form .required').remove();
			var hasError = false;
			jQuery('li.widget-container .requiredField').each(function() {
				if(jQuery.trim($(this).val()) == '' || jQuery.trim($(this).val()) == '<?php _e('Name','ux'); ?>*' || jQuery.trim($(this).val()) == '<?php _e('Email','ux'); ?>*' || jQuery.trim($(this).val()) == '<?php _e('Required','ux'); ?>' || jQuery.trim($(this).val()) == '<?php _e('Invalid email','ux'); ?>') {
					$(this).attr("value","<?php _e('Required','ux'); ?>");
					hasError = true;
				}else if($(this).hasClass('email')) {
            	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            	if(!emailReg.test(jQuery.trim($(this).val()))) {
            		$(this).attr("value","<?php _e('Invalid email','ux'); ?>");
            		hasError = true;
            		}
           		}else{
				}
			});
			//After verification , print some infos. 
			if(!hasError) {
				jQuery('li.widget-container form#contact-form #idi_send').fadeOut('normal', function() {										  
					jQuery(this).parent().append('<p class="sending"><?php _e('Sending','ux'); ?>...</p>');
				});
				var formInput = jQuery(this).serialize();
				jQuery.post(jQuery(this).attr('action'),formInput, function(data){
					jQuery('li.widget-container form#contact-form').slideUp("fast", function() {
						jQuery(this).before('<p class="success"><?php _e('Thanks, your email was successfully sent','ux'); ?>.</p>');
						jQuery('li.widget-container .sending').fadeOut();
					});
				});
			}
			return false;
	
		});
		} //End if
		
// End  Contact form  verification	

// Shortcode Contact form 

	if(jQuery('.entry .contactform').length>0) {
		jQuery('.entry form#contact-form').submit(function() {
			var hasError = false;
			jQuery('.entry .requiredField').each(function() {
				if(jQuery.trim(jQuery(this).val()) == '' || jQuery.trim(jQuery(this).val()) == '<?php _e('Name','ux'); ?>*' || jQuery.trim(jQuery(this).val()) == '<?php _e('Email','ux'); ?>*' || jQuery.trim(jQuery(this).val()) == '<?php _e('Required','ux'); ?>' || jQuery.trim(jQuery(this).val()) == '<?php _e('Invalid email','ux'); ?>') {
					jQuery(this).attr("value","<?php _e('Required','ux'); ?>");
					hasError = true;
				}else if(jQuery(this).hasClass('email')) {
            	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            	if(!emailReg.test(jQuery.trim(jQuery(this).val()))) {
            		jQuery(this).attr("value","<?php _e('Invalid email','ux'); ?>");
            		hasError = true;
            		}
           		}else{
				}
			});
			//After verification , print some infos. 
			if(!hasError) {
				jQuery('.entry form#contact-form #idi_send').fadeOut('normal', function() {										  
					jQuery(this).parent().append('<p class="sending"><?php _e('Sending','ux'); ?></p>');
				});
				var formInput = jQuery(this).serialize();
				jQuery.post(jQuery(this).attr('action'),formInput, function(data){
					jQuery('.entry form#contact-form').slideUp("fast", function() {
						jQuery(this).before('<p class="success"><?php _e('Thanks, your email was successfully sent','ux'); ?>.</p>');
						jQuery('.entry .sending').fadeOut();
					});
				});
			}
			return false;
	
		});
	} //End if

// End Shortcode Contact form 

});	
</script>
  </body>
</html>