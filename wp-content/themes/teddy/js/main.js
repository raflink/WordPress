jQuery(document).ready(function() {
								
	/* Back top */
	if(jQuery("#backtop").length > 0) {
	jQuery("#backtop").hide();
	jQuery(function () {
		   jQuery(window).scroll(function(){
				if (jQuery(window).scrollTop()>100){
					 jQuery("#backtop").fadeIn(300);
				}else{
					 jQuery("#backtop").fadeOut(100);
				}
		   });
		   jQuery("#backtop").click(function(){
				jQuery('body,html').animate({scrollTop:0},500);
				return false;
		   });
  	});
	}
	/* embed iframe z-zindex*/
	jQuery('iframe').each(function(){
        var url = jQuery(this).attr("src");
        jQuery(this).attr("src",url+"?wmode=transparent");
    });							
	
	/*call nice scroll*/
	jQuery("html").niceScroll({cursorcolor:"#000",cursoropacitymax:"0.2",zindex:"9999",cursorwidth:"14px",cursorborder:"none",cursorborderradius:"7px"});
		
	/*call audio player*/
	
	jQuery('#audio_player_container').jScrollPane();
	
	jQuery('.songtitle').tooltip({
		track: true
	});
	
	jQuery("#jquery_jplayer").jPlayer({
		ready: function () {
			jQuery(this).jPlayer("setMedia", {
				mp3:"http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3"
			});
		},
		swfPath: JS_PATH,
		supplied: "mp3",
		wmode: "window"
	});
	
	jQuery('.social_active').hoverdir( {} );
	
	function audio_play_click(){
		jQuery('.pause').click(function(){
			var _id = jQuery(this).attr("id");
			jQuery('.audiobutton').removeClass('play');
			jQuery('.audiobutton').addClass('pause');
			jQuery(this).removeClass('pause')
			jQuery(this).addClass('play');
			jQuery("#jquery_jplayer").jPlayer("setMedia", {
				mp3: jQuery(this).attr("rel")
			});
			jQuery("#jquery_jplayer").jPlayer("play");
			jQuery("#jquery_jplayer").bind(jQuery.jPlayer.event.ended, function(event) {
				jQuery('#'+_id).removeClass('play');
				jQuery('#'+_id).addClass('pause');
			});
			audio_pause_click();
			audio_play_click();
		})
		
	}
	
	function audio_pause_click(){
		jQuery('.play').click(function(){
			jQuery(this).removeClass('play')
			jQuery(this).addClass('pause');
			jQuery("#jquery_jplayer").jPlayer("stop");
			audio_play_click();
		})
		
	}
	
	audio_play_click();

/*Sidbar responsive */
	
	if(jQuery(".siderbar_gallery").length > 0) {
		jQuery(window).resize(function() {
			if( jQuery(window).width() > 767 ){	
				jQuery(".siderbar_gallery").insertAfter("#single-wrap");
			}else{
				jQuery(".siderbar_gallery").insertBefore("#single-wrap");	
			} 		 
		 }).trigger('resize');
	} 
	
/* topSearch bar  */	
	
	if(jQuery('#top_search').length >0) {
		jQuery('#top_search').bind('click', function(){
			if (jQuery('#top_search_box').is(':visible')){
				jQuery('#top_search_box').slideUp(300); 		
			}else{
				jQuery('#top_search_box').slideDown(300);
			}
    	});
	}//end if

/* Sub Menu */
								
	var $menuunit = jQuery("#navi ul li");
	var wait6 = false;	
	 jQuery('#navi ul>li>ul').each(function(){
		jQuery(this).siblings('a').append('<span class="dot"></span>');
	});	
	$menuunit.click(function () {
		jQuery(this).children('ul.sub-menu').toggleClass('hover');
	}).hover(function () {	
		var $this1thang = jQuery(this);
		wait6 = setTimeout(function () {	
			$this1thang.children('ul.sub-menu').slideDown(300);	
		}, 100);				 
	},function(){
		jQuery(this).children('ul.sub-menu').fadeOut(100).slideUp(0);
		if (wait6) clearTimeout(wait6);
	});
	
/* End sub Menu */

/* Call Carousel slider*/

jQuery('.listitem_slider').carousel();
if( jQuery(window).width() > 767 ){ jQuery('.carousel-control').hide(); }
jQuery('.carousel').on( 'mouseenter.carousel, mouseleave.carousel', function( event ) {
	if( event.type === 'mouseenter' ){
		jQuery('.carousel-control').fadeIn();
	}else{
		jQuery('.carousel-control').fadeOut();
	}
	
});


/* End slider*/

/*Call lightbox*/
jQuery('.lightbox').lightbox();

/* Mouseover effect*/
	if( jQuery('.images-grid-wrap').length > 0 ) {
		
		jQuery(".images-grid-wrap").hover(function(){							   
			jQuery(this).find(".back").fadeIn(200);
			var BlockW = jQuery(this).width();
			var BlockPading =  (BlockW - 112)/2;
			jQuery(this).find(".icozoom").animate({ left:BlockPading}, 300 );
			jQuery(this).find(".icomore").animate({ right:BlockPading}, 300 );
		},function() {
			jQuery(this).find(".back").fadeOut(100);
			jQuery(this).find(".icozoom").animate({ left:"0"}, 200 );
			jQuery(this).find(".icomore").animate({ right:"0"}, 200 );
		});
		
	}

/* Call masony */
	if( jQuery('#gallery-marsony').length > 0 ) {
		
		var $container = jQuery('#gallery-marsony');
	  
		$container.imagesLoaded(function(){
			$container.isotope({
				itemSelector : '.gallery-marsony-item'
			});
		});
		
	}


/* Foot */

	jQuery('#footer_trigger').click(function () {
		if (jQuery('#foot_widget_wrap').is(':visible')){
			jQuery('#foot_widget_wrap').slideUp("slow");
			jQuery(this).addClass('footer_open').removeClass('footer_close');
		}else{
			jQuery('#foot_widget_wrap').slideDown("slow");
			jQuery(this).addClass('footer_close').removeClass('footer_open');
			jQuery('html,body').animate({scrollTop: jQuery(this).offset().top}, 1000);
		}
	});
 

// Shortcode  Toggle
	jQuery(".toggle-title").click(function () {
		jQuery(this).siblings('.toggle-des').slideToggle(500, function() {
			if (jQuery(this).is(":visible")) {
				jQuery('html, body').animate({scrollTop: jQuery(this).offset().top}, 500)
			}
		});
	});
	


/* Mobile Menu */

	(function($){

	  //variable for storing the menu count when no ID is present
	  var menuCount = 0;

	  //plugin code
	  jQuery.fn.mobileMenu = function(options){

		//plugin's default options
		var settings = {
		  switchWidth: 978,
		  topOptionText: '',
		  indentString: '---'
		};


		//function to check if selector matches a list
		function isList($this){
		  return $this.is('ul, ol');
		}


		//function to decide if mobile or not
		function isMobile(){
		  return (jQuery(window).width() < settings.switchWidth);
		}


		//check if dropdown exists for the current element
		function menuExists($this){

		  //if the list has an ID, use it to give the menu an ID
		  if($this.attr('id')){
			return (jQuery('#mobileMenu_'+$this.attr('id')).length > 0);
		  } 

		  //otherwise, give the list and select elements a generated ID
		  else {
			menuCount++;
			$this.attr('id', 'mm'+menuCount);
			return (jQuery('#mobileMenu_mm'+menuCount).length > 0);
		  }
		}


		//change page on mobile menu selection
		function goToPage($this){
		  if($this.val() !== null){document.location.href = $this.val()}
		}


		//show the mobile menu
		function showMenu($this){
		  $this.css('display', 'none');
		  jQuery('#mobileMenu_'+$this.attr('id')).show();
		}


		//hide the mobile menu
		function hideMenu($this){
		  $this.css('display', '');
		  jQuery('#mobileMenu_'+$this.attr('id')).hide();
		}


		//create the mobile menu
		function createMenu($this){
		  if(isList($this)){

			//generate select element as a string to append via jQuery
			var selectString = '<select id="mobileMenu_'+$this.attr('id')+'" class="mobileMenu">';

			//create first option (no value)
			selectString += '<option value="">'+settings.topOptionText+'</option>';

			//loop through list items
			$this.find('li').each(function(){

			  //when sub-item, indent
			  var levelStr = '';
			  var len = jQuery(this).parents('ul, ol').length;
			  for(i=1;i<len;i++){levelStr += settings.indentString;}

			  //get url and text for option
			  var link = jQuery(this).find('a').attr('href');
			  var text = levelStr + jQuery(this).clone().find('ul, ol, span').remove().end().text();

			  //add option
			  selectString += '<option value="'+link+'">'+text+'</option>';
			});

			selectString += '</select>';

			//append select element to ul/ol's container
			$this.parent().append(selectString);

			//add change event handler for mobile menu
			jQuery('#mobileMenu_'+$this.attr('id')).change(function(){
			  goToPage(jQuery(this));
			});

			//hide current menu, show mobile menu
			showMenu($this);
		  } else {
			alert('mobileMenu will only work with UL or OL elements!');
		  }
		}


		//plugin functionality
		function run($this){

		  //menu doesn't exist
		  if(isMobile() && !menuExists($this)){
			createMenu($this);
		  }

		  //menu already exists
		  else if(isMobile() && menuExists($this)){
			showMenu($this);
		  }

		  //not mobile browser
		  else if(!isMobile() && menuExists($this)){
			hideMenu($this);
		  }

		}

		//run plugin on each matched ul/ol
		//maintain chainability by returning "this"
		return this.each(function() {

		  //override the default settings if user provides some
		  if(options){jQuery.extend(settings, options);}

		  //cache "this"
		  var $this = jQuery(this);

		  //bind event to browser resize
		  jQuery(window).resize(function(){run($this);});

		  //run plugin
		  run($this);

		});

	  };

	})(jQuery);
	jQuery('#navi ul.menu').mobileMenu();
	
	//End Mobile menu

})	