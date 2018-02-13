<?php
/**
 * The template for displaying the index
 *
 *
 * @package customTheme
 * @since customTheme 1.0
 */
?>

<?php get_header(); ?>

<!-- PRINCIPAL CONTAINER Bootstrap -->
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <!-- GENERAL LOOP -->
      <?php if ( have_posts() ) : ?><!-- GENERAL IF -->

        <?php while ( have_posts() ) : the_post(); ?><!-- GENERAL LOOP POST -->

          <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?><!-- TITLE POST -->
          <?php the_content(); ?><!-- CONTENT POST --> 

        <?php endwhile; ?><!-- GENERAL LOOP POST -->

      <?php endif; ?><!-- END GENERAL IF -->
      <!-- GENERAL LOOP -->
    </div>
    <div class="col-md-4">
      <!-- SIDEBAR -->
      <?php get_sidebar(); ?>
      <!-- SIDEBAR -->
    </div>
  </div>
</div><!-- END PRINCIPAL CONTAINER Bootstrap -->


<?php get_footer(); ?>


