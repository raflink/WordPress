<?php
$styleSheets = array(); 

// DEFINE STYLESHEETS
$styleSheets[0]["text"]='light';
$styleSheets[0]["title"]='select light';
$styleSheets[0]["sheet"]='<style>
::selection {}
::-moz-selection{}
::-webkit-selection{}
body{ background:#dfe1e3;}
#single-wrap .entry a,.comm-u-wrap a:hover,#sidebar .gallery_meta a:hover,#sidebar li.widget-container a:hover{ color:rgb(25,150,80);}
#respondwrap input#submit,.entry .contactform input.idi_send,.pagination .next,.pagination .pre,#pagenums a:hover,#pagenums .pagination span.current,#foot_widget .widget_uxconatactform input#idi_send:hover,.sidebar_widget  .widget_uxconatactform input#idi_send:hover{ background-color:rgb(25,150,80);}
#header_wrap,#navi ul li ul.sub-menu li{ background-color:rgb(56,63,73); }
#navi a{ color:#b5b6ba; }
#navi ul li a span.dot { background-color:#b5b6ba; }
#navi>div>ul>li:hover>a,#navi>div>ul>li.current-menu-item>a,#navi>div>ul>li.current-menu-parent>a,#navi ul li ul.sub-menu li:hover>a{ color:#e6ecf0; }
#navi div ul li.current-menu-item>a>span.dot,#navi>div>ul>li.current-menu-parent>a>span.dot,#navi>div>ul>li:hover>a>span.dot,#navi ul li ul.sub-menu li:hover>a>span.dot{background-color:#e6ecf0;}
#navi ul li ul.sub-menu li:hover{background-color:#424854; }
#footer_bar,#foot_widget_wrap{ background-color:rgb(56,63,73); }
#footer_bar{ color:#fff\9;color:rgba(255,255,255,0.3);}
#foot_widget h3.widget-title{color:#fff\9;color:rgba(255,255,255,0.5);}
#foot_widget, #foot_widget a,.searchwidget.search-form input.textboxsearch{color:#fff\9;color:rgba(255,255,255,0.3);}
</style>';

$styleSheets[1]["text"]='dark';
$styleSheets[1]["title"]='select dark';
$styleSheets[1]["sheet"]='<style>
::selection { background-color:#89b4f5;color:#fff; }
::-moz-selection{ background-color:#89b4f5;color:#fff;}
::-webkit-selection{ background-color:#89b4f5;color:#fff;}
body{ background-image:none; background-color:#333; }
#single-wrap .entry a,.comm-u-wrap a:hover,#sidebar .gallery_meta a:hover,#sidebar li.widget-container a:hover{ color:rgb(255,199,0);}
#respondwrap input#submit,.entry .contactform input.idi_send,.pagination .next,.pagination .pre,#pagenums a:hover,#pagenums .pagination span.current,#foot_widget .widget_uxconatactform input#idi_send:hover,.sidebar_widget  .widget_uxconatactform input#idi_send:hover{ background-color:rgb(255,199,0);}
#header_wrap,#navi ul li ul.sub-menu li{ background-color:rgb(57,57,57); }
#navi a{ color:#999999; }
#navi ul li a span.dot { background-color:#999999; }
#navi>div>ul>li:hover>a,#navi>div>ul>li.current-menu-item>a,#navi>div>ul>li.current-menu-parent>a,#navi ul li ul.sub-menu li:hover>a{ color:#ffc700; }
#navi div ul li.current-menu-item>a>span.dot,#navi>div>ul>li.current-menu-parent>a>span.dot,#navi>div>ul>li:hover>a>span.dot,#navi ul li ul.sub-menu li:hover>a>span.dot{background-color:#ffc700;}
#navi ul li ul.sub-menu li:hover{background-color:#3d3d3d; }
h3.post-title a{ color:#000\9;  color:rgba(0,0,0,0.9);}
.listitem_des,.listitem_des a,.list_item .gallery_meta,.list_item .gallery_meta a{ color:#000\9; color:rgba(0,0,0,0.5); }
.audio-unit{ border-top:1px solid #000\9; border-top:1px solid rgba(0,0,0,0.1); }
.audio-unit span.audiobutton{ border-right:1px solid #000\9; border-right:1px solid rgba(0,0,0,0.1); }
.audio-unit:last-child{ border-bottom:1px solid #000\9; border-bottom:1px solid rgba(0,0,0,0.1); }
#footer_bar,#foot_widget_wrap{ background-color:rgb(57,57,57); }
#footer_bar{ color:#ccc\9;color:rgba(255,255,255,0.3);}
#foot_widget h3.widget-title{color:#ccc\9;color:rgba(255,255,255,0.3);}
#foot_widget, #foot_widget a,.searchwidget.search-form input.textboxsearch{color:#fff\9;color:rgba(255,255,255,0.2);}
</style>';

$styleSheets[2]["text"]='transparent';
$styleSheets[2]["title"]='select transparent';
$styleSheets[2]["sheet"]='<style>
::selection { background-color:#89b4f5;color:#fff; }
::-moz-selection{ background-color:#89b4f5;color:#fff;}
::-webkit-selection{ background-color:#89b4f5;color:#fff;}
body{ backgorund:url("http://ximudesign.com/teddy/wp-content/uploads/sites/9/2013/04/Untitled-31.jpg") repeat fixed center top transparent; }
#single-wrap .entry a,.comm-u-wrap a:hover,#sidebar .gallery_meta a:hover,#sidebar li.widget-container a:hover{ color:rgb(255,105,177);}
#respondwrap input#submit,.entry .contactform input.idi_send,.pagination .next,.pagination .pre,#pagenums a:hover,#pagenums .pagination span.current,#foot_widget .widget_uxconatactform input#idi_send:hover,.sidebar_widget  .widget_uxconatactform input#idi_send:hover{ background-color:rgb(255,105,177);}
#header_wrap,#navi ul li ul.sub-menu li{ background-color:rgb(46,46,46)\9;background-color:rgba(33,33,33,0.3); }
#navi a{ color:#e0e0e0; }
#navi ul li a span.dot { background-color:#e0e0e0; }
#navi>div>ul>li:hover>a,#navi>div>ul>li.current-menu-item>a,#navi>div>ul>li.current-menu-parent>a,#navi ul li ul.sub-menu li:hover>a{ color:#fff; }
#navi div ul li.current-menu-item>a>span.dot,#navi>div>ul>li.current-menu-parent>a>span.dot,#navi>div>ul>li:hover>a>span.dot,#navi ul li ul.sub-menu li:hover>a>span.dot{background-color:#fff;}
#navi ul li ul.sub-menu li:hover{background-color:#ff69b1; }
h3.post-title a{ color:#000\9;  color:rgba(0,0,0,0.9);}
.listitem_des,.listitem_des a,.list_item .gallery_meta,.list_item .gallery_meta a{ color:#000\9; color:rgba(0,0,0,0.5); }
.audio-unit{ border-top:1px solid #000\9; border-top:1px solid rgba(0,0,0,0.1); }
.audio-unit span.audiobutton{ border-right:1px solid #000\9; border-right:1px solid rgba(0,0,0,0.1); }
.audio-unit:last-child{ border-bottom:1px solid #000\9; border-bottom:1px solid rgba(0,0,0,0.1); }
#footer_bar,#foot_widget_wrap{ background-color:rgb(46,46,46)\9;background-color:rgba(31,31,31,0.8); }
#footer_bar{ color:#ccc\9; color:rgba(255,255,255,0.3);}
#foot_widget h3.widget-title{color:#ccc\9;color:rgba(255,255,255,0.8);}
#foot_widget, #foot_widget a,.searchwidget.search-form input.textboxsearch{color:#fff\9;color:rgba(255,255,255,0.5);}
</style>';

// DEFAULT STYLESHEET
$defaultStyleSheet=0;

// SET STYLESHEET
if(!isset($_COOKIE["STYLE"])){
if(isset($_SESSION["STYLE"])){
echo $styleSheets[$_SESSION["STYLE"]]["sheet"];
} else {
echo $styleSheets[$defaultStyleSheet]["sheet"];
}
} else {
echo $styleSheets[$_COOKIE["STYLE"]]["sheet"];
}
?>
