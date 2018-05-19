<?= get_header() ?>
<div id="main">
  <div class="container">
    <div id="slides">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="<?= get_template_directory_uri() ?>/img/slider/slide1.jpg" alt="slide 1">
          </div>
          <div class="item">
            <img src="<?= get_template_directory_uri() ?>/img/slider/slide2.jpg" alt="slide 2">
          </div>
          <div class="item">
            <img src="<?= get_template_directory_uri() ?>/img/slider/slide3.jpg" alt="slide 3">
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div id="intro">
      <div class="text-center">
        <h2 class="title title-no-border">SELAYANG PANDANG</h2>
        <p>Pondok pesantren di Kalimantan Selatan yang turut mewarnai dunia pendidikan Indonesia sejak tahun 1995. Di bawah naungan Yayasan Pendidikan Darul Hijrah Puteri, pondok pesantren ini mempunyai dua buah lembaga pendidikan, yaitu Sekolah Menengah Pertama Darul Hijrah Puteri (SMP Darul Hijrah Puteri) dan Sekolah Menengah Atas Darul Hijrah Puteri (SMA Darul Hijrah Puteri).</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div id="visi">
          <h2 class="title title-no-border text-center">MOTTO</h2>
          <p>Pendidikan dan Pengajaran (tarbiyah wa al-Ta’lim) Pondok Pesantren Darul Hijrah Puteri menekankan pada pembentukan pribadi mukminah muslimah yang berbudi tinggi, berbadan sehat, berpengetahuan luas dan berpikiran bebas. Kriteria atau sifat-sifat utama ini merupakan motto pendidikan yang dilejitkan di Pondok Pesantren Darul Hijrah Puteri.</p>
          <ol>
            <li>Berbudi Tinggi</li>
            <li>Berbadan Sehat</li>
            <li>Berpengatahuan Luas</li>
            <li>Berfikiran Bebas</li>
          </ol>
        </div>
      </div>
      <div class="col-md-6">
        <div id="misi">
          <h2 class="title title-no-border text-center">PANCA JIWA</h2>
          <p>Lini kehidupan di Pondok Pesantren Darul Hijrah Puteri merupakan lejitan dari nilai-nilai yang menjadi ruh dalam keseharian dan kepribadian yang tidak terikat dengan tempat dan suasana, nilai-nilai inila yang dibalut dalam Panca Jiwa Pondok, sebagai dasar kehidupan santriwati Pondok Pesantren Darul Hijrah Puteri :
          </p>
          <ol>
            <li>Keikhlasan</li>
            <li>Kesederhanaan</li>
            <li>Berdikari</li>
            <li>Ukhuwah Islamiyah</li>
            <li>Kebebasan</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div id="berita">
          <h2 class="text-center">BERITA TERBARU</h2>
          <ul class="list-artikel">
            <li class="item-artikel">
              <h4><a href="#">BERITA SATU</a></h4>
              <p>Naturally, we know where Bali's newest restaurants are and what to order, so give that private chef a rest and check out these spanking new haunts.</p>
            </li>
            <li class="item-artikel">
              <h4><a href="#">BERITA DUA</a></h4>
              <p>Naturally, we know where Bali's newest restaurants are and what to order, so give that private chef a rest and check out these spanking new haunts.</p>
            </li>
            <li class="item-artikel">
              <h4><a href="#">BERITA TIGA</a></h4>
              <p>Naturally, we know where Bali's newest restaurants are and what to order, so give that private chef a rest and check out these spanking new haunts.</p>
            </li>
            <a class="show-button" href="#">Lihat semua berita...</a>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <div id="agenda">
          <h2 class="text-center">AGENDA</h2>
          <ul class="list-agenda">
            <li class="item-agenda">
              <h4><a href="#">AGENDA SATU</a></h4>
              <p>01 Januari 2018 / 10:00 - Selesai</p>
              <p>Aula Sekolah</p>
            </li>
            <li class="item-agenda">
              <h4><a href="#">AGENDA DUA</a></h4>
              <p>01 Januari 2018 / 10:00 - Selesai</p>
              <p>Aula Sekolah</p>
            </li>
            <li class="item-agenda">
              <h4><a href="#">AGENDA TIGA</a></h4>
              <p>01 Januari 2018 / 10:00 - Selesai</p>
              <p>Aula Sekolah</p>
            </li>
            <li class="item-agenda">
              <h4><a href="#">AGENDA EMPAT</a></h4>
              <p>01 Januari 2018 / 10:00 - Selesai</p>
              <p>Aula Sekolah</p>
            </li>
            <li class="item-agenda">
              <h4><a href="#">AGENDA LIMA</a></h4>
              <p>01 Januari 2018 / 10:00 - Selesai</p>
              <p>Aula Sekolah</p>
            </li>
            <a class="show-button" href="#">Lihat semua agenda...</a>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <div id="pengumuman">
          <h2 class="text-center">PENGUMUMAN</h2>
          <ul class="list-pengumuman">
            <li class="item-pengumuman">
              <h4><a href="#">PENGUMUMAN SATU</a></h4>
              <p>01 Januari 2018</p>
            </li>
            <li class="item-pengumuman">
              <h4><a href="#">PENGUMUMAN DUA</a></h4>
              <p>01 Januari 2018</p>
            </li>
            <li class="item-pengumuman">
              <h4><a href="#">PENGUMUMAN TIGA</a></h4>
              <p>01 Januari 2018</p>
            </li>
            <li class="item-pengumuman">
              <h4><a href="#">PENGUMUMAN EMPAT</a></h4>
              <p>01 Januari 2018</p>
            </li>
            <li class="item-pengumuman">
              <h4><a href="#">PENGUMUMAN LIMA</a></h4>
              <p>01 Januari 2018</p>
            </li>
            <a class="show-button" href="#">Lihat semua pengumuman...</a>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<?= get_footer() ?>
