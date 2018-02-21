<?php 
/*
Template Name: Menu Page
*/
get_header('menu'); ?>
      <div class="pagecontent "  >
         <div class="tabnav">
            <ul class="nav navbar-nav">
               <li class="menu_6563_link active" style="width:50%;">
			   
				<?php 
				$dinner_title = get_field('dinner_title'); 
				if($dinner_title): ?>
                  <a href="#"  onclick="showTab('menu_6563');"><?php echo $dinner_title; ?></a>
				<?php endif; ?>
				  
               </li>
               <li class="menu_8843_link" style="width:50%;">
			   <?php 
			   $passover_seder_to = get_field('passover_seder_to-go_title'); 
				if($passover_seder_to): ?>
                  <a href="#" onclick="showTab('menu_8843');"><?php echo $passover_seder_to; ?> </a>
				<?php endif; ?>
               </li>
            </ul>
         </div>
         <div class="tabs-container" >
            <div class="menu_6563 scrolling">
               <div class="container">
			   
			   
				<?php 
				$total_item = get_field('total_item'); 
				if($total_item): 
				
				foreach($total_item as $ttitm): ?>
                  <div>
                     <h4><?php echo $ttitm['item_n']; ?></h4>
                     <div class="row">
                     </div>
					 
					 
					 
					 <?php $tt = $ttitm['item_all'];
					 foreach($tt as $amitt): ?>
                     <table>
                        <tr>
                           <td class="menu-item-name-traditional">
                              <div><?php echo $amitt['item_name']; ?></div>
                           </td>
                           <td class="menu-item-price-traditional">
                              <div class="food-price"><?php echo $amitt['item_price']; ?></div>
                           </td>
                        </tr>
                        <tr>
                           <td colspan="2" class="menu-item-description-traditional">
                              <div class="food-description"><?php echo $amitt['item_description']; ?></div>
                           </td>
                        </tr>
                     </table>
					 <?php endforeach; ?>
					 
					 
                  </div>
				  
				  
				  <?php endforeach; endif; ?>
				  
				  
               </div>
            </div>
            <!-- end of food menu, scrolling -->
            <div class="menu_8843 scrolling">
               <div class="container">
			   
			   
			   
			   <?php 
			   $passover_item = get_field('passover_item'); 
			   ?>
			   
			   
			   
			   <?php 
				$passover_item = get_field('passover_item'); 
				if($passover_item): 
				
				foreach($passover_item as $ttipassover_item): ?>
                  <div>
                     <h4><?php echo $ttipassover_item['passover_item_name']; ?></h4>
                     <div class="row">
                        <div class="col-md-1 col-sm-1 hidden-xs"></div>
                        <div class="section-description col-md-10 col-sm-10 col-xs-12"><?php echo $ttipassover_item['passover_item_subtitle']; ?></div>
                        <div class="col-md-offset-1 col-sm-offset-1 hidden-xs"></div>
                     </div>
                     
					 
					 
					 <?php $ipassover = $ttipassover_item['passover_list'];
					 
					 if($ipassover): 
					 
					 foreach($ipassover as $amiipassover): ?>
                     <table>
                        <tr>
                           <td class="menu-item-name-traditional">
                              <div><?php echo $amiipassover['passover_name_list']; ?></div>
                           </td>
                           <td class="menu-item-price-traditional">
                           </td>
                        </tr>
                        <tr>
                           <td colspan="2" class="menu-item-description-traditional">
                              <div class="food-description"><?php echo $amiipassover['passover_description']; ?></div>
                           </td>
                        </tr>
                     </table>
					 <?php endforeach; endif; ?>
					 
					 
					 
                  </div>
				  
				  <?php endforeach; endif; ?>
				  
				<!--  
				  
                  <div>
                     <h4>Choice of Entree</h4>
                     <div class="row">
                        <div class="col-md-1 col-sm-1 hidden-xs"></div>
                        <div class="section-description col-md-10 col-sm-10 col-xs-12">Each Take-Away Dinner includes Choice of Entree:</div>
                        <div class="col-md-offset-1 col-sm-offset-1 hidden-xs"></div>
                     </div>
                     <table>
                        <tr>
                           <td class="menu-item-name-traditional">
                              <div>Roasted Chicken with House Preserved Lemons and Olives</div>
                           </td>
                           <td class="menu-item-price-traditional">
                           </td>
                        </tr>
                        <tr>
                           <td colspan="2" class="menu-item-description-traditional">
                              <div class="food-description"></div>
                           </td>
                        </tr>
                     </table>
                     <table>
                        <tr>
                           <td class="menu-item-name-traditional">
                              <div>Roasted Chicken with Prunes and Honey Sauce</div>
                           </td>
                           <td class="menu-item-price-traditional">
                           </td>
                        </tr>
                        <tr>
                           <td colspan="2" class="menu-item-description-traditional">
                              <div class="food-description"></div>
                           </td>
                        </tr>
                     </table>
                     <table>
                        <tr>
                           <td class="menu-item-name-traditional">
                              <div>Lamb Tagine with Almonds, Raisins and Honey Sauce</div>
                           </td>
                           <td class="menu-item-price-traditional">
                           </td>
                        </tr>
                        <tr>
                           <td colspan="2" class="menu-item-description-traditional">
                              <div class="food-description"></div>
                           </td>
                        </tr>
                     </table>
                     <table>
                        <tr>
                           <td class="menu-item-name-traditional">
                              <div>Lamb Tagine with Tomatoes, Fresh Herbs and Green Israeli Olives</div>
                           </td>
                           <td class="menu-item-price-traditional">
                           </td>
                        </tr>
                        <tr>
                           <td colspan="2" class="menu-item-description-traditional">
                              <div class="food-description"></div>
                           </td>
                        </tr>
                     </table>
                  </div> -->
               </div>
            </div>
            <!-- end of food menu, scrolling -->
         </div>
      </div>
      <?php wp_footer(); ?>
   </body>
</html>