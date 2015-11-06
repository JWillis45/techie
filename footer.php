	<div id="footer">
<div class="row footer-content">
	<div class="col-xs-12 footer-content">
		<h2>Contact Us</h2>
			<p>742 Evergreen Terrace <br>
			   Springfield, Ca 91325<br>
			   (661) 123-4567</p>
	</div>

	<div class="col-xs-12">
		<h2>Subscribe</h2>
	</div>
	
	<div class="email-form">
	<?php echo do_shortcode( '[contact-form-7 id="62" title="Contact form 1" minlength:10 maxlength:100]

' ); ?><!-- contact form -->
	</div>
	
	<div class="col-xs-12 social-media">
		<a href="https://instagram.com/?hl=en"><img src="<?php bloginfo('template_directory'); ?>/images/instagram-logo.png"></a>
		<a href="https://twitter.com/?hl=en"><img src="<?php bloginfo('template_directory'); ?>/images/twitter-logo.png"></a>
		<a href="https://facebook.com/?hl=en"><img src="<?php bloginfo('template_directory'); ?>/images/facebook-logo.png"></a>

	</div>
</div>


		<?php wp_footer(); ?>
	</div>
      
</div><!-- x content -->
</body>
</html>