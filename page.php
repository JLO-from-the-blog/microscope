<?php get_header();  ?>

<div class="page-wrapper">

      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'full') ); ?>
<img src="<?php echo $url ?>" class="fmylife"/>




    <div class="content">

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->


</div> <!-- /.main -->

<?php get_footer(); ?>