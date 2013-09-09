<?php snippet('header') ?>

<?php $articles = $page->children()->visible()->flip()->paginate(5) ?>

<main class="l-row l-cols group" role="main">
	<section class="l-matter l-col-8">
		<?php foreach($articles as $article): ?>
			<article class="m-post group">
					<a class="m-post__thumb" href="<?php echo $article->url() ?>" title="<?php echo $article->title() ?>">
						<img src="<?php echo thumb($article->images()->find('headimage.jpg'), array('width' => 130, 'height' => 130, 'crop' => true), false) ?>">
					</a>
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
 		<?php if($articles->pagination()->hasPages()): ?>
			<nav class="m-pagination">

			  <?php if($articles->pagination()->hasNextPage()): ?>
			  <a class="m-pagination__next" href="<?php echo $articles->pagination()->nextPageURL() ?>">Newer posts</a>
			  <?php endif ?>

			  <?php if($articles->pagination()->hasPrevPage()): ?>
			  <a class="m-pagination__prev" href="<?php echo $articles->pagination()->prevPageURL() ?>">Older posts </a>
			  <?php endif ?>

			</nav>
		<?php endif ?>
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