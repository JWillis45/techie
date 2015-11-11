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
  <div class="mid-contain">
    <div id="column-wrap">
<?php $count = 0;
 
while(have_posts()) : the_post(); ?>
 
<div class="box<?php if( $count%2 == 0 ) { echo '-1'; }; $count++; ?>">



    <div class="col-xs-12 col-sm-7 posts">
    
      <div class="post-pics">
      <div class="post-thumbs">
        <a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php the_field('thumbnail');?>" alt=""></a>
      </div>
          <p class="post-titles">
            <a href="<?php the_permalink() ?>">
              <?php the_title();?>
            </a>
          </p>
  
      
     
    
  </div>
  </div>



  </div>
 
<?php endwhile; ?> <?php wp_reset_postdata();?>
</div><!--end column-wrap-->


  

  <div class="col-xs-12 col-sm-5 ads ">
  
  <?php 

  $args = array ('post_type' => 'ads',
                 'posts_per_page'=>'2',
                 'orderby'       => 'rand');

  $ads = new WP_Query( $args );
    if ($ads -> have_posts()) : while ($ads -> have_posts()) : $ads -> the_post(); 
?>

      <div class="ads-thumb nopadding">
        <div class="ads-content">
            <?php the_content();?>
        </div>
  
      </div>
      <?php endwhile; else: ?>
        <p>Sorry, no pages matched your criteria.</p>
      <?php endif; wp_reset_postdata();?>

  </div>
</div>
</div> <!-- end of mid-section -->








<div class="row starry-section">
  <div class="col-xs-12 col-sm-6">
  </div>

  <div class="col-xs-12 col-sm-6 popular">
    <div class="row">
      <div class="col-xs-12">
        <h2>Popular</h2>
      </div>
    </div>

<?php 

  $args = array('post_type' => 'post',
                'posts_per_page'=>'3',
                'category_name'=> 'popular'
  );

  $popular_post = new WP_Query( $args );

if ($popular_post -> have_posts()) : while ($popular_post -> have_posts()) : $popular_post -> the_post(); 

  

  ?>
  
    
    <div class="row">
        <div class="col-xs-12 col-sm-6 pop-column nopadding">
            <div class="popular-posts">
              <a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php the_field('thumbnail');?>" alt=""></a>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 pop-title-column nopadding">

          <div class="popular-titles">
            <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
          </div>
        </div>

            
    </div>
        <?php endwhile; else: ?>
              <p>Sorry, no pages matched your criteria.</p>
            <?php endif; wp_reset_postdata();?>
    

  </div><!-- end of col popular  -->
</div><!-- end of row starry-section -->

 





<div class="row lower-ad">
    <div class="col-xs-12">
    
    <?php 

    $args = array('post_type' => 'banners',
                   'posts_per_page'=>'1',
                   'orderby'       => 'rand');

    $banners = new WP_Query( $args );

  if ($banners -> have_posts()) : while ($banners -> have_posts()) : $banners -> the_post(); 
?>
   

    <div class="col-xs-12 banner-thumbs">
      <div class="banner-content">
        <?php the_content();?>
      </div>
    </div>
  </div>
</div><!-- end row lower-ad -->





      <?php endwhile; else: ?>
        <p>Sorry, no pages matched your criteria.</p>
      <?php endif; wp_reset_postdata();?>
 



<?php get_footer(); ?>