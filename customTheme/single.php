<?php
/**
 * The template for displaying the single
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

    <!-- LEFT CONTENT --> 
    <div class="col-md-8">
      <!-- GENERAL LOOP -->
      <?php if ( have_posts() ) : ?><!-- GENERAL IF -->

        <?php while ( have_posts() ) : the_post(); ?><!-- GENERAL LOOP POST -->
         
        
        <!-- TEMPLATE PART FOR CONTENT OF POST -->
        <?php get_template_part('template-parts/content', 'single'); ?>
        <!-- TEMPLATE PART FOR CONTENT OF POST -->


        <!-- COMMENTS -->

          <!-- COMMENTS -->
          <?php 
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            } 
          ?>
          <!-- COMMENTS -->

        <?php endwhile; ?><!-- GENERAL LOOP POST -->

      <?php endif; ?><!-- END GENERAL IF -->
      <!-- GENERAL LOOP -->

      <!-- NAVIGATION NEXT PREVIOUS -->
      <?php
        if ( is_singular( 'post' ) ) {
          the_post_navigation( array(
            'next_text' => 'Next',
            'prev_text' => 'Previous'
          ) );
        }
      ?>
      <!-- NAVIGATION NEXT PREVIOUS -->

    </div>
    <!-- LEFT CONTENT -->   

    <!-- SIDEBAR -->
    <div class="col-md-4"> 
      <?php get_sidebar(); ?>
    </div> 
    <!-- SIDEBAR -->

  </div>
</div><!-- END PRINCIPAL CONTAINER Bootstrap -->

<?php get_footer(); ?>


