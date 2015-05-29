<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<section class="main hero">

<!-- THE BELOW IS A LOOP WHICH GETS CONTENT FROM ALL POSTS AND PUBLISHES IT TO THE FRONT PAGE [Jane] -->

<?php //get_template_part( 'loop', 'index' );	?>

<!-- THIS IS THE BIG HERO IMAGE PAGE WHICH PULLS IN FROM PAGES -->

<?php //if(have_posts()) while(have_posts()) : the_post(); ?>

<?php 

	$pageArgs = array('post_type' => 'page');
	$pageQuery = new WP_Query($pageArgs);

	if($pageQuery->have_posts())  {
		while($pageQuery->have_posts()) {
			$pageQuery->the_post();
			?>

		<?php  
			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			?>
			
		

<div class="page-full-img" style="background-image: url(<?php echo $url?>)">
	<h2 class="maintitle"><span class="mib-title"><?php the_title(); ?></span></h2>
	<p class="maintitle"><span class="mib-body">text of page</span></p>
	<!-- vvv this is the div for the arrow pointing down vvvv -->
	<div class="downward-dog"></div>
</div>

			<?php
		}
	}
 ?>



<?php //endwhile; ?>


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