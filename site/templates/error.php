<?php snippet('header') ?>

<section class="content container_12 error group">
  <?php $articles = $pages->find('blog')->children()->visible()->flip()->paginate(3) ?>
  <article class="not-avaiable">
    <h1><?php echo html($page->title()) ?></h1>
    <?php echo kirbytext($page->text()) ?>
  </article>
	<?php foreach($articles as $article): ?>
		<article class="grid_3 group">
			<div class="thumb"><?php echo thumb($article->images()->find('headimage.jpg'), array('width' => 130, 'crop' => true)) ?></div>
			<div class="content">
				<hgroup>
					 <a href="<?php echo $article->url() ?>" title="<?php echo $article->title() ?>"><h2><?php echo $article->title() ?></h2></a>
					 <h3>Released at <strong><?php echo $article->releasedate() ?></strong></h3>
				</hgroup>
				<p><?php echo excerpt($article->text(), 300) ?></p>
				<a class="more" href="<?php echo $article->url() ?>">Read more…</a>
			</div>
		</article>
 	<?php endforeach ?>
</section>

<?php snippet('footer') ?>