<?php snippet('header') ?>

<main class="l-row l-error group" role="main">
  <?php $articles = $pages->find('blog')->children()->visible()->flip()->paginate(3) ?>
  <article class="l-cols m-post--not-avaiable">
    <div class="l-col-12">
      <h1><?php echo html($page->title()) ?></h1>
      <?php echo kirbytext($page->text()) ?>
    </div>
  </article>
  <div class="l-cols">
  	<?php foreach($articles as $article): ?>
  		<article class="m-post l-col-6 group">
  			<div class="m-post__thumb">
          <?php echo thumb($article->images()->find('headimage.jpg'), array('width' => 130, 'crop' => true)) ?>
        </div>
  			<div class="m-post__content">
          <h2>
            <a href="<?php echo $article->url() ?>" title="<?php echo $article->title() ?>"><?php echo $article->title() ?></a>
          </h2>
          <h3>Released at <strong><?php echo $article->releasedate() ?></strong></h3>
  				<p><?php echo excerpt($article->text(), 300) ?></p>
  				<a class="m-post__more" href="<?php echo $article->url() ?>">Read more…</a>
  			</div>
  		</article>
   	<?php endforeach ?>
  </div>
</main>

<?php snippet('footer') ?>