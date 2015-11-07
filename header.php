<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<?php wp_head();?>
  <link href='https://fonts.googleapis.com/css?family=Coda' rel='stylesheet' type='text/css'>
</head>

<body>
  <div class="container nopadding">
  	<div class="row">
      <div class="header">
  		
  		<div class="col-xs-12 nav">
  			
  		<?php
        $defaults = array(
          'menu_class'      => 'nav nav-pills',
);
        wp_nav_menu( $defaults );
?>
<hr>
  		</div> <!-- end of nav --> 
    </div> <!-- end of header -->
</div>


<div class="category">

<h2><?php
		if(( is_home() )){
    		echo '- Start Your Adventure -';
}
		else{
        echo the_title();
}
?>
</h2>

</h2>
</div> <!-- end of category title -->