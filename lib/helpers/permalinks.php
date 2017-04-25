<?php
  add_action('init', 'change_permalinks');
  function change_permalinks() {
      global $wp_rewrite;
      $wp_rewrite->set_permalink_structure('/%category%/%postname%/');
      $wp_rewrite->flush_rules();
  }
