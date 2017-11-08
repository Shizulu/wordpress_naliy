<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <title>
    <?php wp_title('|', true, 'right'); bloginfo('name'); ?>
  </title>
  <?php wp_head(); ?>
</head>

<body>
  <!--header-->
  <div id="header" class="container">
    <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name') ?></a></h1>
    <?php wp_nav_menu(); ?>
  </div>
  <!--/header-->