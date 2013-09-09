<?php snippet('header') ?>

<main class="l-row l-cols group" role="main">
	<section class="l-matter l-col-8">
			<article class="m-post group">
				<header>
					<img class="m-post__img" src="<?php echo $page->images()->find('headimage.jpg')->url() ?>">
					<div class="m-post__tweet">
						<a href="https://twitter.com/intent/tweet?text=<?php echo urlencode($page->title()) ?>:&url=<?php echo url()?><?php echo $site->uri() ?>"></a>
					</div>
					<div class="m-post__arrows">
						<div class="m-post__arrows__prev">
							<?php if($page->hasPrevVisible()): ?>
								<a href="<?php echo $page->prev()->url() ?>">previous article</a>
							<?php endif ?>
						</div>
						<div class="m-post__arrows__next">
							<?php if($page->hasNextVisible()): ?>
								<a href="<?php echo $page->next()->url() ?>">next article</a>
							<?php endif ?>
						</div>
					</div>
				</header>
				<div class="m-post__content">
					<h2><?php echo $page->title() ?></h2>
					<h3>Released at <strong><?php echo $page->releasedate() ?></strong></h3>
					<?php echo kirbytext($page->text()) ?>
				</div>
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