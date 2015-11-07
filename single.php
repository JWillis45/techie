<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      
   <div class="row content">
   		<div class="col-xs-12 nopadding">
   		  	<img class="img-responsive" src="<?php the_field('thumbnail');?>" alt="">
 
     <?php the_content(); ?>
     	<div class="date">
     		- <?php echo get_the_date(); ?> -
     	</div>

     	

     </div>
     </div><!-- end of row content-->

   <div class="row post-nav">
   		<div class="col-xs-12 post-nav-content">
   			<div class="col-xs-4 previous-post-button btn btn-primary">
			<?php previous_post_link( '%link', 'Previous Post', TRUE ); ?>
		
			</div>
		<div class="col-xs-4 post-button-category">
			<p>| <?php the_category(', '); ?> |</p>
		</div>
		
		<div class="col-xs-4 next-post-button btn btn-primary">
		    <?php next_post_link( '%link', 'Next Post', TRUE ); ?>
		</div>
   		</div>
   </div>

<?php endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
     
     <div class="row single-lower-ad">
  
   
 <?php 

  $args = array('post_type' => 'banners',
                 'posts_per_page'=>'1',
                 'orderby'       => 'rand');

  $banners = new WP_Query( $args );


  if ($banners -> have_posts()) : while ($banners -> have_posts()) : $banners -> the_post(); 

  ?>
 

  <div class="col-xs-12 banner-thumbs nopadding">
	<div class="single-banner-content">
    	<?php the_content();?>
    </div>  
  </div>

</div>

<?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; wp_reset_postdata();?>
     
		

	

<?php get_footer(); ?>