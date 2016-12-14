<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/main.css') ?>

</head>
<body>

  <header class="header cf" role="banner">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <a class="logo" href="<?php echo url() ?>">
            <?php snippet('logo') ?>
          </a>
        </div>
        <div class="col-6">
          <?php snippet('menu') ?>
          <button class="button-small medium">Contact Us</button>
        </div>
      </div>
    </div>
  </header>