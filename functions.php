<?php
  function load_theme()
  {
    wp_enqueue_style( 'style', get_template_directory_uri().'/css/custom.css');
  }
  add_action( 'wp_enqueue_scripts', 'load_theme' );
  require_once('css/wp_bootstrap_navwalker.php');
  add_theme_support( 'post-thumbnails' );
  register_nav_menus(array(
    'main_menu'   => __('Menu Utama'),
    'page_menu' => __('Menu Page')
  ));

  function menu_navbar(){
    if (is_front_page()) {
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
      <li><a href="#kontak" class="page-scroll">KONTAK</a></li>
      ';
    }else{
      $args = array(
        'menu'              => 'page_menu',
        'theme_location'    => 'page_menu',
        'depth'             => 2,
        'container'         => false,
        'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
        'menu_class'        => 'nav navbar-nav',
        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
        'walker'            => new wp_bootstrap_navwalker()
      );
      if ( has_nav_menu( 'page_menu' ) ) :
        wp_nav_menu($args);
      else:
        echo '<li><a href="'.admin_url().'nav-menus.php" class="page-scroll">ADD MENU</a></li>';
      endif;
    }
  }

  function category_link($CatName){
    return get_category_link(get_cat_ID($CatName));
  }
