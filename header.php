<?php wp_head() ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SMA DARUL HIJRAH PUTERI</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            <img src="<?= get_template_directory_uri() ?>/img/logo.png" alt="Logo">
          </a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html" class="page-scroll">BERANDA</a></li>
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
            <li><a href="#">GALERI</a></li>
            <li><a href="#kontak" class="page-scroll">KONTAK</a></li>
            <li>
              <form id="search">
                <input type="search" placeholder="cari..." style="text-align: center;">
              </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
