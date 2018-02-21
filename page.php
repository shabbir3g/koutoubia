<?php 
/*
Template Name: Private page
*/
get_header('special'); ?>
<div class="pagecontent">
    <div class="tabnav">
    </div>
    <div class="tabs-container" >

        
                    <?php 
					while(have_posts()): the_post();
					
					the_content();
					
					endwhile;

					?>
           
    </div>
</div>
</div>
<?php wp_footer(); ?>

</body>
</html>
