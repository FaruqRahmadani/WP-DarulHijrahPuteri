<?= get_header() ?>
<div id="main">
  <div class="container">

    <div class="text-center">
      <form id="search">
        <input type="search" placeholder="search..." style="text-align: center;">
      </form>
    </div>
    <div class="text-center">
      <h1><?= single_cat_title() ?></h1>
    </div>
    <ul id="all-post">
      <?php
      if( have_posts() ):
        while( have_posts() ): the_post();
        ?>
        <li>
          <h1 class="post-title"><a href="<?= the_permalink() ?>"><?= get_the_title() ?></a></h1>
          <div class="date"><?= get_the_date() ?></div>
        </li>
        <?php
      endwhile;
    endif;
    ?>
  </ul>

</div>
</div>
<?= get_footer() ?>
