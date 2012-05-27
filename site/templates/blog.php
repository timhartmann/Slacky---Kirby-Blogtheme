<?php snippet('header') ?>

<?php $articles = $page->children()->visible()->flip()->paginate(5) ?>

<section class="content container_12 group">
	<section class="grid_8">
		<?php foreach($articles as $article): ?>
			<article class="group">
				<div class="thumb">
					<a href="<?php echo $article->url() ?>" title="<?php echo $article->title() ?>">
						<?php echo thumb($article->images()->find('headimage.jpg'), array('width' => 130, 'crop' => true)) ?>
					</a>
				</div>
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
 		<?php if($articles->pagination()->hasPages()): ?>
			<nav class="pagination">  

			  <?php if($articles->pagination()->hasNextPage()): ?>
			  <a class="next" href="<?php echo $articles->pagination()->nextPageURL() ?>">Newer posts</a>
			  <?php endif ?>

			  <?php if($articles->pagination()->hasPrevPage()): ?>
			  <a class="prev" href="<?php echo $articles->pagination()->prevPageURL() ?>">Older posts </a>
			  <?php endif ?>

			</nav>
		<?php endif ?>
	</section>
	<aside class="grid_4">
		<section class="myself">
			<?php echo markdown($pages->find('blog/about')->title()) ?>
			<img src="<?php echo $pages->find('blog/about')->images()->find('myself.jpg')->url() ?>">
			<?php echo kirbytext($pages->find('blog/about')->text()) ?>
		</section>
		<section>	
			<?php echo kirbytext($pages->find('blog')->description()) ?>
		</section>
	</aside>
</section>

<?php snippet('footer') ?>