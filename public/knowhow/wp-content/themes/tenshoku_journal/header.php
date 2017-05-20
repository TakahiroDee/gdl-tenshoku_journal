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
    <link rel="shortcut icon" href="/dist/image/icon.ico">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/semantic/semantic.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="/dist/css/style.css">
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/dist/js/jquery-3.2.0.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/dist/semantic/semantic.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/dist/js/app.js"></script>
    <?php wp_head();?>
  </head>
  <body>
    <div class="wrapper">
      <header class="l-header">
        <div class="l-header__upper">
          <div class="l-inner">
            <h1 class="c-logo"><a class="c-logo__link" href="/"><img src="/dist/image/journal_logo.png"></a></h1>
          </div>
        </div>
        <div class="l-header__lower">
          <div class="l-inner">
            <nav class="b-gnav">
              <ul class="b-gnav__list">
                <li class="b-gnav__item u-dn"><a class="b-gnav__link" href="/">HOME</a></li>
                <li class="b-gnav__item"><a class="b-gnav__link" href="/ranking/agent/">転職サイト・Agent</a>
                </li>
                <li class="b-gnav__item"><a class="b-gnav__link" href="/search/">求人をさがす</a></li>
                <li class="b-gnav__item"><a class="b-gnav__link" href="/knowhow">転職を考えたら</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </header>
