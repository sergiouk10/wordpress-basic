<?php
/**
 * The template for displaying the footer
 *
 *
 * @package customTheme
 * @since customTheme 1.0
 */
?>

<footer id="site-footer">
  <div class="container">

    <span class="site-title">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
    </span>
    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentysixteen' ) ); ?>">
      <?php printf( __( 'Proudly powered by %s', 'twentysixteen' ), 'WordPress' ); ?>
    </a>
    
  </div>
</footer>

<!-- tool top bar -->
<?php wp_footer(); ?>
<!-- tool top bar -->
</body>
</html>