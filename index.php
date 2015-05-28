<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main hero">



<!-- THE BELOW IS A LOOP WHICH GETS CONTENT FROM ALL POSTS AND PUBLISHES IT TO THE FRONT PAGE [jane] -->
<?php //get_template_part( 'loop', 'index' );	?>

<!-- +++++THIS IS THE BIG HERO IMAGE PAGE WHICH PULLS IN FROM PAGES+++++ -->

<div class="page-full-img">
	<h2 class="mib"></h2>
	<p class="mib"></p>
</div>
<div class="page-full-img">
	<h2 class="mib"></h2>
	<p class="mib"></p>
</div>
<div class="page-full-img">
	<h2 class="mib"></h2>
	<p class="mib"></p>
</div>

<!-- six  posts which are also flexed [jane] -->

<div class="main-flex">

	<div class="main-box">
		<p class="flex-text"></p>
	</div>

	<div class="main-box">
		<p class="flex-text"></p>
	</div>

	<div class="main-box">
		<p class="flex-text"></p>
	</div>

	<div class="main-box">
		<p class="flex-text"></p>
	</div>

	<div class="main-box">
		<p class="flex-text"></p>
	</div>

	<div class="main-box">
		<p class="flex-text"></p>
	</div>

</div>

</div> <!-- /.main -->

<?php get_footer(); ?>