<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="UTF-8">
  <meta name="description" content="<?php echo html($site->description()) ?>">
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>">
  <meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="shortcut icon" href="<?php echo url('assets/images/favicon.png') ?>" type="image/png" />
  <link rel="icon" href="<?php echo url('assets/images/favicon.png') ?>" type="image/png" />

  <?php echo css('assets/build/stylesheets/application.min.css') ?>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
</head>

<body class="<?php if($page->isHomePage()) { echo 'l-home'; } ?><?php echo $site->uri->path(1); ?><?php if($site->uri->path(1) == 'blog' && $site->uri->path(2)) { echo ' l-post-view'; } ?>">
  <header class="l-banner" role="banner">
    <div class="l-row group">
      <h1 class="l-banner__logo">
        <a href="<?php echo url() ?>">
          <?php echo h($site->title()) ?>
        </a>
      </h1>
      <?php snippet('menu') ?>
    </div>
  </header>