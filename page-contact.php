<?php get_header();
/*
Template Name: Contact Page
*/
?>

<div class="row entire-contact">
	<div class="row">
		<div class="col-xs-12 contact-title nopadding">
			<h1><?php the_field('title');?><p><?php the_field('body_content');?></p></h1>

		</div>
	</div>

	<div class="row contact form">
		<div class="col-xs-12 nopadding">
        <div class="form">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	 		<?php the_content(); ?>

			<?php endwhile; else: ?>
	    		<p>Sorry, no pages matched your criteria.</p>
			<?php endif; ?>
		</div>
    </div>
	</div><!-- end of row contact-form -->

</div><!-- end of row entire-contact -->


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

