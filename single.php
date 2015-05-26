<?php get_header(); ?>

<div class="main">
  <div class="container">
    <p>Hi! I am editing single.php</p>

    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1 class="entry-title"><?php the_title(); ?></h1>

          <div class="entry-meta">
            <a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>"><?php echo get_avatar( get_the_author_meta('ID'), 100); ?></a>

<!-- <?php the_author_posts_link();?> is a shorthand -->

          Posted by 
          <a class="name" href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>"><?php the_author(); ?></a> 
          On <?php the_date('D M d (H:i A)'); ?> 


          </div><!-- .entry-meta -->

          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

          <div class="entry-utility">
            <?php hackeryou_posted_in(); ?>
            <?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-utility -->
        </div><!-- #post-## -->

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>