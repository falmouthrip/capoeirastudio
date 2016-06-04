<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body id="page-top" <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php get_template_part('templates/navigation'); ?>
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <?php get_template_part('templates/introduction'); ?>
    <?php get_template_part('templates/about'); ?>
    <?php get_template_part('templates/slideshow'); ?>
    <?php get_template_part('templates/ribbon'); ?>
    <?php get_template_part('templates/donate'); ?>
    <?php get_template_part('templates/contact'); ?>
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
    <?php get_template_part('templates/remarketing'); ?>
  </body>
</html>
