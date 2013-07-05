<?php
/*
Plugin Name: UX Contact Form
Description: Shows Contact Form in your blog
Version: 1.0
Author: fape
Author URI: http://www.uiueux.com
*/ 
class UXConatactForm extends WP_Widget
{
	function UXConatactForm() {
	 $widget_ops = array('description' => __('Shows Contact Form in your blog', 'ux-contant-form') );
     //Create widget
     $this->WP_Widget('UXconatactform', __('Contact Form', 'ux-contant-form'), $widget_ops);
	}
	
	function widget( $args, $instance ) {
		extract ( $args, EXTR_SKIP );
		$title = ( $instance['title'] ) ? $instance['title'] : 'Contact us';
		$emailto = ( $instance['emailto'] ) ? $instance['emailto'] : get_bloginfo('admin_email');
		// bak $this->bloginfo('admin_email')
		$button = ( $instance['button'] ) ? $instance['button'] : 'Send';
		?>
		<?php echo $before_widget; ?>
		<?php echo '<h3 class="widget-title">'. $title . '</h3>'; ?>
		<?php 
		if( isset($_POST['idi_form']) && $_POST['idi_form'] == 'send')
				{
					$name = isset( $_POST['idi_name'] ) ? trim(htmlspecialchars($_POST['idi_name'], ENT_QUOTES)) : '';
					$email =  isset( $_POST['idi_mail'] ) ? trim(htmlspecialchars($_POST['idi_mail'], ENT_QUOTES)) : '';
					$content =  isset( $_POST['idi_text'] ) ? trim(htmlspecialchars($_POST['idi_text'], ENT_QUOTES)) : '';
					$post_content = "This mail was sent by  $name .  Content:  $content";
					$title = 'Mail from '.$email;
					$headers = 'from :'.$email.'\n content-type:text/html';
					wp_mail($emailto,$title,$post_content,$headers);
				}
		echo '<form action="';
		echo $_SERVER["REQUEST_URI"]; 
		echo '" id="contact-form" class="contact_form" method="POST">';	?>
		<p><input type="text" id="idi_name" name="idi_name" class="requiredField" value="Name*" onblur="if (this.value == '') {this.value = 'Name*';}" onfocus="if (this.value == 'Name*') {this.value = '';}" /></p>
		<p><input type="text" id="idi_mail" name="idi_mail" class="requiredField email" value="Email*" onblur="if (this.value == '') {this.value = 'Email*';}" onfocus="if (this.value == 'Email*') {this.value = '';}" /></p>
		<p><textarea rows="4" name="idi_text" id="idi_text" cols="4" class="requiredField inputError"></textarea></p>
		<input type="hidden" value="send" name="idi_form" />
		<?php echo '<p class="btnarea"><input type="submit" id="idi_send" name="idi_send" value="'.$button.'" /></p></form></li>'; ?>
	<?php
	}
	function update($new_instance, $old_instance){
		
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['emailto'] = strip_tags($new_instance['emailto']);
		$instance['button'] = strip_tags($new_instance['button']);
		return $instance;
	}
	function form($instance){
		$defaults = array('title' => 'Contact us', 'button' => 'Send');
		$instance = wp_parse_args((array) $instance, $defaults);
	?>
		<p>
			<b>Title:</b><input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" class="widefat" />
		</p>
		<p>
			Your email:<input id="<?php echo $this->get_field_id('emailto'); ?>" name="<?php echo $this->get_field_name('emailto'); ?>" value="<?php echo $instance['emailto']; ?>" class="widefat"><small>Enter the email receiver form, if blank, it'll send to the admin email.</small>
		</p>
		<p>
			Button name:<input id="<?php echo $this->get_field_id('button'); ?>" name="<?php echo $this->get_field_name('button'); ?>" value="<?php echo $instance['button']; ?>" class="widefat">
		</p>
		<p><?php _e('Please don\'t set multiple Contact Form widget in same one page',''); ?>
<?php
	}
}
add_action( 'widgets_init', create_function('', 'return register_widget("UXConatactForm");') );
?>