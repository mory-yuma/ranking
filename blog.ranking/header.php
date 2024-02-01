<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('img/common/favicon.ico')); ?>">

  <?php wp_head(); ?>
</head>

<body>
  <header id="header" class="wrapper">
    <div id="logo">
      <?php if ( function_exists( 'the_custom_logo' ) ) : ?>
      <?php the_custom_logo(); ?>
      <?php endif; ?>
    </div>
    <nav id="navi"><?php wp_nav_menu();?></nav>
  </header>