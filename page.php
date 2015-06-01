<?php get_header();  ?>

<div class="page-wrapper">

      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'full') ); ?>

<div class="page-content">

<!-- COOL PICTURE EFFECT -->
<div class="page-img-container">
  	<div class="page-img-box"></div>
  	 <img src="<?php echo $url ?>" class="page-img"/>
  	</div>

  	<div class="page-text">
      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div>
</div> <!-- /content -->


</div> <!-- /main -->

<?php get_footer(); ?>