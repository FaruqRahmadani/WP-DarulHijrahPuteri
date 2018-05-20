<?= get_header() ?>
<div id="main">
  <div class="container">
    <div id="full-artikel">
      <h2 class="title title-no-border"><?= the_title() ?></h2>
      <?php
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
