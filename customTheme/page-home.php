<?php
/**
 * Template Name: Home Page
 *
 *
 * @package customTheme
 * @since customTheme 1.0
 */
?>

<?php get_header(); ?>
<?php masterslider(1); ?>
<!-- BIG BANNER FOR TOP WITH BOOTSTRAP -->
<div class="jumbotron gradient-bg margin-neg-20"> 
  <div class="container text-center">
    <h1>Welcome to our custom site</h1>
  </div>
</div>
<!-- BIG BANNER FOR TOP WITH BOOTSTRAP -->

<!-- PRINCIPAL CONTAINER Bootstrap -->
<div class="container">
  <div class="row">

      <!-- GENERAL LOOP -->
      <?php if ( have_posts() ) : ?><!-- GENERAL IF -->

        <?php while ( have_posts() ) : the_post(); ?><!-- GENERAL LOOP POST -->

          <?php the_content(); ?><!-- CONTENT POST -->

        <?php endwhile; ?><!-- GENERAL LOOP POST -->

      <?php endif; ?><!-- END GENERAL IF -->
      <!-- GENERAL LOOP -->

  </div>
</div>
<!-- END PRINCIPAL CONTAINER Bootstrap -->

<?php get_footer(); ?>

