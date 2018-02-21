 $(document).ready(function() {
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
                $("."+active_tab).hide();
                $("."+active_tab+ "_link").removeClass("active");
            }
            $("."+className).show();
            active_tab = className;
            $("."+active_tab+ "_link").addClass("active");
        }

        showTab("menu_6563");
         
         
         $(document).on('scroll', function (e) {
         
         if($(document).scrollTop() > 0) {
           $('.navbar.nav-v4').addClass('nav-scroll');
         }else {
           $('.navbar.nav-v4').removeClass('nav-scroll');
         }
         
         });
         
         $(document).ready(function() {
             SetGallery2ImageSize();
         });
         
         $( window ).resize(function() {
           SetGallery2ImageSize();
         });
         
         function SetGallery2ImageSize() {
           var windowWidth = $( window ).width();
           var imageHeight;
           if(windowWidth > 770){
             imageHeight = windowWidth / 4;
           }else{
             imageHeight = windowWidth / 2;
           }
           var bigImageHeight = imageHeight * 2;
         
           $('.gallery-v2-wrapper .gallery-image, .gallery-v2-wrapper .gallery-link').height(imageHeight+'px');
           $('.gallery-v2-wrapper .gallery-image-big').height(bigImageHeight+'px');
         }
         
         $(document).ready(function() {
             $('.image-link').magnificPopup({type:'image'});
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
         
         $(function () {
             $('.nav a').on('click', function () {
                 $('.navbar-collapse').collapse('hide');
             });
         
             init_map();
         
             $('#google_map_link').attr('href', google_map_url);
         });
         
         function init_map() {
             var var_location = new google.maps.LatLng( 34.0450312, -118.4324287);
         
             var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];
             var styledMap = new google.maps.StyledMapType(styles,{name: "Styled Map"});
         
             var var_mapoptions = {
                 center: var_location,
                 zoom: 14,
                 scrollwheel: false,
                 disableDoubleClickZoom: true,
                 draggable: false,
                 panControl: false,
                 streetViewControl: false,
                 mapTypeControlOptions: {
                   mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
                 }
             };
         
             var var_marker = new google.maps.Marker({
                 position: var_location,
                 map: var_map,
                 title: "Los Angeles"
             });
         
             var var_map = new google.maps.Map(document.getElementById("map-container"),
                 var_mapoptions);
         
             var_map.mapTypes.set('map_style', styledMap);
             var_map.setMapTypeId('map_style');
         
             if (marker_icon.length>0){
                 var_marker.setIcon(marker_icon);
             }
         
             var_marker.setMap(var_map);
         
             google.maps.event.addListener(var_marker, 'click', open_google_map);
         }
         function isAndroid(){
             return /Android/i.test(navigator.userAgent);
         }
         
         if (isAndroid()){
         $(".applicationsLink").attr("href", 'https://play.google.com/store/apps/details?id=com.spothopperapp.spothopper');
         }
         
         
         
         var navigation_alpha_starts_from = 0;
         var navigation_background_color = "rgba(0, 0, 0,";
         var navigation_darkens_on_scroll = "1";
         var top_nav_new_style = !navigation_darkens_on_scroll && ($(window).width() > 767);
         var custom_nav_style = "1";
         if(!custom_nav_style){
           $('.navbar-regular').css('background-color', 'rgba(255, 255, 255,' + navigation_alpha_starts_from + ')');
           $('.navbar-inverse').css('background-color', navigation_background_color + (top_nav_new_style ? 0 : navigation_alpha_starts_from) + ')');
         }
         
         if (navigation_darkens_on_scroll && !custom_nav_style) {
             $(document).on('scroll', function (e) {
                 var alpha = navigation_alpha_starts_from + $(document).scrollTop() / 1950;
                 $('.navbar-inverse').css('background-color', navigation_background_color + alpha + ')');
                 $('.navbar-regular').css('background-color', 'rgba(255, 255, 255,' + alpha + ')');
             });
         }
         
         if (!navigation_darkens_on_scroll && !custom_nav_style) {
             $(window).resize(function() {
                 if ($(window).width() > 767)
                     $('.navbar-inverse').css('background-color', navigation_background_color + 0 + ')');
                 else
                     $('.navbar-inverse').css('background-color', navigation_background_color + navigation_alpha_starts_from + ')');
             });
         }
         
         $(function () {
             $('.nav a').on('click', function () {
                 $('.navbar-collapse').collapse('hide');
             });
         });
         
         
         var animate_sections = ["aboutus_v2"];
         
         for (var i = 0; i < animate_sections.length; i++) {
           $('#'+animate_sections[i]).addClass('animation-element');
         }
         
         var $animation_elements = $('.animation-element');
         var $window = $(window);
         
         function check_if_in_view() {
         var window_height = $window.height();
         var window_top_position = $window.scrollTop();
         var window_bottom_position = (window_top_position + window_height/2);
         
         $.each($animation_elements, function() {
           var $element = $(this);
           var element_height = $element.outerHeight();
           var element_top_position = $element.offset().top;
           var element_bottom_position = (element_top_position + element_height/2);
         
           //check to see if this current container is within viewport
           if ((element_bottom_position >= window_top_position) &&
               (element_top_position <= window_bottom_position)) {
             $element.addClass('animate');
           } else {
             // $element.removeClass('in-view');
           }
         });
         }
         
         $window.on('scroll resize', check_if_in_view);
         $window.trigger('scroll');
		 
		 
		 
$(document).on('scroll', function (e) {

    if($(document).scrollTop() > 0) {
      $('.navbar.nav-v4').addClass('nav-scroll');
    }else {
      $('.navbar.nav-v4').removeClass('nav-scroll');
    }

});




		
			
			