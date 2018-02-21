<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package koutoubia
 */

?><!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

  <head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head();  ?>
  </head>
   <body>
   


      <header class="header">

         <div id="home_page_cover"  style="height:100%;" >
            <div class="on-cover-content" class="fade-in one">
               <div id="slideshow_v2"
                  style="height:100%;"
                  >
                  <div class="uk-slidenav-position" data-uk-slideshow style="height:100%; overflow-y: hidden;">
                     <ul class="uk-slideshow slideshow-fullscreen">


                      <?php 

                      $slides = get_field('slides');



                      if($slides): 

                      foreach($slides as $slider){

                       
                        ?>
                     
                        <li>
                           <img src="<?php  echo $slider['slider_image']['url']; ?>" width="" height="" alt="">
                           <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center">
                              <div>
                                 <h3><?php echo  $slider['slider_title']; ?></h3>
                                 <p><?php echo  $slider['slider_subtitle']; ?></p>
                                 <a href="<?php echo  $slider['slider_link']['url']; ?>" class="uk-button uk-button-primary"><?php echo  $slider['slider_link']['title']; ?></a>
                              </div>
                           </div>
                        </li> <?php
                        }

                        endif;

                       ?>


                     <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                     <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                     <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center">
                        <li data-uk-slideshow-item="0"><a href="#"></a></li>
                        <li data-uk-slideshow-item="1"><a href="#"></a></li>
                        <li data-uk-slideshow-item="2"><a href="#"></a></li>
                        <li data-uk-slideshow-item="3"><a href="#"></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      


     
      <!-- nav -->
      <nav class="navbar nav-v4 navbar-regular navbar-fixed-top" role="navigation" id="navbar">
         <div>
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
            </div>

            <?php $logo_uploader = get_field('logo_uploader','options'); 

             if($logo_uploader): ?>
            <div class="header-logo logo-top">
               <a href="<?php echo home_url(); ?>"><img class="img-responsive logo-top" src="<?php echo $logo_uploader['url']; ?>"></a>
            </div>
       		 <?php endif; ?>


       		  <?php $logo_uploader = get_field('logo_uploader','options'); 

             if($logo_uploader): ?>
            <div class="header-logo logo-scroll">
               <a href="<?php echo home_url(); ?>"><img class="img-responsive logo-scroll" src="<?php echo $logo_uploader['url']; ?>"></a>
            </div>
			 <?php endif; ?>


            <ul class="socialnav">
			 <li class="social-links">

				
				<?php $facebook_url = get_field('facebook_url','options'); 
				if($facebook_url):  ?>
				<a href="<?php echo $facebook_url; ?>" target="_blank" class="pull-left"><i class="social-icon fab fa-facebook-f"></i></a>
				<?php endif; ?>
				
			 	<?php $twitter_url = get_field('twitter_url','options'); 
				if($twitter_url):  ?>
				<a href="<?php echo $twitter_url; ?>" target="_blank" class="pull-left"><i class="social-icon fab fa-instagram"></i></a>
				<?php endif; ?>
				


				<?php $spothopper_url = get_field('spothopper_url','options'); 
				if($spothopper_url):  ?>
				<a href="tel:<?php echo $spothopper_url; ?>" target="_blank" class="pull-left"><i class="social-icon fas fa-mobile-alt"></i></a>
				<?php endif; ?> 


				
				
			 </li>
            </ul>
            <div class="collapse navbar-collapse" id="navbar-collapse-1">

				<?php wp_nav_menu(array(
					'theme_location'		=> 'main-menu',
					'menu_class'			=> 'nav navbar-nav navbar-right',
					'fallback_cb'			=> 'defalut_main_menu',
					)); ?>
            
            </div>
         </div>
      </nav>
	  
	  </header>