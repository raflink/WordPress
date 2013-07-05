<?php

/*-----------------------------------------------------------------------------------*/
/*	Paths Defenitions
/*-----------------------------------------------------------------------------------*/

define('ux_TINYMCE_PATH', get_template_directory() . '/functions/shortcodeui');
define('ux_TINYMCE_URI', get_template_directory_uri() . '/functions/shortcodeui');


/*-----------------------------------------------------------------------------------*/
/*	Load TinyMCE dialog
/*-----------------------------------------------------------------------------------*/

require_once( ux_TINYMCE_PATH . '/tinymce.class.php' );		// TinyMCE wrapper class
new ux_tinymce();											// do the magic

?>