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

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	 		<?php the_content(); ?>

			<?php endwhile; else: ?>
	    		<p>Sorry, no pages matched your criteria.</p>
			<?php endif; ?>
		</div>
	</div><!-- end of row contact-form -->

</div><!-- end of row entire-contact -->


<div class="row">
<div class="col-xs-12 contact-ads nopadding">
  
  <?php 

  $args = array ('post_type' => 'ads',
                 'posts_per_page'=>'2',
                 'orderby'       => 'rand');

  $ads = new WP_Query( $args );


  if ($ads -> have_posts()) : while ($ads -> have_posts()) : $ads -> the_post(); 

  ?>

     <div class="col-xs-12 contact-ads-thumb nopadding">
    <div class="contact-ads-content">
      <?php the_content();?>
    </div>
  
  </div>




      <?php endwhile; else: ?>
        <p>Sorry, no pages matched your criteria.</p>
      <?php endif; wp_reset_postdata();?>

  </div>
</div>



<?php get_footer(); ?>

