<?php use Roots\Worth\Setup; ?>
<?php use Roots\Worth\Wrapper; ?>

<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_template_part('templates/head'); ?>

  <body <?php body_class(); ?>>

    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'worth'); ?>
      </div>
    <![endif]-->

    <?php do_action('get_header') ?>
    <?php get_template_part('templates/header') ?>

    <div class="wrap" role="document">
      <?php include Wrapper\template_path(); ?>
    </div>

    <?php do_action('get_footer') ?>
    <?php get_template_part('templates/footer') ?>
    <?php wp_footer() ?>
  </body>
</html>
