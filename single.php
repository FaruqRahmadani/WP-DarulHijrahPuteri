<?= get_header() ?>
<div id="main">
  <div class="container">
    <div id="full-artikel">
      <h2 class="title title-no-border"><?= the_title() ?></h2>
      <?php
      $PostId   = get_the_ID();
      $Category = get_the_category()[0]->name;
      if ($Category != 'Berita'): ?>
        <p>Waktu : <?= get_post_meta($PostId, 'Waktu', true) ?></p>
        <?php if ($Category == 'Agenda'): ?>
          <p>Tempat : <?= get_post_meta($PostId, 'Tempat', true) ?></p>
          <?php
        endif;
      endif;
      if( have_posts() ):
        while( have_posts() ): the_post();
        ?>
        <p><?= the_content() ?></p>
        <?php
      endwhile;
    endif;
    ?>
  </div>
</div>
</div>
<?= get_footer() ?>
