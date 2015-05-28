<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<section class="main hero">



<!-- THE BELOW IS A LOOP WHICH GETS CONTENT FROM ALL POSTS AND PUBLISHES IT TO THE FRONT PAGE [jane] -->
<?php //get_template_part( 'loop', 'index' );	?>

<!-- +++++THIS IS THE BIG HERO IMAGE PAGE WHICH PULLS IN FROM PAGES+++++ -->

<div class="page-full-img">
	<h2 class="maintitle"><span class="mib-title">Title of page</span></h2>
	<p class="maintitle"><span class="mib-body">text of page</span></p>
	<!-- vvv this is the div for the arrow pointing down vvvv -->
	<div class="downward-dog"></div>
</div>

<div class="page-full-img">
	<h2 class="maintitle"><span class="mib-title">Title of page</span></h2>
	<p class="maintitle"><span class="mib-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda perspiciatis ut soluta accusamus voluptates sint, esse iusto ipsa. Facilis vel cum quis ea, cumque id?</span></p>
	<div class="downward-dog"></div>
</div>

<div class="page-full-img">
	<h2 class="maintitle"><span class="mib-title">Title of page</span></h2>
	<p class="maintitle"><span class="mib-body">text of page</span></p>
	<div class="downward-dog"></div>
</div>

<!-- six  posts which are also flexed [jane] -->

<div class="main-flex">

	<div class="main-box">
		<p class="flex-text"> in here we should put the text for post/blog posts </p>
	</div>

	<div class="main-box">
		<p class="flex-text"> in here we should put the text for post/blog posts  </p>
	</div>

	<div class="main-box">
		<p class="flex-text"> in here we should put the text for post/blog posts  </p>
	</div>

	<div class="main-box">
		<p class="flex-text"> in here we should put the text for post/blog posts  </p>
	</div>

	<div class="main-box">
		<p class="flex-text"> in here we should put the text for post/blog posts  </p>
	</div>

	<div class="main-box">
		<p class="flex-text"> in here we should put the text for post/blog posts  </p>
	</div>

</div>

</section> <!-- /.main -->

<?php get_footer(); ?>