<?php snippet('header') ?>

    <section>
      <?php if ($file = $page->files()->first()): ?>
        <img src="<?= $file->url() ?>" alt="cdainterview guide" class="banner">
      <?php endif ?>
    </section>
    <div id="banner_text">
        <div class="ban_x">CDA Interview Guide</div>
    </div>
    </div>

    <div class="container">
    <div class="article_body">
    <?= $page->text()->kt() ?>
    </div>
    </div>

    <?php snippet('footer') ?>