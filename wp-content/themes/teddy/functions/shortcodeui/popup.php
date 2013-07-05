<?php

// loads the shortcodes class, wordpress is loaded with it
require_once( 'shortcodes.class.php' );

// get popup type
$popup = trim( $_GET['popup'] );
$shortcode = new ux_shortcodes( $popup );

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head></head>
<body>
<div id="ux-popup">

	<div id="ux-shortcode-wrap">
	
		
		<div id="ux-sc-form-wrap">
		
			<div id="ux-sc-form-head">
			
				<?php echo $shortcode->popup_title; ?>
			
			</div>
			<!-- /#ux-sc-form-head -->
			
			<div id="ux-sc-preview-wrap">
		
			<div id="ux-sc-preview-head">
		
				Shortcode Preview
					
			</div>
			<!-- /#ux-sc-preview-head -->
			
			<?php if( $shortcode->no_preview ) : ?>
			<div id="ux-sc-nopreview">Shortcode has no preview</div>		
			<?php else : ?>			
			<iframe src="<?php echo ux_TINYMCE_URI; ?>/preview.php?sc=" width="100%" frameborder="0" id="ux-sc-preview"></iframe>
			<?php endif; ?>
			
		</div>
		<!-- /#ux-sc-preview-wrap -->
			
			<form method="post" id="ux-sc-form">
			
				<table id="ux-sc-form-table">
				
					<?php echo $shortcode->output; ?>
					
					<tbody>
						<tr class="form-row">
							<?php if( ! $shortcode->has_child ) : ?><td class="label">&nbsp;</td><?php endif; ?>
							<td class="field"><?php if( ! $shortcode->has_child ){ ?><a href="#" class="button-primary ux-insert" style="margin-left:0">Insert Shortcode</a><?php } else { ?><a href="#" class="button-primary ux-insert">Insert Shortcode</a><?php } ?></td>							
						</tr>
					</tbody>
				
			  </table>
				<!-- /#ux-sc-form-table -->
				
			</form>
			<!-- /#ux-sc-form -->
		
		</div>
		<!-- /#ux-sc-form-wrap -->
		
		
		<div class="clear"></div>
		
	</div>
	<!-- /#ux-shortcode-wrap -->

</div>
<!-- /#ux-popup -->

</body>
</html>