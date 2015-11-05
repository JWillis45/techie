<?php get_header(); query_posts('posts_per_page=2'); ?>

<?php 

$args = array ('post_type' => 'features',
               'posts_per_page'=>'1'
);

$features = new WP_Query( $args );


if ($features -> have_posts()) : while ($features -> have_posts()) : $features -> the_post(); 

?>

     
     <div class="row features"> <!-- Feature Image-->
  
      <div class="col-xs-12 nopadding">
        <a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php the_field('thumbnail');?>" alt=""></a>
      </div>
    </div>

<div class="row"> <!-- Feature Title -->    
    <div class="title-box">
        <p>
          <a href="<?php the_permalink(); ?>">
        <?php the_title();?>
        </p>
    </div>
          </a>
   

    <?php endwhile; else: ?>
      <p>Sorry, no pages matched your criteria.</p>
    <?php endif; wp_reset_postdata();?>








<div class="row mid-section"> <!-- Posts Images and Titles -->
    
    <?php if(have_posts()): while (have_posts()) : the_post(); ?>
      <div class="post-thumbs">
        <a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php the_field('post_thumb');?>" alt=""></a>
      </div>

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


  

  <div class="col-xs-12 ads nopadding">
  
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
</div>
</div> <!-- end of mid-section -->








<div class="row starry-section">
  <div class="col-xs-12">
    <h2>Popular</h2>
<?php 

  $args = array('post_type' => 'post',
                 'posts_per_page'=>'3',
                 'category_name'=> 'popular'
  );

  $post = new WP_Query( $args );

  if ($post -> have_posts()) : while ($post -> have_posts()) : $post -> the_post(); 

  ?>

<div class="popular-posts">
          <a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php the_field('post_thumb');?>" alt=""></a>
          <div class="popular-titles">
          <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
          </div>
</div>

    <?php endwhile; else: ?>
        <p>Sorry, no pages matched your criteria.</p>
      <?php endif; wp_reset_postdata();?>
  </div>
</div>




<div class="row lower-ad">
  
   
 <?php 

  $args = array('post_type' => 'banners',
                 'posts_per_page'=>'1');

  $banners = new WP_Query( $args );


  if ($banners -> have_posts()) : while ($banners -> have_posts()) : $banners -> the_post(); 

  ?>
 

  <div class="col-xs-12 banner-thumbs">
    <?php the_content();?>
  
  </div>
</div>




      <?php endwhile; else: ?>
        <p>Sorry, no pages matched your criteria.</p>
      <?php endif; wp_reset_postdata();?>
 



<?php get_footer(); ?>