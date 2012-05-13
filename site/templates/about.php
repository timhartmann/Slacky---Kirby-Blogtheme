<?php snippet('header') ?>

<?php $articles = $page->children()->visible() ?>

<section class="content container_12 group">
	<section class="grid_8">
		<article class="group">
				<?php echo kirbytext($page->text) ?>
		</article>
	</section>
	<aside class="grid_4">
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
			<?php echo kirbytext($page->gridsystem()) ?>
		</section>
		<section>
			<?php echo kirbytext($page->webfonts()) ?>
		</section>
	</aside>
</section>

<?php snippet('footer') ?>