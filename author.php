<?php get_header(); ?>

<div class="main">
  <div class="container">
    <p>EDITING AUTHOR PHP</p>
    <div class="content">

      <?php
      	/* Queue the first post, that way we know who
      	 * the author is when we try to get their name,
      	 * URL, description, avatar, etc.
      	 */
      	if ( have_posts() )
      		the_post();
      ?>

      <h1>Author Archives:
        <a class="name" href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>">
          <?php the_author(); ?>
        </a>
      </h1>

<div class="authorbio clearfix">
  <?php echo get_avatar( get_the_author_meta('user_email'), 150); ?> 

      <?php
      	// If a user has filled out their description, show a bio on their entries.
      	if ( get_the_author_meta('description') ) : ?>

<div class="authorbioText">
          <h2>About <?php the_author(); ?>
      	   <a href="<?php the_author_meta('user_url'); ?>"><?php the_author_meta('user_url'); ?></a>
           </h2>
           
      		<?php the_author_meta('description'); ?>

        <?php endif; ?>
</div>
</div>
      	<?php
      		rewind_posts();
      		get_template_part('loop', 'author');
      	?>
    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>