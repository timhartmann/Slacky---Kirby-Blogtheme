<?php snippet('header') ?>

<section class="content container_12 group">
	<section class="grid_8">
			<article class="group">
				<header>
					<img class="article-img" src="<?php echo $page->images()->find('headimage.jpg')->url() ?>">
					<div class="tweet"><a href="https://twitter.com/intent/tweet?text=<?php echo urlencode($page->title()) ?>:&url=<?php echo url()?><?php echo $site->uri() ?>"></a></div>
					<div class="arrows">
						<div class="prev">
							<?php if($page->hasPrevVisible()): ?>
								<a href="<?php echo $page->prev()->url() ?>">Vorheriger Artikel</a>
							<?php endif ?>
						</div>
						<div class="next">
							<?php if($page->hasNextVisible()): ?>
								<a href="<?php echo $page->next()->url() ?>">Nächster Artikel</a>
							<?php endif ?>
						</div>
					</div>
				</header>
				<div class="content">
					<hgroup>
						<h2><?php echo $page->title() ?></h2>
						<h3>Released at <strong><?php echo $page->releasedate() ?></strong></h3>
					</hgroup>
					<?php echo kirbytext($page->text()) ?>
				</div>
			</article>
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