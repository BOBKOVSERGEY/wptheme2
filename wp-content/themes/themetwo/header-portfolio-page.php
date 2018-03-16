<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/custom.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/liSlidik.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/liSlidik.blackClasic.css">
  <?php wp_head(); ?>
</head>
<body>
<div class="karkas">
  <div class="header">
    <a href="/"><img src="<?php bloginfo('template_url')?>/images/logo.png" class="logo" alt="Fashion photographer" /></a>
    <?php wp_nav_menu( [
        'menu' => '',
        //'depth' => 2,
        'container' => false,
        //'menu_class' => 'rd-navbar-nav',
        //Process nav menu using our custom nav walker
        //'walker' => new wp_bootstrap_navwalker()
      ]
    ); ?>
  </div>