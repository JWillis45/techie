<?php get_header();
/*
Template Name: About Page
*/
?>

<div class="row entire-about nopadding">
	<div class="col-xs-12 about-title">
		<hr class="title-line-top">
		<h1><?php the_field('title');?></h1>
		<hr class="title-line-bottom">
	</div>
	

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<div class="col-xs-12 about-content">
		<?php the_content(); ?>
	</div>

		  <?php endwhile; else: ?>
		    <p>Sorry, no pages matched your criteria.</p>
		  <?php endif; ?>
	
</div><!-- end of row entire-about -->


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