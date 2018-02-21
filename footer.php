<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package koutoubia
 */

?>
 <div id="contact_v3" class="contact-v3 section-wrapper">
         <div class="container">
            <div class="row">
			<?php dynamic_sidebar('f-widget'); ?>
				
         
            </div>
         </div>
      </div>
      <div id="footer" class="footer">
         <div class="container">
            <div class="row">
            	<?php $footer_logo = get_field('footer_logo','options'); 
            	if($footer_logo): ?>
               <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                  <p>Powered by <img src="<?php echo $footer_logo['url']; ?>" class="logoimg" alt=""/></p>
               </div>
           		<?php endif; ?>

           		<?php $footer_link = get_field('footer_link','options'); 


            	if($footer_link): ?>
               <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                  <a href="<?php echo $footer_link['url']; ?>"><?php echo $footer_link['title']; ?></a>
               </div>
               <?php endif; ?>


            </div>
         </div>
      </div>
	  
	 

	 <?php wp_footer(); ?>
   </body>
</html>