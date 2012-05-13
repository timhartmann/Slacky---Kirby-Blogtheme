<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />

  <link rel="shortcut icon" href="<?php echo url('assets/images/favicon.png') ?>" type="image/png" />
  <link rel="icon" href="<?php echo url('assets/images/favicon.png') ?>" type="image/png" />

  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <?php echo css('assets/css/style.css') ?>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>

</head>

<body class="<?php if($page->isHomePage()) { echo 'home'; } ?><?php echo $site->uri->path(1); ?><?php if($site->uri->path(1) == 'blog' && $site->uri->path(2)) { echo ' article'; } ?>">
  <header class="header group">
    <div class="container_12">
      <h1><a class="logo" href="<?php echo url() ?>"><img src="<?php echo url('assets/images/logo.jpg') ?>" alt="<?php echo h($site->title()) ?>" /></a></h1>
      <?php snippet('menu') ?>
    </div>
  </header>