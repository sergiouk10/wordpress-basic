<?php
/**
 * The template for displaying the page type
 *
 *
 * @package customTheme
 * @since customTheme 1.0
 */
?>

<?php get_header(); ?>

<!-- PRINCIPAL CONTAINER Bootstrap -->
<div class="container">

  <!-- GENERAL LOOP -->
  <?php if ( have_posts() ) : ?><!-- GENERAL IF -->

    <?php while ( have_posts() ) : the_post(); ?><!-- GENERAL LOOP POST -->

      <h1><?php the_title(); ?></h1><!-- TITLE POST -->
      <?php the_content(); ?><!-- CONTENT POST -->

    <?php endwhile; ?><!-- GENERAL LOOP POST -->

  <?php endif; ?><!-- END GENERAL IF -->
  <!-- GENERAL LOOP -->

</div>
<!-- END PRINCIPAL CONTAINER Bootstrap -->

<?php get_footer(); ?>

