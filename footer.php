<footer class="mainfooter">
  <div class="container">
  	<div class="footerParent">
	  	<div class="footerChild">
	  	<i class="fa fa-twitter-square"></i> <i class="fa fa-facebook-square"></i> <i class="fa fa-instagram"></i>
	  		<?php  dynamic_sidebar( 'secondary-widget-area' ); ?>
		    <p>&copy; Jane and Marlo <?php echo date('Y'); ?></p>
				<p>Proudly powered by <a href="/">WordPress</a></p>
				<p>Theme: Microscope by <a href="/">Jane</a> and <a href="/">Marlo</a></p>
			</div>
			<div class="footerChild">



			</div>

  </div>
</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>