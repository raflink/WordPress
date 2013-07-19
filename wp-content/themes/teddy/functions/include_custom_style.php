<?php 

header("Content-type: text/css; charset: UTF-8");
	
require_once('../../../../wp-load.php');
	 
	/////////////////
	//Color settings/
	/////////////////
	
	//// General color ///
	
	//General Background color
	
		$background = of_get_option('bg_custom');
            if ($background['image']||$background['color']) {
                if ( $background['image'] ){
					if ($background['repeat']=='no-repeat') {
					echo 'body { background:'.$background['color']. ' url('.$background['image']. ') '.$background['repeat'].' '.$background['position'].' '.$background['attachment'].'; background-size:cover; }';
					} else {
                    echo 'body { background:'.$background['color']. ' url('.$background['image']. ') '.$background['repeat'].' '.$background['position'].' '.$background['attachment'].'; }';
					}
                } else {
                    echo 'body { background-color:'.$background['color']. ' }';
                }
	 }
	
	// Link color
	
	if(of_get_option('link-color')){?>
	#single-wrap .entry a,
	.comm-u-wrap a:hover,#sidebar .gallery_meta a:hover,#sidebar li.widget-container a:hover{color:<?php echo of_get_option('link-color');?> ; }
	
	.pagination .next,.pagination .pre,
	#pagenums a:hover,#pagenums .pagination span.current,
	#respondwrap input#submit,
	.entry .contactform input.idi_send,
	.entry input.wpcf7-form-control.wpcf7-submit,
	#foot_widget .widget_uxconatactform input#idi_send:hover,
	.sidebar_widget .widget_uxconatactform input#idi_send:hover,
	#foot_widget input.wpcf7-form-control.wpcf7-submit:hover,
	.sidebar_widget input.wpcf7-form-control.wpcf7-submit:hover{ background-color:<?php echo of_get_option('link-color');?> ; }
<?php }
	
	//Select BG color
	
	if (of_get_option('selected-color')) { 	?>
		::selection {background:<?php echo of_get_option('selected-color'); ?>;color:#fff;}
		::-moz-selection{background:<?php echo of_get_option('selected-color'); ?>;color:#fff;}
		::-webkit-selection {background:<?php echo of_get_option('selected-color'); ?>;color:#fff;}
<?php } 
	
	//Header BAR BG color
	
	if(of_get_option('header-color')){ 
		$headerRgb = of_get_option('header-color');
		$arr = array("rgb" => "rgba", ")" => ""); ?>
		#header_wrap,#navi ul li ul.sub-menu li,input.top_search_text[type="text"]{ background-color:<?php echo $headerRgb; ?>\9; 
		<?php 
		if(!of_get_option('header-alpha')) { 
			echo 'border-color:'.$headerRgb.';background-color:'.$headerRgb.';}'; 
		} else { 
 			
		?>
			background-color:<?php echo strtr($headerRgb ,$arr); ?>,<?php echo of_get_option('header-alpha'); ?>);  }
<?php	
		}
	}else{
		if(of_get_option('header-alpha')) { 
			
?>
			#header_wrap,#navi ul li ul.sub-menu li,input.top_search_text[type="text"]{ background-color:rgba(57,57,57,<?php echo of_get_option('header-alpha'); ?>); }
<?php
		}
	}	
	
	//Search bar
	
	if(of_get_option('search-border-color')){ 
		echo 'input.top_search_text[type="text"]{ border-color:'.of_get_option('search-border-color').'; }';
	
	}
	if(of_get_option('search-text-color')){ 
		echo 'input.top_search_text[type="text"]{ color:'.of_get_option('search-text-color').'; }';
	
	}
	
    // Logo	color 
	
	if(of_get_option('logo-color')){?>
	#logo a.logo-text{color:<?php echo of_get_option('logo-color');?>}
	<?php }?>
	
	<?php if(of_get_option('logo-box-bgcolor')){?>
	#logo{ padding:0 10px; background-color:<?php echo of_get_option('logo-box-bgcolor');?>}
	<?php }
	
	 /* Menu color	*/
	 
	if(of_get_option('menu-color')){?>
	#navi a{color:<?php echo of_get_option('menu-color');?>}
	#navi ul li a span.dot { background-color:<?php echo of_get_option('menu-color');?>;}
	<?php }
	
	if(of_get_option('menu-active-color')){?>
	#navi>div>ul>li:hover>a,
	#navi>div>ul li.current-menu-item>a,#navi>div>ul li.current-menu-parent>a,#navi>div>ul>li.current-menu-parent li.current-menu-item>a,#navi>div>ul>li.current-menu-ancestor>a,
	#navi ul li ul.sub-menu li:hover>a{ color:<?php echo of_get_option('menu-active-color');?>; }
	#navi div ul li.current-menu-item>a>span.dot,#navi div ul li.current-menu-parent>a>span.dot,#navi div ul li.current-menu-ancestor>a>span.dot,
#navi>div>ul>li:hover>a>span.dot,
#navi ul li ul.sub-menu li:hover>a>span.dot{ background-color:<?php echo of_get_option('menu-active-color');?>; }
	<?php }
	
	if(of_get_option('submenu-mouseover-bgcolor')){?>
	#navi ul li ul.sub-menu li:hover{background-color:<?php echo of_get_option('submenu-mouseover-bgcolor');?>}
	<?php }	
	
	
	
	
	/* List page color	*/
	
	if(of_get_option('post-tit-color')){ 
		$PostTitRgb = of_get_option('post-tit-color');
		$arr = array("rgb" => "rgba", ")" => ""); 
?>
		h3.post-title a{ color:<?php echo of_get_option('post-tit-color');?>\9; color:<?php echo strtr($PostTitRgb ,$arr);?>,0.9); }
<?php 
	
	} ?>
	
	<?php 
	if(of_get_option('post-con-color')){ 
		$PostconRgb = of_get_option('post-con-color');
		$arr = array("rgb" => "rgba", ")" => ""); 
	?>
		<!--.listitem_des,.listitem_des a,.list_item .gallery_meta,.list_item .gallery_meta a{ color:<?php echo of_get_option('post-con-color');?>\9; color:<?php echo strtr($PostconRgb ,$arr);?>,0.5); }-->
		.listitem_des,.listitem_des a,.list_item .gallery_meta,.list_item .gallery_meta a{ color:<?php echo of_get_option('post-con-color');?>\9; color:<?php echo strtr($PostconRgb ,$arr);?>,0.9); }
		.audio-unit{ border-top:1px solid <?php echo $PostconRgb; ?>\9;border-top:1px solid <?php echo strtr($PostconRgb ,$arr);?>,0.1); }
		.audio-unit span.audiobutton{ border-right:1px solid <?php echo $PostconRgb; ?>\9;border-right:1px solid <?php echo strtr($PostconRgb ,$arr);?>,0.1);}
		.audio-unit:last-child{ border-bottom:1px solid <?php echo $PostconRgb; ?>\9; border-bottom:1px solid <?php echo strtr($PostconRgb ,$arr);?>,0.1);}
	<?php }
	
	if(of_get_option('gallery-hover-bg-color')){ 
	?>
	
	.backbg { background-color:<?php echo of_get_option('gallery-hover-bg-color');?>; }
	<?php
	}
	
	/* Archive title */
	if(of_get_option('archive-tit-color')){ 
		echo ".search_results,.archive_title{ color:".of_get_option('archive-tit-color')."; }";
	}
	
	
	/* Content page color */
	
	if(of_get_option('con-bg-color')){?>
	#single-wrap { background-color:<?php echo of_get_option('con-bg-color');?>;}
	<?php }
	
	if(of_get_option('sidebar-bg-color')){?>
	#sidebar,#content{background-color:<?php echo of_get_option('sidebar-bg-color');?>;}
	<?php }

	if(of_get_option('con-tit-color')){ ?>
	#single-wrap h1.content-title{color:<?php echo of_get_option('con-tit-color');?>;}
	<?php }
	
	if(of_get_option('con-con-color')){?>
	#single-wrap .entry,.comm-u-wrap, .comm-u-wrap a,.logged{ color:<?php echo of_get_option('con-con-color');?>;}
	<?php }
	
	if(of_get_option('con-meta-color')){?>
	#single-wrap .post_meta,#single-wrap .post_meta a{color:<?php echo of_get_option('con-meta-color');?>;}
	<?php }
	
	if(of_get_option('comm-tit-color')){?>
	h3#reply-title,span#comments_inlist{color:<?php echo of_get_option('comm-tit-color');?>;}
	<?php }
	
	if (of_get_option('comment-form')=='dark'){ ?>
	#respondwrap textarea, #respondwrap input, .entry .contactform input, .entry .contactform textarea,.entry .wpcf7-form-control{ background-color:#ccc\9; background-color:rgba(255,255,255,0.2); border: 1px solid rgba(255,255,255,0.2); color:#666\9; color: rgba(255,255,255,0.4);}
	#respondwrap input:focus,#respondwrap textarea:focus,.entry .contactform input:focus,.entry .contactform textarea:focus,.entry .wpcf7-form-control:focus{ color:rgba(255,255,255,0.6); border:1px solid rgba(255,255,255,0.4); }
	<?php }
	
	if(of_get_option('sidebar-tit-color')){?>
	#sidebar h3.widget-title,h1.gallery_title{color:<?php echo of_get_option('sidebar-tit-color');?>;}
	<?php }
	
	if(of_get_option('sidebar-con-color')){?>
	#sidebar li.widget-container,#sidebar li.widget-container a, #sidebar .gallery_meta,#sidebar .gallery_meta a,.gallery_con,.gallery_con a{color:<?php echo of_get_option('sidebar-con-color');?>}
	<?php }
	
	if(of_get_option('siderbar-form') =='dark') {  ?>
	.sidebar_widget .widget_uxconatactform textarea,.sidebar_widget .widget_uxconatactform input,.sidebar_widget .wpcf7-form-control{ background:#ddd\9; background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.05); color:#666\9; color:rgba(255,255,255,0.4);}	
	.sidebar_widget .widget_uxconatactform input#idi_send,.sidebar_widget .wpcf7-form-control.wpcf7-submit{ background:#ccc\9; background:rgba(255,255,255,0.1); border:none; color:#666\9; color:rgba(255,255,255,0.4) }
.sidebar_widget .widget_uxconatactform input#idi_send:hover,.sidebar_widget .wpcf7-form-control.wpcf7-submit:hover{ color:#fff; }
	<?php } 
		
	/* Footer color */
	
	if(of_get_option('footerbar-bg-color')){ 
		$footRgb = of_get_option('footerbar-bg-color');
		$arr = array("rgb" => "rgba", ")" => ""); ?>
		#footer_bar,#foot_widget_wrap{ background-color:<?php echo $footRgb; ?>\9; 
		
		<?php 
		if(!of_get_option('footerbar-alpha')) { 
			echo 'background-color:'.$footRgb.';}';  
		} else { 
		$footerbg = of_get_option('footerbar-alpha') - 0.05;
		?>
		background-color:<?php echo strtr($footRgb ,$arr); ?>,<?php echo of_get_option('footerbar-alpha'); ?>); }
		#foot_widget_wrap{ background-color:<?php echo strtr($footRgb ,$arr); ?>,<?php echo $footerbg; ?>); }
<?php	
		}
	}else{
		if(of_get_option('footerbar-alpha')) { 
?>
		#footer_bar{ background-color:rgba(57,57,57,<?php echo of_get_option('footerbar-alpha'); ?>); }
		#foot_widget_wrap{ background-color: rgba(51,51,51,<?php echo of_get_option('footerbar-alpha'); ?>); }
<?php
		}
	}

	
	if(of_get_option('copyright-font-color')){
		$copyrightRgb = of_get_option('copyright-font-color');
		$arr = array("rgb" => "rgba", ")" => "");
	?>
		#footer_bar{ color:<?php echo of_get_option('copyright-font-color');?>\9; 
	<?php 
		if(!of_get_option('copyright-font-alpha')) { 
			echo 'color:'.$copyrightRgb.';}';   
		} else{ ?>	
		
		color:<?php echo strtr($copyrightRgb ,$arr); ?>,<?php echo of_get_option('copyright-font-alpha'); ?>); }
	<?php 
		}
	}else{
			if(of_get_option('copyright-font-alpha')) { 
	?>
				#footer_bar{ color:rgba(255,255,255,<?php echo of_get_option('copyright-font-alpha'); ?>);}
	<?php		
			}
	}
	
	if(of_get_option('footer-tit-color')){
		$footTitRgb = of_get_option('footer-tit-color');
		$arr = array("rgb" => "rgba", ")" => "");
	?>
		#foot_widget h3.widget-title{color:<?php echo of_get_option('footer-tit-color');?>\9;
		
	<?php 
		if(!of_get_option('footer-tit-alpha')) { 
			echo 'color:'.$footTitRgb.';}';  
		} else{ ?>	
		
		color:<?php echo strtr($footTitRgb ,$arr); ?>,<?php echo of_get_option('footer-tit-alpha'); ?>); }
	<?php 
		}
	}else{
			if(of_get_option('footer-tit-alpha')) { 
	?>
				#foot_widget h3.widget-title{ color:rgba(255,255,255,<?php echo of_get_option('footer-tit-alpha'); ?>);}
	<?php		
			}
	}
	
	if(of_get_option('footer-con-color')){
		$footConRgb = of_get_option('footer-con-color');
		$arr = array("rgb" => "rgba", ")" => "");
	?>
		#foot_widget, #foot_widget a,.searchwidget.search-form input.textboxsearch{color:<?php echo of_get_option('footer-con-color');?>\9;
		
	<?php 
		if(!of_get_option('footer-con-alpha')) { 
			echo 'color:'.$footConRgb.';}';  
		} else{ ?>	
		
		color:<?php echo strtr($footConRgb ,$arr); ?>,<?php echo of_get_option('footer-con-alpha'); ?>); }
	<?php 
		}
	}else{
			if(of_get_option('footer-con-alpha')) { 
	?>
				#foot_widget, #foot_widget a,.searchwidget.search-form input.textboxsearch{ color:rgba(255,255,255,<?php echo of_get_option('footer-con-alpha'); ?>);}
	<?php		
			}
	}

	if(of_get_option('footer-form') =='light') {  ?>
	#foot_widget .widget_uxconatactform input, #foot_widget .widget_uxconatactform textarea,#foot_widget input.wpcf7-form-control,#foot_widget textarea.wpcf7-form-control{ border:1px solid #ccc\9; border:1px solid rgba(0,0,0,0.05); background:none\9; background:rgba(0,0,0,0.03); }
	#foot_widget .widget_uxconatactform input#idi_send,#foot_widget input.wpcf7-form-control.wpcf7-submit{ background:#ccc\9; background:rgba(0,0,0,0.1); border:none; color:#666\9; color:rgba(0,0,0,0.4) }
	#foot_widget .widget_uxconatactform input#idi_send:hover,#foot_widget input.wpcf7-form-control.wpcf7-submit:hover{ color:#000; }
	<?php } 
	
    /* 
	/////////////////////
	///Fonts Settings///
	///////////////////	
	*/
	
	$typography = of_get_option('main-font');
	if( $typography ) { 
		echo 'h1,h2,h3,h4,h5,h6,span#comments_inlist{ font-family: \'Droid Arabic Naskh\', serif;}';
	//echo 'body,input,select,textarea{ font-family: ' . $typography['face'] .';}';	
	}?>
	
	<?php $typography = of_get_option('title-font');
	if( $typography ) { 
		echo 'h1,h2,h3,h4,h5,h6,span#comments_inlist{ font-family: \'Droid Arabic Kufi\', serif;}';
	//echo 'h1,h2,h3,h4,h5,h6,span#comments_inlist{ font-family: ' . $typography['face'] .';}';	
	}
	
	/* logo fonts */
	$typography = of_get_option('logo-font');
	if( $typography ) { 
	echo '#logo a.logo-text{ font-size:'.$typography['size'] .';font-family:'. $typography['face'] . '; font-style:'. $typography['style'] . '; }';
		if	( $typography['style'] == 'bold' ){
			echo '#logo a.logo-text{ font-weight:bold; }';
		}
	} 
	/* menu fonts */
	$typography = of_get_option('menu-font');
	if( $typography ) { 
	echo '#navi a { font-size:'.$typography['size'] .';font-family:'. $typography['face'] . '; font-style:'. $typography['style'] . ';}';
		if	( $typography['style'] == 'bold' ){
			echo '#navi a{ font-weight:bold; }';
		}
	} 
	
	/* List Page fonts */
	$typography = of_get_option('list-tit-fontstyle');
	if( $typography ) { 
		echo 'h3.post-title a{ font-size:'.$typography['size'] .';font-style:'. $typography['style'] . ';}';
		if	( $typography['style'] == 'bold' ){
			echo 'h3.post-title a{ font-weight:bold; }';
		}
	} 
	
	$typography = of_get_option('list-full-tit-fontstyle');
	if( $typography ) { 
		//echo '.fulltext h3.post-title a{ font-size:'.$typography['size'] .';font-style:'. $typography['style'] . ';}';
		echo '.fulltext h3.post-title a{ font-size: 36px;font-style:'. $typography['style'] . ';}';
		if	( $typography['style'] == 'bold' ){
			echo '.fulltext h3.post-title a{ font-weight:bold; }';
		}
	} 
	
	$typography = of_get_option('list-des-fontstyle');
	if( $typography ) { 
		//echo '.listitem_des,.listitem_des a,.list_item .gallery_meta,.list_item .gallery_meta a{ font-size:'.$typography['size'] .';font-style:'. $typography['style'] . ';}';	
		echo '.listitem_des,.listitem_des a,.list_item .gallery_meta,.list_item .gallery_meta a{ font-size: 25px;font-style:'. $typography['style'] . ';}';	
		if	( $typography['style'] == 'bold' ){
			echo '.listitem_des,.listitem_des a,.list_item .gallery_meta,.list_item .gallery_meta a{ font-weight:bold; }';
		}
	} 
	
	/* Content page fonts*/
	$typography = of_get_option('post-tit-font');
	if( $typography ) { 
		echo '#single-wrap h1.content-title{ font-size: 36px; font-style:'. $typography['style'] . ';}';	
		//echo '#single-wrap h1.content-title{ font-size:'.$typography['size'] .';font-style:'. $typography['style'] . ';}';	
		if	( $typography['style'] == 'bold' ){
			echo '#single-wrap h1.content-title{ font-weight:bold; }';
		}
	} 
	
	$typography = of_get_option('gallery-tit-font');
	if( $typography ) { 
		echo 'h1.gallery_title{ font-size:'.$typography['size'] .';font-style:'. $typography['style'] . ';}';	
		if	( $typography['style'] == 'bold' ){
			echo 'h1.gallery_title{ font-weight:bold; }';
		}
	} 
	
	$typography = of_get_option('post-con-font');
	if( $typography ) { 
		echo '#single-wrap .entry, .comm-u-wrap, .comm-u-wrap a{ font-size: 25px; font-style:'. $typography['style'] . ';}';	
		//echo '#single-wrap .entry, .comm-u-wrap, .comm-u-wrap a{ font-size:'.$typography['size'] .';font-style:'. $typography['style'] . ';}';	
		if	( $typography['style'] == 'bold' ){
			echo '#single-wrap .entry, .comm-u-wrap, .comm-u-wrap a{ font-weight:bold; }';
		}
	} 
	
	$typography = of_get_option('meta-font');
	if( $typography ) { 
		echo '#single-wrap .post_meta, #single-wrap .post_meta a{ font-size: 25px;font-style:'. $typography['style'] . ';}';	
		//echo '#single-wrap .post_meta, #single-wrap .post_meta a{ font-size:'.$typography['size'] .';font-style:'. $typography['style'] . ';}';	
		if	( $typography['style'] == 'bold' ){
			echo '#single-wrap .post_meta, #single-wrap .post_meta a{ font-weight:bold; }';
		}
	}
	
	$typography = of_get_option('sidebar-widget-tit-font');
	if( $typography ) { 
		echo '#sidebar h3.widget-title{ font-size:'.$typography['size'] .';font-style:'. $typography['style'] . ';}';	
		if	( $typography['style'] == 'bold' ){
			echo '#sidebar h3.widget-title{ font-weight:bold; }';
		}
	} 
	
	$typography = of_get_option('sidebar-widget-con-font');
	if( $typography ) { 
		echo '#sidebar li.widget-container, #sidebar li.widget-container a{ font-size: 20px;font-style:'. $typography['style'] . ';}';
		if	( $typography['style'] == 'bold' ){
			echo '#sidebar li.widget-container, #sidebar li.widget-container a{ font-weight:bold; }';
		}	
	} 
	
	/* Footer fonts*/
	
	$typography = of_get_option('copyright-font');
	if( $typography ) { 
		echo '#footer_bar{ font-size:'.$typography['size'] .';font-style:'. $typography['style'] . ';}';	
		if	( $typography['style'] == 'bold' ){
			echo '#footer_bar{ font-weight:bold; }';
		}
	} 
	
	$typography = of_get_option('footer-widget-title-font');
	if( $typography ) { 
		echo '#foot_widget h3.widget-title{ font-size:'.$typography['size'] .';font-style:'. $typography['style'] . ';}';	
		if	( $typography['style'] == 'bold' ){
			echo '#foot_widget h3.widget-title{ font-weight:bold; }';
		}
	} 
	
	$typography = of_get_option('footer-widget-content-font');
	if( $typography ) { 
		echo '#foot_widget, #foot_widget a{ font-size:'.$typography['size'] .';font-style:'. $typography['style'] . ';}';
		if	( $typography['style'] == 'bold' ){
			echo '#foot_widget, #foot_widget a{ font-weight:bold; }';
		}	
	} 
	
	/////////////
	//Custom css//
	///////////
	
	if (of_get_option('custom_css')) { 
	
	echo of_get_option('custom_css'); 
	
	}
	
	?>