<?php

// add theme support
add_theme_support('post-thumbnails');

// add filter
function new_excerpt_more($more){
  return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

// remove filter
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');

// custom function
function get_category_tags(){
  $categories = get_the_category();
  if($categories){
    $output = '<div class="tj-article__contentTags">';
    foreach($categories as $category){
      $output .= '<div class="tj-article__contentTag ui tag label"><a href="';
      $output .= get_category_link($category->term_id);
      $output .= '">';
      $output .= $category->name;
      $output .= '</a></div>';
    }
    $output .= '</div>';
  }
  return $output;
}


function get_pagination($pager_max = 5){
  global $wp_query;

  $currentpage = max(1, get_query_var('paged'));
  $lastpage = intval($wp_query->max_num_pages);

  $pagination = '<div class="tj-article__pagination"><div class="ui pagination menu">';

  if($currentpage !== 1):
    $pagination .= '<a class="item" href="' . get_pagenum_link(1) . '">先頭へ</a>';
  endif;

  if($lastpage < $pager_max):
    for($i = 1; $i <= $lastpage; $i++){
      if($i == $currentpage){
        $pagination .= '<a class="active item">' . $i . '</a>';
      }else{
        $link = get_pagenum_link($i);
        $pagination .= '<a class="item" href="' . $link .'">' . $i . '</a>';
      }
    }

  elseif($lastpage >= $pager_max):
    if( $currentpage <= ceil($pager_max/2) ):
      for($i = 1; $i <= $pager_max; $i++){
        if($i == $currentpage){
          $pagination .= '<a class="active item">' . $i . '</a>';
        }else{
          $link = get_pagenum_link($i);
          $pagination .= '<a class="item" href="' . $link .'">' . $i . '</a>';
        }
      }
    // currentが中央にくる時
    elseif( $currentpage > ceil($pager_max/2) && $currentpage < $lastpage - ceil($pager_max/2)):
      $max_prev = $currentpage - floor($pager_max/2);
      $max_next = $currentpage + floor($pager_max/2);

      for($i = $max_prev; $i <= $max_next; $i++){
        if($i == $currentpage){
          $pagination .= '<a class="active item">' . $i . '</a>';
        }else{
          $link = get_pagenum_link($i);
          $pagination .= '<a class="item" href="' . $link .'">' . $i . '</a>';
        }
      }

    // currentがlastpageと接近した時
    elseif($currentpage >= $lastpage - ceil($pager_max/2)):
      $max_prev = $lastpage - ($pager_max - 1);

      for($i = $max_prev; $i <= $lastpage; $i++){
        if($i == $currentpage){
          $pagination .= '<a class="active item">' . $i . '</a>';
        }else{
          $link = get_pagenum_link($i);
          $pagination .= '<a class="item" href="' . $link .'">' . $i . '</a>';
        }
      }

    endif;
  endif;

  if($currentpage !== $lastpage):
    $pagination .= '<a class="item" href="' . get_pagenum_link($lastpage) .'">最後へ</a>';
  endif;

  $pagination .= '</div></div>';

  echo $pagination;
}

function get_eyecatch(){
  $src = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
  echo '<img class="tj-articleHeader__thumb" src="' . $src[0] . '">';
}


function get_category_list(){
  $arg = array(
    'orderby' => 'name',
  );
  $terms = get_terms('category', $arg);
  $catlist = '<aside class="tj-knowhow"><h2>カテゴリ一覧</h2><ul class="tj-knowhow__catlist">';

  foreach($terms as $term){
    $catlist .= '<li class="tj-knowhow__catitem catid-' . $term->term_id . '">';
    $catlist .= '<a class="tj-knowhow__catlink" href="' . get_category_link(get_category($term->term_id)) . '">';
    $catlist .= '<i class="write icon"></i>' . $term->name . '<i class="angle right icon"></i></a></li>';
  }
  $catlist .= '</ul></aside>';
  echo $catlist;
}

function get_breadcrumb(){
  global $post;

  $breadcrumb_before = '<div class="ui breadcrumb tj-breadcrumb"><div class="l-inner">';
  $breadcrumb_after  = '</div></div>';
  $breadcrumb_inner  = '<a class="section tj-breadcrumb_first" href="/">HOME</a><i class="right angle icon divider"></i>';
  $breadcrumb_inner .= '<a class="section" href="' . home_url() . '">転職を考えたら</a>';

  if( is_single() )
  {
    $breadcrumb_inner .= '<i class="right angle icon divider"></i>';

    $categories = get_the_category($post->ID);
    $cat = $categories[0];
    $ancestors = array_reverse(get_ancestors($cat->cat_ID, 'category'));

    if(count($ancestors) !== 0)
    {
      foreach($ancestors as $ancestor)
      {
        $breadcrumb_inner .= '<a class="section" href="' . get_category_link($ancestor) . '">' . get_the_category($ancestor)[0]->name . '</a>';
        $breadcrumb_inner .= '<i class="right angle icon divider"></i>';
      }
    }

    $breadcrumb_inner .= '<a class="section" href="' . get_category_link($cat->cat_ID) . '">' . $cat->name . '</a><i class="right angle icon divider"></i><br/>';
    $breadcrumb_inner .= '<p class="section" style="margin:0.5em 0;">' . $post->post_title . '</p>';
  }
  elseif( is_category() )
  {
    $breadcrumb_inner .= '<i class="right angle icon divider"></i>';
    $breadcrumb_inner .= '<span>' . get_queried_object()->cat_name .'の記事一覧</span>';
  }
  elseif( is_404() )
  {
    $breadcrumb_inner .= '<i class="right angle icon divider"></i>';
    $breadcrumb_inner .= '<span>Sorry Not Found <i class="warning circle icon"></i></span>';
  }
  elseif( is_page() )
  {
    $breadcrumb_inner .= '<i class="right angle icon divider"></i>';
    $breadcrumb_inner .= $post->post_title;

  }

  $breadcrumb .= $breadcrumb_before . $breadcrumb_inner . $breadcrumb_after;

  echo $breadcrumb;
}


function get_fixed_page_sidebar($posttype = 'fixed'){
  // for fixed page
  $page1 = get_post(55);
  $page2 = get_post(104);
  $page3 = get_post(123);
  $page4 = get_post(128);
  $page_arr = [$page1,$page2,$page3,$page4];

  // for ranking


  $thumbnail_size = [55,55];

  $config = array(
    'class' => 'tj-knowhow__thumb'
  );

  if($posttype == 'fixed')
  {

    $html = '<aside class="tj-knowhow"><h2>注目の記事</h2><ul class="tj-knowhow__list">';

    foreach($page_arr as $page)
    {
      if(isset($page))
      {
        $html .= '<li class="tj-knowhow__item">';
        $html .= '<a class="tj-knowhow__link" href="'. get_page_link($page->ID) . '">';
        $html .= get_the_post_thumbnail($page->ID,$thumbnail_size,$config);
        $html .= '<div class="tj-knowhow__lead"><p>';
        $html .= $page->post_title;
        $html .= '</p></div></a></li>';

      }else{

        $html .= '<li class="tj-knowhow__item">';
        $html .= '<a class="tj-knowhow__link" href="#">';
        $html .= '<img class="tj-knowhow__thumb" src="https://dummyimage.com/55x55/dedede/bbb.png&amp;text=Dummy" width="55" height="55">';
        $html .= '<div class="tj-knowhow__lead">';
        $html .= '<p>ここにテキストが入ります。ここにテキストが入ります。</p>';
        $html .= '</div></a></li>';

      }
    }

    $html .= '</ul></aside>';

  }elseif($posttype == 'ranking')
  {
    $html = '<aside class="tj-knowhow"><h2>人気の記事一覧</h2><ul class="tj-knowhow__list">';

    $posts_arr = get_posts(array(
      'post_per_page' => 6,
      'orderby'       => 'rand'
    ));

    foreach($posts_arr as $post)
    {
      if(isset($post))
      {
        $html .= '<li class="tj-knowhow__item">';
        $html .= '<a class="tj-knowhow__link" href="'. get_permalink($post->ID) . '">';
        if("" !== get_the_post_thumbnail($post->ID)){
          $html .= get_the_post_thumbnail($post->ID,$thumbnail_size,$config);
        }else{
          $html .= '<img class="tj-knowhow__thumb" src="https://dummyimage.com/55x55/dedede/bbb.png&amp;text=Dummy" width="55" height="55">';
        }
        $html .= '<div class="tj-knowhow__lead"><p>';
        $html .= $post->post_title;
        $html .= '</p></div></a></li>';

      }else{

        $html .= '<li class="tj-knowhow__item">';
        $html .= '<a class="tj-knowhow__link" href="#">';
        $html .= '<img class="tj-knowhow__thumb" src="https://dummyimage.com/55x55/dedede/bbb.png&amp;text=Dummy" width="55" height="55">';
        $html .= '<div class="tj-knowhow__lead">';
        $html .= '<p>ここにテキストが入ります。ここにテキストが入ります。</p>';
        $html .= '</div></a></li>';

      }
    }

    $html .= '</ul></aside>';

  }

  echo $html;
}
