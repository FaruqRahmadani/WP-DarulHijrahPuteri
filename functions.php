<?php
  function load_theme()
  {
    wp_enqueue_style( 'style', get_template_directory_uri().'/css/custom.css');
  }

  add_action( 'wp_enqueue_scripts', 'load_theme' );
