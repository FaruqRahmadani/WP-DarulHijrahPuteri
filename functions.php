<?php
  function load_theme()
  {
    wp_enqueue_style( 'style', get_template_directory_uri().'/css/custom.css');
  }
  add_action( 'wp_enqueue_scripts', 'load_theme' );
  add_theme_support( 'post-thumbnails' );
  register_nav_menus(array(
    'main_menu'   => 'Menu Utama',
    'single_menu' => 'Menu Single'
  ));

  function main_menu(){
    $args = array(
      'theme_location'  => 'main_menu',
      'container'       => false,
      'items_wrap' => '%3$s',
    );
    echo '
    <li><a href="#main" class="page-scroll">BERANDA</a></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">PROFIL <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#intro" class="page-scroll">MOTTO</a></li>
        <li><a href="#intro" class="page-scroll">PANCA JIWA</a></li>
      </ul>
    </li>
    <li><a href="#berita" class="page-scroll">BERITA</a></li>
    <li><a href="#agenda" class="page-scroll">AGENDA</a></li>
    <li><a href="#pengumuman" class="page-scroll">PENGUMUMAN</a></li>
    ';
    if ( has_nav_menu( 'main_menu' ) ) :
      wp_nav_menu($args);
    endif;
    echo '
    <li><a href="#contact" class="page-scroll">KONTAK</a></li>
    <li>
      <form id="search">
        <input type="search" placeholder="cari...">
      </form>
    </li>
    ';
  }
