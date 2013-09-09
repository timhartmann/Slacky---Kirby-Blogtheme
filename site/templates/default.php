<?php snippet('header') ?>

<main class="l-row l-cols" role="main">
  <section class="l-matter l-col-8">
    <article class="m-post">
      <h1><?php echo html($page->title()) ?></h1>
      <?php echo kirbytext($page->text()) ?>
    </article>
  </section>
    <aside class="l-col-4">
    <section class="m-widget">
      <?php echo markdown($pages->find('blog/about')->title()) ?>
      <img src="<?php echo $pages->find('blog/about')->images()->find('myself.jpg')->url() ?>">
      <?php echo kirbytext($pages->find('blog/about')->text()) ?>
    </section>
    <section>
      <?php echo kirbytext($pages->find('blog')->description()) ?>
    </section>
  </aside>
</main>

<?php snippet('footer') ?>