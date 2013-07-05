<?php
/*  Columns */
	function ux_one_half( $atts, $content = null ) {
	   return '<div class="one-half-c">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_half', 'ux_one_half');
	
	function ux_one_half_last( $atts, $content = null ) {
   return '<div class="one-half-c last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('one_half_last', 'ux_one_half_last');
	//
	function ux_one_third( $atts, $content = null ) {
	   return '<div class="one-third-c">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_third', 'ux_one_third');
	
	function ux_one_third_last( $atts, $content = null ) {
   return '<div class="one-third-c last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('one_third_last', 'ux_one_third_last');
	//
	function tz_two_third( $atts, $content = null ) {
	   return '<div class="two-third-c">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('two_third', 'tz_two_third');
	//
	function tz_two_third_last( $atts, $content = null ) {
	   return '<div class="two-third-c last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('two_third_last', 'tz_two_third_last');
	//
	function ux_one_fourth( $atts, $content = null ) {
	   return '<div class="one-fourth-c">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_fourth', 'ux_one_fourth');
	//
	function ux_one_fourth_last( $atts, $content = null ) {
   return '<div class="one-fourth-c last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('one_fourth_last', 'ux_one_fourth_last');
	//
	function ux_three_fourth( $atts, $content = null ) {
	   return '<div class="three-fourth-c">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('three_fourth', 'ux_three_fourth');
	//
	function ux_three_fourth_last( $atts, $content = null ) {
	   return '<div class="three-fourth-c last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('three_fourth_last', 'ux_three_fourth_last');
	//
	function ux_one_fifth( $atts, $content = null ) {
	   return '<div class="one-fifth-c">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_fifth', 'ux_one_fifth');	
	//
	function ux_one_fifth_last( $atts, $content = null ) {
	   return '<div class="one-fifth-c last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('one_fifth_last', 'ux_one_fifth_last');
	//
	function ux_two_fifth( $atts, $content = null ) {
	   return '<div class="two-fifth-c">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('two_fifth', 'ux_two_fifth');	
	//
	function ux_two_fifth_last( $atts, $content = null ) {
	   return '<div class="two-fifth-c last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('two_fifth_last', 'ux_two_fifth_last');
	//
	function ux_three_fifth( $atts, $content = null ) {
	   return '<div class="three-fifth-c">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('three_fifth', 'ux_three_fifth');	
	//
	function ux_three_fifth_last( $atts, $content = null ) {
	   return '<div class="three-fifth-c last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('three_fifth_last', 'ux_three_fifth_last');	
	//
	function ux_four_fifth( $atts, $content = null ) {
	   return '<div class="four-fifth-c">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('four_fifth', 'ux_four_fifth');	
	//
	function ux_four_fifth_last( $atts, $content = null ) {
	   return '<div class="four-fifth-c last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('four_fifth_last', 'ux_four_fifth_last');	
	//
	function ux_one_sixth( $atts, $content = null ) {
	   return '<div class="one-sixth-c">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_sixth', 'ux_one_sixth');	
	//
	function ux_one_sixth_last( $atts, $content = null ) {
	   return '<div class="one-sixth-c last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('one_sixth_last', 'ux_one_sixth_last');
	//
	function ux_five_sixth( $atts, $content = null ) {
	   return '<div class="five-sixth-c">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('five_sixth', 'ux_five_sixth');	
	//
	function ux_five_sixth_last( $atts, $content = null ) {
	   return '<div class="five-sixth-c last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('five_sixth_last', 'ux_five_sixth_last');
/* Center */
	function ux_center( $atts, $content = null ) {
	   return '<div style="text-align:center;position:relative;margin-left:auto;margin-right:auto">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('center', 'ux_center');
	
/* Fixed column */
	function ux_fixed_column($atts, $content) {
	   extract(shortcode_atts(array(
			'width' => '300px',
			'margin_right' => '20px',
			'margin_left' => '20px',
			'margin_top' => '20px',
			'margin_bottom' => '20px'
		), $atts));
		$output = '<div class="fixed_column" style="width:'.$width.'; margin-right:'.$margin_right.'; margin-left:'.$margin_left.'; margin-top:'.$margin_top.'; margin-bottom:'.$margin_bottom.'">' . do_shortcode($content) . '</div>';
		return do_shortcode($output);
	}
	add_shortcode('fixed_column', 'ux_fixed_column');


/* List */

	function ux_list_style_dot( $atts, $content = null ) {
	   return '<div class="list_style list_style_dot">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('list_style_dot', 'ux_list_style_dot');
	
	function ux_list_style_bigdot( $atts, $content = null ) {
	   return '<div class="list_style list_style_bigdot">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('list_style_bigdot', 'ux_list_style_bigdot');
	
	function ux_list_style_check( $atts, $content = null ) {
	   return '<div class="list_style list_style_nike">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('list_style_check', 'ux_list_style_check');
	
	function ux_list_style_triangle( $atts, $content = null ) {
	   return '<div class="list_style list_style_triangle">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('list_style_triangle', 'ux_list_style_triangle');
	
	function ux_list_style_hollowarrow( $atts, $content = null ) {
	   return '<div class="list_style list_style_hollowarrow">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('list_style_hollowarrow', 'ux_list_style_hollowarrow');
	
	function ux_list_style_heart( $atts, $content = null ) {
	   return '<div class="list_style list_style_heart">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('list_style_heart', 'ux_list_style_heart');
	
	function ux_list_style_square( $atts, $content = null ) {
	   return '<div class="list_style list_style_square">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('list_style_square', 'ux_list_style_square');
	
	function ux_list_style_dash( $atts, $content = null ) {
	   return '<div class="list_style list_style_dash">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('list_style_dash', 'ux_list_style_dash');
	
	function ux_list_style_location( $atts, $content = null ) {
	   return '<div class="list_style list_style_location">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('list_style_location', 'ux_list_style_location');
	
	function ux_list_style_phone( $atts, $content = null ) {
	   return '<div class="list_style list_style_phone">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('list_style_phone', 'ux_list_style_phone');
	
	function ux_list_style_mail( $atts, $content = null ) {
	   return '<div class="list_style list_style_mail">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('list_style_mail', 'ux_list_style_mail');
	
/* icon */
	add_shortcode('icon', 'ux_icon');
	function ux_icon($atts, $content = null) {
		$output = '<p class="icon '. $content .'"></p>';
		return do_shortcode($output);
	}
/*round image*/
	add_shortcode('round', 'ux_round');
	function ux_round($atts, $content = null) {
		extract(shortcode_atts(array(
			'img' => '',
			'width' => '140',
			'height' => '140',
			'radius' => '70',
			'align' => 'center'
		), $atts));
		if($align == 'center'){
			$output = '<div style="margin:0 auto; width:'.$width.'px; height:'.$height.'px;-webkit-border-radius:'.$radius.'px;-moz-border-radius:'.$radius.'px; border-radius:'.$radius.'px; background-image:url(' . $img . ')" class="roundimage"></div>';
		}else{
			$output = '<div style="width:'.$width.'px; height:'.$height.'px;-webkit-border-radius:'.$radius.'px;-moz-border-radius:'.$radius.'px; border-radius:'.$radius.'px; background-image:url(' . $img . ')" class="roundimage"></div>';
			}
		return do_shortcode($output);
	}

/*images*/
	add_shortcode('imageborder', 'ux_imageborder');
	function ux_imageborder($atts) {
			extract(shortcode_atts(array(
			'img' =>'',
			'link' =>'',
			'width'=>'80%',
			'name' =>'Image name',
			'style' => 'style1'
			),$atts));
			if ($link !==""){
			$output = '<a href="'.$link.'" title="'.$name.'"><img src="'. $img .'" alt="'.$name.'" width="'.$width.'" class="border-'.$style.'" /></a>';
			} else {
			$output = '<img src="'. $img .'" alt="'.$name.'"  width="'.$width.'" class="border-'.$style.'" />';
			}
			return do_shortcode($output);
		}	
	
/*typography*/
	add_shortcode('p', 'ux_paragraph');
	function ux_paragraph($atts, $content = null) {
		$output = '<p class="paragraph">' . $content . '</p>';
		return do_shortcode($output);
	}
	add_shortcode('h1', 'ux_h1');
	function ux_h1($atts, $content = null) {
		$output = '<h1 class="typograph">' . $content . '</h1>';
		return do_shortcode($output);
	}
	add_shortcode('h2', 'ux_h2');
	function ux_h2($atts, $content = null) {
		$output = '<h2 class="typograph">' . $content . '</h2>';
		return do_shortcode($output);
	}
	add_shortcode('h3', 'ux_h3');
	function ux_h3($atts, $content = null) {
		$output = '<h3 class="typograph">' . $content . '</h3>';
		return do_shortcode($output);
	}
	add_shortcode('h4', 'ux_h4');
	function ux_h4($atts, $content = null) {
		$output = '<h4 class="typograph">' . $content . '</h4>';
		return do_shortcode($output);
	}
	add_shortcode('h5', 'ux_h5');
	function ux_h5($atts, $content = null) {
		$output = '<h5 class="typograph">' . $content . '</h5>';
		return do_shortcode($output);
	}
	add_shortcode('title', 'ux_title');
	function ux_title($atts, $content) {
		extract(shortcode_atts(array(
			'size' => 'h4',
			'color' => 'grey'
		), $atts));
		$output = '<'.$size.' class="typograph '.$color.'">' . $content . '</'.$size.'>';
		return do_shortcode($output);
	}
/*button*/
	add_shortcode('button', 'ux_button');
	function ux_button($atts, $content){
			extract(shortcode_atts(array(
			'color' => 'black',
			'link' => '#'
		), $atts));
			$output = '<a class="btn ' .$color.'" href="'.$link.'">'. $content .'</a>';
			return do_shortcode($output);
		}
		
/*google map*/
	add_shortcode('map', 'idi_map');
	function idi_map($atts, $content) {
			extract(shortcode_atts(array(
			'location' => '',
			'zoom' =>'14',
			'maptype' =>'m',
			'width' => '100%',
			'height' => '300px'
			),$atts));

			$output ='<div class="map rounded" style="width:'.$width.'; height:'.$height.'"><iframe width="100%" height="320" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="'.$location.'&amp;t='.$maptype.'&amp;z='.$zoom.'&amp;output=embed"></iframe></div>
			';
			return do_shortcode($output);
		}
		
/* Contact form */
	add_shortcode('form', 'idi_form');
	function idi_form($atts, $content) {
			extract(shortcode_atts(array(
			'title' => '',
			'name' =>'Name',
			'url' => $_SERVER["REQUEST_URI"],
			'button'  => 'Send',
			'email' =>'Email'
			),$atts));

			if($title){
			$output ='<div class="contactform"><h2>'.$title.'</h2>';
			}else{
			$output ='<div class="contactform">'; 
			}
			$output .='<form action="'.$url.'" id="contact-form" class="contact_form" method="POST">
			<p><input type="text" id="idi_name" name="idi_name" class="requiredField" value="'.$name.'*" onblur="if (this.value ==\'\' ) {this.value = \''.$name.'*\';}" onfocus="if (this.value == \''.$name.'*\' || this.value == \'Required\' ) { this.value = \'\'; }" /></p>
			<p><input type="text" id="idi_mail" name="idi_name" class="requiredField email" value="'.$email.'*" onblur="if (this.value ==\'\' ) {this.value = \''.$email.'*\';}" onfocus="if (this.value == \''.$email.'*\' || this.value  == \'Required\' || this.value == \'Invalid email\' ) {this.value = \'\';}" /></p>
			<p><textarea rows="4" name="idi_text" id="idi_text" cols="4" class="requiredField inputError"  onfocus="if (this.value == \'Required\') {this.value = \'\';}"></textarea></p>
			<input type="hidden" value="send" name="idi_form" />
			<p class="btnarea"><input type="submit" id="idi_send" name="idi_send" class="idi_send" value="'.$button.'" /></p>
			</form>
			</div>
			';
			return do_shortcode($output);
		}		
/*Message Box*/
	add_shortcode('mbox', 'ux_mbox');
	function ux_mbox($atts, $content) {
			extract(shortcode_atts(array(
			'width' => '95%',
			'color' => 'blue'
			),$atts));
			$output = '<div style="width:'.$width.'" class="messagebox_'.$color.'"><span class="messagebox_text">'. $content .'</span></div>';
			return do_shortcode($output);
		}
/*Social icon*/
	add_shortcode('social', 'ux_social');
	function ux_social($atts, $content) {
			extract(shortcode_atts(array(
			'social_type' => 'facebook',
			'social_link' => 'http://facebook.com/yourname'
			),$atts));
			$output = '<a href="'.$social_link.'" class="social_shortcode social_shortcode_'.$social_type.'"><span></span></a>';
			return do_shortcode($output);
		}		
/*hr line*/	
	add_shortcode('clear', 'ux_clear');
	function ux_clear() {
		$output = '<span class="clearfix"></span>';
		return do_shortcode($output);
	}
	add_shortcode('blank', 'ux_blank');
	function ux_blank() {
		$output = '<span class="line_blank_half"></span>';
		return do_shortcode($output);
	}
	add_shortcode('half_line', 'ux_half_line');
	function ux_half_line() {
		$output = '<span class="line_blank_half"></span>';
		return do_shortcode($output);
	}
	add_shortcode('line', 'ux_line');
	function ux_line($atts) {
			extract(shortcode_atts(array(
			'width' => '100%',
			'style' => 'solid',
			'color' => 'grey'
			),$atts));
			$output = '<div style="width:'.$width.'" class="line line_'.$style.' line_'.$color.'"></div>';
			return do_shortcode($output);
	}

		/*SWF*/
	add_shortcode('swf', 'ux_swf');
	function ux_swf($atts, $content) {
			extract(shortcode_atts(array(
			'width' => '600',
			'height' => '400'
			),$atts));
			$output = '<embed wmode="opaque" allowfullscreen="true" allowscriptaccess="always" src="'.$content.'" quality="high" type="application/x-shockwave-flash" width="'.$width.'" height="'.$height.'"></embed>';
			return do_shortcode($output);
	}
	/*Fonts color*/
	add_shortcode('font', 'ux_color');
	function ux_color($atts, $content) {
			extract(shortcode_atts(array(
			'color' => 'dark',
			),$atts));
			$output = '<span class="font'.$color.'">'.$content.'</span>';
			return do_shortcode($output);
	}
	/*Toggle*/
	add_shortcode('toggle', 'ux_toggle');
	function ux_toggle($atts, $content) {
			extract(shortcode_atts(array(
			'title' => 'Toggle Title'
			),$atts));
			$output = '<div class="toggle"><h6 class="toggle-title">'.$title.'</h6><p class="toggle-des">'.$content.'</p></div>';
			return do_shortcode($output);
	}
	/*image fix*/
	function ux_image_fix( $atts, $content = null ) {
	   return '<div class="image-wrap">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('image_fix', 'ux_image_fix');
?>