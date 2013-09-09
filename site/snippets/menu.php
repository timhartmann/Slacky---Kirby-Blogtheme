<nav class="m-menu">
  <ul class="group">
    <?php foreach($pages->visible() AS $p): ?>
    <li><a<?php echo ($p->isOpen()) ? ' class="is-active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
    <?php endforeach ?>
  </ul>
</nav>