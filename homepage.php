 <?php 

 /*
Template Name: Home Page
 */
get_header(); ?>

   <div id="aboutus_v2" class="about-us-v2-wrapper section-wrapper" 
         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/sections_background.jpg')"
         >
         <div class="container about-us-v2">
            <div class="row">
               <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="text-wrapper">

                     <?php 
                     $about_content =  get_field('about_content');
                    if($about_content):  ?>
                        
                     <?php echo $about_content; ?>
                   
                     <?php endif; ?>

                  </div>
               </div>
               <div class="col-md-5 col-sm-5 col-xs-12">
                  <?php $about_image = get_field('about_image'); 
                  if( $about_image):  ?>
                  <div><img class="img-responsive" src="<?php echo  $about_image['url']; ?>" /></div>
               <?php endif; ?>
               </div>
            </div>
         </div>
      </div>
      <div id="gallery_v2" class="gallery gallery-v2-wrapper section-wrapper" >
         <!-- Gallery start -->
         <div class="row gallery-holder">
            <div class="left-side-images col-xs-12 col-md-6">
               <div class="row">

                  <?php 
                  $first_gallery_image_l = get_field('first_gallery_image_l');
                  if($first_gallery_image_l): ?>
                  <div class="col-xs-12 col-md-12 gallery-image" style="background-image: url('<?php echo $first_gallery_image_l['url']; ?>');">
                  </div>
                  <?php endif; ?>


                   <?php 
                  $second_gallery_image_l = get_field('second_gallery_image_l');
                  if($second_gallery_image_l): ?>
                  <div class="col-xs-6 col-md-6 gallery-image" style="background-image: url('<?php  echo  $second_gallery_image_l['url']; ?>');">
                  </div>
                   <?php endif; ?>

                   <?php 
                  $left_gallery_link = get_field('left_gallery_link');
                  if($left_gallery_link): ?>
                  <div class="col-xs-6 col-md-6 gallery-link brown-bg">
                     <a href="<?php echo $left_gallery_link['url']; ?>">
                        <p class="icon-holder">
                           <img src="<?php echo get_template_directory_uri(); ?>/images/gallery_icons/food_white.png" />
                           <span><?php echo $left_gallery_link['title']; ?></span>
                        </p>
                     </a>
                  </div>
                   <?php endif; ?>


               </div>
            </div>
            <div class="right-side-images col-xs-12 col-md-6">
               <div class="row">

                  <?php 
                  $third_gallery_image_r = get_field('third_gallery_image_r');
                  if($third_gallery_image_r): ?>
                  <div class="col-xs-6 col-md-6 gallery-image-big" style="background-image: url('<?php echo  $third_gallery_image_r['url']; ?>');">
                  </div>
               <?php endif; ?>


                  <div class="col-xs-6 col-md-6">
                     <div class="row">


                           <?php 
                  $right_gallery_link = get_field('right_gallery_link');
                  if($right_gallery_link): ?>
                        <div class="col-xs-12 col-md-12 gallery-link brown-bg">
                           <a target="_blank" href="<?php echo $right_gallery_link['url']; ?>">
                              <p class="icon-holder">
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/gallery_icons/calendar_white.png" />
                                 <span><?php echo $right_gallery_link['title']; ?></span>
                              </p>
                           </a>
                        </div>
                    <?php endif; ?>


                        <?php 
                        $fourth_gallery_image_r = get_field('fourth_gallery_image_r');
                        if($fourth_gallery_image_r): ?>
                        <div class="col-xs-12 col-md-12 gallery-image desktop-gallery-v2-image" style="background-image: url('<?php echo $fourth_gallery_image_r['url']; ?>');">
                        </div>
                       <?php endif; ?>



                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Gallery END -->
      </div>

      

      <div id="specials" class="specials-v3 home-specials section-wrapper"
         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/sections_background.jpg')"
         >

         <?php 
         $section_title_sp = get_field('section_title_sp'); 
         if( $section_title_sp):  ?>
         <h3 class="section-header"><?php echo  $section_title_sp; ?></h3>
      <?php endif; ?>
         <div class="specials-section">
              <?php 
         $button_link_sp = get_field('button_link_sp'); 
         if( $button_link_sp):  ?>
            <div class="specials-button">
               <a href="<?php echo $button_link_sp['url']; ?>">
               <?php echo $button_link_sp['title']; ?> </a>
            </div>
          <?php endif; ?>
         </div>
      </div>


      <div class="reservations-wrapper ot-reservations-wrapper section-wrapper">
         <div id="reservations_open_table" class="container text-center reservations">
            <div class="row">
               <div class="col-md-12 col-xs-12 col-sm-12">
                  <h3 class="section-header">Reservations</h3>
                  <p>Call us at <a href="tel:+13104750729">(310) 475-0729</a> or book a table through Open Table:</p>
               </div>
            </div>
            <div class="open-table-holder open-table-desktop">
               <script type='text/javascript' src='http://www.opentable.com/widget/reservation/loader?rid=20353&amp;domain=com&amp;type=standard&amp;theme=wide&amp;lang=en&amp;overlay=false&amp;iframe=true'></script>
            </div>
            <div class="open-table-holder open-table-mobile open-table-standard">
               <script type='text/javascript' src='http://www.opentable.com/widget/reservation/loader?rid=20353&amp;domain=com&amp;type=standard&amp;theme=standard&amp;lang=en&amp;overlay=false&amp;iframe=true'></script>
            </div>
         </div>
      </div>

      <?php 

      $section_background_rev = get_field('section_background_rev'); 
      if($section_background_rev): ?>
      <div id="reviews" class="reviews-wrapper section-wrapper" 
         style="background-image: url('<?php echo $section_background_rev['url']; ?>')"
         >
         <div class="reviews">
            <div>
               <div class="review-content">
             <?php     
      $section_title_rev = get_field('section_title_rev'); 
      if($section_title_rev): ?>
                  <h3 class="section-header"><?php echo $section_title_rev; ?></h3>
               <?php endif; ?>
                  <div id="reviews_slider" class="review-slide" style="position: relative; top: 0px; left: 0px; width: 400px; height: 250px">
                     <div class="slides" u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 400px; height: 250px;">


                     <?php     
                     $reviews = get_field('reviews'); 
                     if($reviews): 
                        foreach($reviews  as $rev): ?>
                        <div class="review">
                           <div>
                              <p><?php echo $rev['review_quotations']; ?></p>
                           </div>
                           <div>
                              <p>- <?php echo $rev['author_name']; ?></p>
                           </div>
                        </div>
                     <?php endforeach; endif; ?>

                     </div>
                     <div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;">
                        <div u="prototype"></div>
                     </div>
                     <span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;">
                     </span>
                     <span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;">
                     </span>
                     <a style="display: none" href="http://www.jssor.com/">Bootstrap Slider</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php endif; ?>




      <div id="gallery" class="gallery section-wrapper" >
         <!-- FIXME: Add with-background CSS class if necessary -->
         <div class="container text-center" >

              <?php     
            $gallery_title_gal = get_field('gallery_title_gal'); 
            if($gallery_title_gal): ?>
            <label class="section-header"><?php echo  $gallery_title_gal; ?></label>
            <?php endif; ?>

            <br /><br />
            <div class="row">



               <?php $gallery_image = get_field('gallery_image'); 



               if($gallery_image): 
               foreach($gallery_image as $gal):

                
                 ?>
               <div class="col-lg-3 col-md-3 col-xs-6 thumb gallery-item">
                  <a href="<?php   echo $gal['url']; ?>" class="image-link" >
                  <img class="img-responsive" src="<?php   echo $gal['url']; ?>" alt="<?php   echo $gal['title']; ?>">
                  </a>
               </div>
               <?php endforeach; endif; ?>

         </div>
      </div>


     


      <div id="googlemap" class="googlemap-v2 section-wrapper">
         <div class="maps-wrapper">
            <div style="position: relative;">
               <div id="map-container"></div>
               <div class="map-footer text-center">
                  <div class="triangle"></div>
               </div>
            </div>
         </div>
      </div>

       <?php  $google_maps = get_field('google_maps'); 

      ?>

      <script> 

      function init_map() {
            
             var var_location = new google.maps.LatLng( <?php echo $google_maps['lat']; ?>, <?php echo $google_maps['lng']; ?>);
         
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

      </script>
      

<?php get_footer(); ?>