 jQuery(document).ready(function() {
         var slideshow = UIkit.slideshow('[data-uk-slideshow]', {
           autoplay: 1,
           height:	'100%',
           animation:	'swipe',
           duration:	500,
           autoplayInterval:	4000,
           pauseOnHover: false
         });
		 
		 
		 
         
         });
		 
		 	var active_tab;
        function showTab(className){
            if (active_tab) {
                jQuery("."+active_tab).hide();
                jQuery("."+active_tab+ "_link").removeClass("active");
            }
            jQuery("."+className).show();
            active_tab = className;
            jQuery("."+active_tab+ "_link").addClass("active");
        }

        showTab("menu_6563");
         
         
         jQuery(document).on('scroll', function (e) {
         
         if(jQuery(document).scrollTop() > 0) {
           jQuery('.navbar.nav-v4').addClass('nav-scroll');
         }else {
           jQuery('.navbar.nav-v4').removeClass('nav-scroll');
         }
         
         });
         
         jQuery(document).ready(function() {
             SetGallery2ImageSize();
         });
         
         jQuery( window ).resize(function() {
           SetGallery2ImageSize();
         });
         
         function SetGallery2ImageSize() {
           var windowWidth = jQuery( window ).width();
           var imageHeight;
           if(windowWidth > 770){
             imageHeight = windowWidth / 4;
           }else{
             imageHeight = windowWidth / 2;
           }
           var bigImageHeight = imageHeight * 2;
         
           jQuery('.gallery-v2-wrapper .gallery-image, .gallery-v2-wrapper .gallery-link').height(imageHeight+'px');
           jQuery('.gallery-v2-wrapper .gallery-image-big').height(bigImageHeight+'px');
         }
         
         jQuery(document).ready(function() {
             jQuery('.image-link').magnificPopup({type:'image'});
         });
         
         
         var marker_icon = "";
         
         iFrameResize({
             enablePublicMethods: true,
             enableInPageLinks: true
         });
         
         var google_map_url = 'https://www.google.com/maps/place/'
             + ",2116 Westwood Blvd,Los Angeles,CA".split(' ').join('+');
         
         function open_google_map() {
             window.open(google_map_url, '_blank')
         }
         
         jQuery(function () {
             jQuery('.nav a').on('click', function () {
                 jQuery('.navbar-collapse').collapse('hide');
             });
         
             init_map();
         
             jQuery('#google_map_link').attr('href', google_map_url);
         });
         
         
         function isAndroid(){
             return /Android/i.test(navigator.userAgent);
         }
         
         if (isAndroid()){
         jQuery(".applicationsLink").attr("href", 'https://play.google.com/store/apps/details?id=com.spothopperapp.spothopper');
         }
         
         
         
         var navigation_alpha_starts_from = 0;
         var navigation_background_color = "rgba(0, 0, 0,";
         var navigation_darkens_on_scroll = "1";
         var top_nav_new_style = !navigation_darkens_on_scroll && (jQuery(window).width() > 767);
         var custom_nav_style = "1";
         if(!custom_nav_style){
           jQuery('.navbar-regular').css('background-color', 'rgba(255, 255, 255,' + navigation_alpha_starts_from + ')');
           jQuery('.navbar-inverse').css('background-color', navigation_background_color + (top_nav_new_style ? 0 : navigation_alpha_starts_from) + ')');
         }
         
         if (navigation_darkens_on_scroll && !custom_nav_style) {
             jQuery(document).on('scroll', function (e) {
                 var alpha = navigation_alpha_starts_from + jQuery(document).scrollTop() / 1950;
                 jQuery('.navbar-inverse').css('background-color', navigation_background_color + alpha + ')');
                 jQuery('.navbar-regular').css('background-color', 'rgba(255, 255, 255,' + alpha + ')');
             });
         }
         
         if (!navigation_darkens_on_scroll && !custom_nav_style) {
             jQuery(window).resize(function() {
                 if (jQuery(window).width() > 767)
                     jQuery('.navbar-inverse').css('background-color', navigation_background_color + 0 + ')');
                 else
                     jQuery('.navbar-inverse').css('background-color', navigation_background_color + navigation_alpha_starts_from + ')');
             });
         }
         
         jQuery(function () {
             jQuery('.nav a').on('click', function () {
                 jQuery('.navbar-collapse').collapse('hide');
             });
         });
         
         
         var animate_sections = ["aboutus_v2"];
         
         for (var i = 0; i < animate_sections.length; i++) {
           jQuery('#'+animate_sections[i]).addClass('animation-element');
         }
         
         var jQueryanimation_elements = jQuery('.animation-element');
         var jQuerywindow = jQuery(window);
         
         function check_if_in_view() {
         var window_height = jQuerywindow.height();
         var window_top_position = jQuerywindow.scrollTop();
         var window_bottom_position = (window_top_position + window_height/2);
         
         jQuery.each(jQueryanimation_elements, function() {
           var jQueryelement = jQuery(this);
           var element_height = jQueryelement.outerHeight();
           var element_top_position = jQueryelement.offset().top;
           var element_bottom_position = (element_top_position + element_height/2);
         
           //check to see if this current container is within viewport
           if ((element_bottom_position >= window_top_position) &&
               (element_top_position <= window_bottom_position)) {
             jQueryelement.addClass('animate');
           } else {
             // jQueryelement.removeClass('in-view');
           }
         });
         }
         
         jQuerywindow.on('scroll resize', check_if_in_view);
         jQuerywindow.trigger('scroll');
		 
		 
		 
jQuery(document).on('scroll', function (e) {

    if(jQuery(document).scrollTop() > 0) {
      jQuery('.navbar.nav-v4').addClass('nav-scroll');
    }else {
      jQuery('.navbar.nav-v4').removeClass('nav-scroll');
    }

});

