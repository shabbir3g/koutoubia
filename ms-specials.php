<?php 
/*
Template Name: Specials Page
*/
get_header('special'); ?>
         <div class="pagecontent">
            <div class="tabnav">
            </div>
            <div class="tabs-container" >
               <div class="scrolling">
                  <div class="container">
                     <h1><?php the_title(); ?></h1>
					 
					 
					 
					 <?php $special_sections = get_field('special_sections'); 
					 
					 
					 if($special_sections): 
					 
					 foreach($special_sections as $spec):?>
					
                     <div class="onespecial">
                        <h2><?php echo $spec['date_special']; ?>'th</h2>
                        <!-- Sunday may 8th -->
                        <div class="row">
                           <div class="col-sm-8">
                             <?php echo $spec['content_spec']; ?>                               
                           </div>
                           <div class="col-sm-4 text-right">
                              <?php echo $spec['start_time']; ?> - <?php echo $spec['end_time']; ?>
                           </div>
                        </div>
                     </div>
					 <?php endforeach; endif; ?>
					 
					
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php wp_footer(); ?>
   </body>
</html>