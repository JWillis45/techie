<?php get_header(); query_posts('posts_per_page=2'); ?>

<?php 

$args = array ('post_type' => 'features',
               'posts_per_page'=>'1');

$features = new WP_Query( $args );


if ($features -> have_posts()) : while ($features -> have_posts()) : $features -> the_post(); 

?>

     
     <div class="row">
  
    
    <a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php the_field('thumbnail');?>" alt=""></a>
  
</div>

<div class="row">     
    <div class="col-xs-12">
      <div class="title-box">
        <p>
          <a href="<?php the_permalink(); ?>">
        <?php the_title();?>
        </p>
      </div>
    </div>
</div>

  </div>
      	</a>
      </div>
    </div>

    <?php endwhile; else: ?>
      <p>Sorry, no pages matched your criteria.</p>
    <?php endif; wp_reset_postdata();?>



<div class="row mid-section">
    <?php if(have_posts()): while (have_posts()) : the_post(); ?>
    
      <a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php the_field('post-thumb');?>" alt=""></a>


  <div class="col-xs-12">
          <p class="post-titles">
            <a href="<?php the_permalink() ?>">
              <?php the_title();?>
            </a>
        </p>
  
      <?php endwhile; else: ?>
      <p>Sorry, no pages matched your criteria.</p>
      <?php endif; wp_reset_postdata();?>
    
  </div>


  

  <div class="col-xs-12 ads">
  
  <?php 

  $args = array ('post_type' => 'ads',
                 'posts_per_page'=>'2');

  $ads = new WP_Query( $args );


  if ($ads -> have_posts()) : while ($ads -> have_posts()) : $ads -> the_post(); 

  ?>

  <?php the_content(); ?>



      <?php endwhile; else: ?>
        <p>Sorry, no pages matched your criteria.</p>
      <?php endif; wp_reset_postdata();?>

  </div>
</div> <!-- end of mid-section -->


<?php get_footer(); ?>