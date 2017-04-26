<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset=<?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php
      if( is_single() ):
        wp_title(' - ', true, right);
        echo "転職ジャーナル";
      else:
        echo get_bloginfo('description') . " - 転職ジャーナル";
      endif;
    ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/semantic/semantic.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/dist/js/jquery-3.2.0.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/dist/semantic/semantic.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/dist/js/app.js"></script>
    <?php wp_head();?>
  </head>
  <body>
    <div class="wrapper">
      <header class="l-header">
        <div class="l-inner">
          <h1 class="tj-logo"><a class="tj-logo__link" href="/">転職ジャーナル<span class="tj-logo__caption">Tenshoku Journal</span></a></h1>
        </div>
        <nav class="tj-gnav">
          <div class="l-inner">
            <ul class="tj-gnav__menu">
              <li class="tj-gnav__item um-dn"><a class="tj-gnav__link" href="/">HOME</a></li>
              <li class="tj-gnav__item"><a class="tj-gnav__link" href="/ranking">転職サイト・Agent</a></li>
              <li class="tj-gnav__item"><a class="tj-gnav__link" href="/search">求人をさがす</a></li>
              <li class="tj-gnav__item"><a class="tj-gnav__link is_current" href="<?php echo home_url(); ?>">転職を考えたら</a></li>
            </ul>
          </div>
        </nav>
      </header>
