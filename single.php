<?= get_header() ?>
<div id="main">
  <div class="container">
    <?= get_search_form() ?>
    <div id="full-artikel">
      <h1 class="post-title"><a href="#"><?= the_title() ?></a></h1>
      <?php
      $PostId   = get_the_ID();
      $Category = get_the_category()[0]->name;
      if ($Category != 'Berita'):
      ?>
        <span class="label label-default">Waktu : <?= get_post_meta($PostId, 'Waktu', true) ?></span>
        <?php if ($Category == 'Agenda'): ?>
          <span class="label label-default">Tempat : <?= get_post_meta($PostId, 'Tempat', true) ?></span>
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
