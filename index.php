<?= get_header() ?>
<div id="main">
  <div class="container">
    <?= get_search_form() ?>
    <div id="slides">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <?php
        $query = new WP_Query( array( 'category_name' => 'Slider' ) );
        if( $query->have_posts() ):
          ?>
          <ol class="carousel-indicators">
            <?php
            $index = 0;
            while( $query->have_posts() ): $query->the_post();
            if( has_post_thumbnail() ):
              ?>
              <li data-target="#myCarousel" data-slide-to="<?= $index ?>" class=" <?= $index == 0 ? 'active' : '' ?> ">
                <?php
                $index+=1;
              endif;
            endwhile;
            ?>
          </ol>
          <div class="carousel-inner">
            <?php
            $index = 0;
            while( $query->have_posts() ): $query->the_post();
            if( has_post_thumbnail() ):
              ?>
              <div class="item <?= $index == 0 ? 'active' : '' ?>">
                <img src="<?= wp_get_attachment_url(get_post_thumbnail_id()) ?>" alt="<?= the_title() ?>" style="width:100%;">
              </div>
              <?php
              $index+=1;
            endif;
          endwhile;
        endif;
        ?>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
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
          <?php
          $query = new WP_Query( array(
            'category_name' => 'Berita' ,
            'posts_per_page' => 3,
          ) );
          if( $query->have_posts() ):
            while( $query->have_posts() ): $query->the_post();
          ?>
          <li class="item-artikel">
            <h4><a href="<?= the_permalink() ?>"><?= the_title() ?></a></h4>
            <p><?= the_excerpt() ?></p>
          </li>
          <?php
            endwhile;
          else:
          ?>
          <li class="item-artikel">
            <h4><a href="#"></a></h4>
            <p>Tidak Ada Berita Terbaru</p>
          </li>
          <?php
          endif;
          ?>
          <a class="show-button" href="<?= category_link('Berita') ?>">Lihat semua berita...</a>
        </ul>
      </div>
    </div>
    <div class="col-md-4">
      <div id="agenda">
        <h2 class="text-center">AGENDA</h2>
        <ul class="list-agenda">
          <?php
          $query = new WP_Query( array(
            'category_name' => 'Agenda' ,
            'posts_per_page' => 5,
          ));
          if( $query->have_posts() ):
            while( $query->have_posts() ): $query->the_post();
              $PostId = get_the_ID();
              $Waktu  = get_post_meta($PostId, 'Waktu', true);
              $Tempat = get_post_meta($PostId, 'Tempat', true);
          ?>
          <li class="item-agenda">
            <h4><a href="<?= the_permalink() ?>"><?= the_title() ?></a></h4>
            <p><?= $Waktu ?></p>
            <p><?= $Tempat ?></p>
          </li>
          <?php
            endwhile;
          else:
          ?>
          <li class="item-agenda">
            <h4><a href="#"></a></h4>
            <p>Tidak Ada Agenda Terbaru</p>
          </li>
          <?php
          endif;
          ?>
          <a class="show-button" href="<?= category_link('Agenda') ?>">Lihat semua agenda...</a>
        </ul>
      </div>
    </div>
    <div class="col-md-4">
      <div id="pengumuman">
        <h2 class="text-center">PENGUMUMAN</h2>
        <ul class="list-pengumuman">
          <?php
          $query = new WP_Query( array(
            'category_name' => 'Pengumuman' ,
            'posts_per_page' => 5,
          ));
          if( $query->have_posts() ):
            while( $query->have_posts() ): $query->the_post();
              $PostId = get_the_ID();
              $Waktu  = get_post_meta($PostId, 'Waktu', true);
          ?>
          <li class="item-pengumuman">
            <h4><a href="<?= the_permalink() ?>"><?= the_title() ?></a></h4>
            <p><?= $Waktu ?></p>
          </li>
          <?php
            endwhile;
          else:
            ?>
          <li class="item-pengumuman">
            <h4><a href="#"></a></h4>
            <p>Tidak Ada Pengumuman Terbaru</p>
          </li>
          <?php
          endif;
          ?>
          <a class="show-button" href="<?= category_link('Pengumuman') ?>">Lihat semua pengumuman...</a>
        </ul>
      </div>
    </div>
  </div>
</div>
<?= get_footer() ?>
