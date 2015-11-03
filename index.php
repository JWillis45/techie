<?php get_header(); query_posts('posts_per_page=2'); ?>

<?php 

$args = array ('post_type' => 'features',
               'posts_per_page'=>'1');

$features = new WP_Query( $args );


if ($features -> have_posts()) : while ($features -> have_posts()) : $features -> the_post(); 

?>

<div class="row">
	<div class="col-xs-12">
      <div class="main-image">
      	<a href="<?php the_permalink() ?>">
     
 <div class="row">
  <div class="col-xs-12 feature-image">
    <?php the_content();?>
  </div>
</div>

<div class="row">     
    <div class="col-xs-12">
      <div class="title-box">
        <p>
          <a href="<?php the_permalink() ?>">
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
<?php endif; ?>



<?php if(have_posts()): while (have_posts()) : the_post(); ?>

      <h2>
      	<a href="<?php the_permalink() ?>">
      		<?php the_title(); ?>
      	</a>
      </h2>

<?php endwhile; endif; ?>

<?php get_footer(); ?>