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
     </div><!-- end of row -->

   <div class="row post-nav">
   		<div class="col-xs-4 previous-post-button btn btn-primary">
			<?php previous_post_link( '%link', 'Previous post', TRUE ); ?>
		
		</div>
		<div class="col-xs-4 post-button-category">
			<p>| <?php the_category(', '); ?> |</p>
		</div>
		
		<div class="col-xs-4 next-post-button btn btn-primary">
		    <?php next_post_link( '%link', 'Next post', TRUE ); ?>
		</div>
   </div>
     <br>
     
		

	<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>

<?php get_footer(); ?>