<?php get_header(); ?>
  <?php

$template_path = locate_template( 'home.php' );

if ( ! empty( $template_path ) ) {
    include $template_path;
}

?>
<?php get_footer(); ?>