

<?php 
   /*
   Template Name: Contact Page
   */
   get_header('special'); ?>
<?php  $contact_page_maps = get_field('contact_page_maps'); 
   ?>
<div class="section section-header section-header-small">
   <div class="map">
      <?php echo $contact_page_maps; ?>
   </div>
</div>
<div class="section section-small section-get-started">
   <div class="container">
      <div class="row">
         <div class="col-md-12 ">
            <div class="title-area-descr">
               <?php $form_title = get_field('form_title'); 
                  if($form_title): ?>
               <h2 class="text-dark"><?php echo $form_title; ?><br /></h2>
               <?php endif; ?>
               <div class="divider-grey"></div>
            </div>
            <div class="row">
               <div class="col-md-8 col-md-offset-2">
                  <div class="contact-form">
                     <?php	
                        $contact_form = get_field('contact_form'); 
                        
                        if($contact_form): ?>
                     <?php echo do_shortcode($contact_form); ?>
                     <?php endif; ?>
                 
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php  $parking_maps = get_field('parking_maps'); 
   ?>
<div class="section section-header section-header-small">
   <div class="map">
      <img src="<?php echo $parking_maps['url']; ?>" alt="<?php echo $parking_maps['title']; ?>" />
   </div>
</div>
<!--Section Infos pratiques-->
<div class="section section-common">
<div class="filter filter-color-black">
   <div class="image" style="background-image:url('https://ugc.zenchef.com/3/4/4/6/0/0/1/3/8/0/1/1505423222_338/c378b6d1b730c618620a054865a297ae.website_hd.jpg')">
   </div>
   <div class="container" style="margin-top: 50px;">
      <div class="content">
         <div class="team">
            <div class="row">
               <div class="col-md-10 col-md-offset-1">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="content">
                           <div class="title-area-about">
                              <!-- Infos pratiques-->
                              
							  
							  <?php	
							  
								$widget_one = get_field('widget_one'); 
								
								if($widget_one): ?>
								
								<div class="widget-h w-infos">
							 <?php echo $widget_one; ?>
								  </div>
							 
							 <?php endif; ?>
							  
                               
								 
                           
                           </div>
                        </div>
                     </div>
                     <!-- Opening Hours-->
                     <div class="col-md-6">
                        <div class="content">
                           <div class="title-area-about">
                            
							  
							  
							<?php	
						  
							$widget_two = get_field('widget_two'); 
								
								if($widget_two): ?>
								<div class="widget-h w-infos">
							 <?php echo $widget_two; ?>
							  </div>
							 <?php endif; ?>
								 
								 
                             
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="content">
                              <div class="title-area-about">
                                 <!-- Acces -->
                                 
								 
								 
								 <?php	
						  
							$widget_three = get_field('widget_three'); 
								
								if($widget_three): ?>
								<div class="widget-h w-infos">
							 <?php echo $widget_three; ?>
							 </div>
							 <?php endif; ?>
								 
								 
                                    
									
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


<div class="section section-small section-get-started open-hours section-instagram">
   <div class="parallax filter filter-color-grey">
      <div class="container">
         <div class="row">
            <div class="col-md-12 ">
					
					 <?php	
				  
					$block_title = get_field('block_title'); 
						
						if($block_title): ?>
						
					 <h2 class="text-dark"><?php echo $block_title; ?></h2>
					 
					 
					 <?php endif; ?>
			
			
              
               <div class="divider"><i class="fa fa-instagram"></i></div>
            </div>
         </div>
         <div class="row">
            <div id="instafeed" class="instafeed">
			
				 <?php	
						  
				$bottoms_block = get_field('bottoms_block'); 
					
				if($bottoms_block): 
				
				foreach($bottoms_block as $block): ?>
               <div class="instafeed">
                  <a href="<?php echo $block['block_link']; ?>">
                     <img src="<?php echo $block['block_image']['url']; ?>">
                     <div class="photo-box">
                        <div class="descr-title">
						<?php echo $block['block_content']; ?>
                        </div>
                        <div class="date"></div>
                     </div>
                  </a>
               </div>
			   <?php endforeach; endif; ?>
               
			   
			   
			   
			   
            </div>
         </div>
      </div>
   </div>
</div>



<?php get_footer(); ?>

