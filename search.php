<?= get_header() ?>
<div id="main">
  <div class="container">
    <?= get_search_form() ?>
    <div id="full-artikel">
      <?php
      if( have_posts() ):
        while( have_posts() ): the_post();
        ?>
        <a href="<?= the_permalink() ?>"><h2 class="title title-no-border"><?= the_title() ?></h2></a>
        <p><?= the_excerpt() ?></p>
        <?php
      endwhile;
    else:
    ?>
      <h2 class="title title-no-border">TIDAK ADA POST TERKAIT</h2>
    <?php
    endif;
    ?>
    </div>
  </div>
</div>
<?= get_footer() ?>
