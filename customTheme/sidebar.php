<?php
/**
 * The template for displaying the index
 *
 *
 * @package customTheme
 * @since customTheme 1.0
 */
?>

<!-- SIDEBAR -->
<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
  <aside id="secondary" class="sidebar widget-area" role="complementary">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
  </aside>
<?php endif; ?>
<!-- SIDEBAR -->