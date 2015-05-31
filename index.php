<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

	<section class="main">

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

	<!-- main section with hero images [marlo] -->
	<div class="default">
		<div class="page-full-img" style="background-image: url(<?php echo $url?>)">

			<h2 class="mainTitle">
				<a href="<?php the_permalink(); ?>"><span class="mib-title">
					<?php the_title(); ?>
				</span>
				</a>
			</h2>

			<!-- custom field OMG!! [marlo] -->		
			<h3 class="mainTitle">
				<span class="mib-title-h3">
					<?php the_field( 'page_caption'); ?>
				</span>
			</h2>

			<!-- scroll button + animate.css effect [marlo]-->
			<div class="main-scroll">
				<a href="/"<i class="fa fa-angle-down"></i></a>
			</div>

		</div>

				<?php
			}
		}
	 ?>
	<?php //endwhile; ?>
</div>

<!-- blog section - 6 posts max [marlo]-->

<div class="main-blog-intro">
	<h2>Recent Posts</h2>
</div>
<div class="main-flex">
<?php if(have_posts()) while(have_posts()) : the_post(); ?>

	<div class="main-postsBox">
		
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	</div>


<?php endwhile; ?>
</div>
</section> <!-- main section ends -->

<?php get_footer(); ?>