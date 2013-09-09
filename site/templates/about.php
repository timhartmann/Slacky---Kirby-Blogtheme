<?php snippet('header') ?>

<?php $articles = $page->children()->visible() ?>

<main class="l-row l-cols group" role="main">
	<section class="l-matter l-col-8">
		<article class="m-box">
				<?php echo kirbytext($page->text) ?>
		</article>
	</section>
	<aside class="l-col-4">
		<section>
			<?php echo kirbytext($page->description()) ?>
		</section>
		<section>
			<?php echo kirbytext($page->myself()) ?>
		</section>
		<section>
			<?php echo kirbytext($page->photos()) ?>
		</section>
		<section>
			<?php echo kirbytext($page->webfonts()) ?>
		</section>
	</aside>
</main>

<?php snippet('footer') ?>