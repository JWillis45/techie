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


<div class="row">
<div class="col-xs-12 about-ads nopadding">
  
  <?php 

  $args = array ('post_type' => 'ads',
                 'posts_per_page'=>'2',
                 'orderby'       => 'rand');

  $ads = new WP_Query( $args );


  if ($ads -> have_posts()) : while ($ads -> have_posts()) : $ads -> the_post(); 

  ?>

     <div class="col-xs-12 about-ads-thumb nopadding">
    <div class="about-ads-content">
      <?php the_content();?>
    </div>
  
  </div>




      <?php endwhile; else: ?>
        <p>Sorry, no pages matched your criteria.</p>
      <?php endif; wp_reset_postdata();?>

  </div>
</div>


<?php get_footer(); ?>