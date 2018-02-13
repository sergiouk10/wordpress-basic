<?php
/**
 * The template partial for displaying the content-single
 *
 *
 * @package customTheme
 * @since customTheme 1.0
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> ><!-- TO ADD POST CLASS and ID TO ANY POST -->
  <h1><?php the_title(); ?></h1><!-- TITLE POST -->
  <p><?php the_date(); ?></p><!-- DATE OF CREATION POST -->
  <?php the_content(); ?><!-- CONTENT POST -->

  <!-- PAGINATION -->
  <?php 
      wp_link_pages( array(
        'before'       => '<div class="page-links"><span class="page-links-title">'. __('Pages: ', 'customtheme') . '</span>',
        'after'        => '</div>',
        'link_before'  => '<span>',
        'link_after'   => '</span>',
        'pagelink'     => '<span class="screen-reader-text">' . __( 'Page ', 'customtheme') . '</span>%',
        'separator'    => '<span class="screen-reader-text">, </span>'
      ));
  ?>
  <!-- PAGINATION -->
</div>